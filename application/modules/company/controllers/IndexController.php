<?php
class Company_IndexController extends Dataservice_Controller_Crud_Action
{    
    protected $_EntityClass = "Entities\Company";
    
    public function indexAction()
    {
	$this->view->headScript()->appendFile("/javascript/company/lead/search.js");
	
	$this->view->Account = $this->_Website->getCurrentUserAccount(\Zend_Auth::getInstance());
    }
    
    public function viewAction()
    {
	if(!$this->_getParam("id") && !$this->_Entity->getId())
	{
	    $this->_Entity = $this->_Website->getCompany();
	}
	
	parent::viewAction();
    }
}

