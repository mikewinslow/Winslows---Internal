<?php
namespace Forms\Company\Website;

class Subform extends \Forms\Company\Website\WebsiteAbstract\Subform
{
    private $_Website;
    
    public function __construct( \Entities\Company\Website\WebsiteAbstract $Website, $options = null)
    {
	$this->_Website = $Website;
	
	parent::__construct($Website, $options);
    }
    
    public function init()
    {		
	$this->addElement(new \Dataservice_Form_Element_CompanySelect("company_id", array(
            'required'	    => true,
            'label'	    => 'Company:',
	    'value'	    => $this->_Website && $this->_Website->getCompany() ? $this->_Website->getCompany()->getId() : ""
        )));
	
	parent::init();
	
	$this->setElementsBelongTo("company_website");
    }
}