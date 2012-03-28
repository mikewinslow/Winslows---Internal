<?php
/**
 * Description of Controller
 * 
 * @author Jessie
 */

class LoginController extends Zend_Controller_Action
{
    public function getForm()
    {
        return new Form_Login_Login(array(
            'action' => '/login/process',
            'method' => 'post',
        ));
    }

    public function getAuthAdapter($identity, $credential)
    {
	$em = $this->_helper->EntityManager();
        $authAdapter = new Dataservice_Auth_Adapter_Doctrine($em, $identity, $credential);
	
        return $authAdapter;
    }

    public function preDispatch()
    {
        if (Zend_Auth::getInstance()->hasIdentity()) {
            // If the user is logged in, we don't want to show the login form;
            // however, the logout action should still be available
            if ('logout' != $this->getRequest()->getActionName()) {
                $this->_helper->redirector('index', 'index');
            }
        } else {
            // If they aren't, they can't logout, so that action should
            // redirect to the login form
            if ('logout' == $this->getRequest()->getActionName()) {
                $this->_helper->redirector('index');
            }
        }
    }

    public function indexAction()
    {
        $this->view->form = $this->getForm();
    }

    public function processAction()
    {
        $request = $this->getRequest();

        // Check if we have a POST request
        if (!$request->isPost()) {
            return $this->_helper->redirector('index');
        }

        // Get our form and validate it
        $form = $this->getForm();
        if (!$form->isValid($request->getPost())) {
            // Invalid entries
            $this->view->form = $form;
	    Zend_Auth::getInstance()->clearIdentity();
            return $this->render('index'); // re-render the login form
        }

        // Get our authentication adapter and check credentials
	$data	    = $form->getValues();
        $adapter    = $this->getAuthAdapter($data['username'], $data['password']);
	$result	    = $adapter->authenticate();
	$auth	    = Zend_Auth::getInstance();
	$data	    = $adapter->getWebaccount();
        $auth->getStorage()->write($data);
	
        if (!$result->isValid()) {
            // Invalid credentials
	    $string = "";
	    foreach($result->getMessages() as $message){
		$string .= "$message \n";
	    }
	    $string .= "";
	    $form->setDecorators(array('Description',
		'FormElements',
		'Form'
	    ));
	    $form->setDescription($string);
            $this->view->form = $form;
	    Zend_Auth::getInstance()->clearIdentity();
            return $this->render('index'); // re-render the login form
        }

        // We're authenticated! Redirect to the home page
        $session    = new Zend_Session_Namespace('Dataservice');
	$session->redirect ? $this->_helper->redirector->gotoUrl($session->redirect) : $this->_helper->redirector('index', 'index');
    }

    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
	$session		= new Zend_Session_Namespace('Dataservice');
	$session->redirect	= "/index/index";
        $this->_helper->redirector('index'); // back to login page
    }
}