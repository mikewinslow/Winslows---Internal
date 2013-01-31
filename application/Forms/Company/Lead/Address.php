<?php
namespace Forms\Company\Lead;

class Address extends \Dataservice_Form
{    
    private $_Address;
    
    public function __construct(\Entities\Company\Lead\Address $Address, $options = null)
    {
	$this->_Address = $Address;
	
	parent::__construct($options);
    }
    
    public function init($options = array())
    {
	$form = new Address\Subform($this->_Address, $options);
	
	$this->addSubForm($form, "company_lead_address");
	
	$this->addElement('submit', 'submit', array(
            'ignore'	    => true,
        ));
    }
}