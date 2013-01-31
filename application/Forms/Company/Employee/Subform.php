<?php
namespace Forms\Company\Employee;

class Subform extends \Forms\Company\Person\Subform
{    
    private $_Employee;
    
    public function __construct(\Entities\Company\Employee  $Employee, $options = null) 
    {
	$this->_Employee = $Employee;
	
	parent::__construct($options, $this->_Employee);
    }
    
    public function init($options = array())
    {	
	$this->addElement(new \Dataservice_Form_Element_CompanySelect("company_id", array(
            'required'	    => true,
            'label'	    => 'Company:',
	    'belongsTo'	    => 'company_employee',
	    'value'	    => $this->_Employee && $this->_Employee->getCompany() ? $this->_Employee->getCompany()->getId() : ""
        )));
	
	$this->addElement(new \Dataservice_Form_Element_Company_Location_Select($this->_Employee->getCompany(), "location_id", array(
            'required'	    => true,
            'label'	    => 'Location:',
	    'belongsTo'	    => 'company_employee',
	    'value'	    => $this->_Employee && $this->_Employee->getLocation() ? $this->_Employee->getLocation()->getId() : ""
        )));
	
        $this->addElement('text', 'title', array(
            'required'	    => false,
            'label'	    => 'Title:',
	    'belongsTo'	    => 'company_employee',
	    'value'	    => $this->_Employee ? $this->_Employee->getTitle() : ""
        ));
	parent::init($options);
    }
}