<?php
/**
 * Description of Controller
 * 
 * @author Jessie
 */
require_once APPLICATION_PATH.'/classes/__LoginForm.php';

class Texwin_LoginController extends Dataservice_Controller_Action
{
    public function getForm()
    {
        return new __LoginForm(array(
            'action' => '/login/process',
            'method' => 'post',
        ));
    }

    public function getAuthAdapter(array $params)
    {
        // Leaving this to the developer...
        // Makes the assumption that the constructor takes an array of
        // parameters which it then uses as credentials to verify identity.
        // Our form, of course, will just pass the parameters 'username'
        // and 'password'.
	#--Get db connection from registry stored there in bootstrap
	$dbAdapter = Zend_Registry::get('db');
        
        $authAdapter = new Zend_Auth_Adapter_DbTable($dbAdapter);

        $authAdapter->setTableName('users')
            ->setIdentityColumn('users_email')
            ->setCredentialColumn('users_pwd')
	    ->setIdentity(trim($params['users_email']))
            ->setCredential(sha1(trim($params['users_pwd'])));
	    ;
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
        $adapter = $this->getAuthAdapter($form->getValues());
        $auth    = Zend_Auth::getInstance();
        $result  = $auth->authenticate($adapter);
	//Zend_Debug::dump($result);
	$omit = array(
                'users_pwd',
        );
	$data = $adapter->getResultRowObject(null, $omit);
        $auth->getStorage()->write($data);
        if (!$result->isValid()) {
            // Invalid credentials
            $form->setDescription('Invalid credentials provided');
            $this->view->form = $form;
	    Zend_Auth::getInstance()->clearIdentity();
            return $this->render('index'); // re-render the login form
        }

        // We're authenticated! Redirect to the home page
        $this->_helper->redirector('index', 'index');
    }

    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->redirector('index'); // back to login page
    }
}