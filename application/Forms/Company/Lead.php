<?php
namespace Forms\Company;

class Lead extends \Dataservice_Form
{    
    private $_Lead;
    
    public function __construct($options = null, \Entities\Company\Lead $Lead = null)
    {
	$this->_Lead = $Lead;
	
	parent::__construct($options);
    }
    
    public function init($options = array())
    {
	$form = new Lead\Subform($options, $this->_Lead);
	
	$this->addSubForm($form, "company_lead");
	
	$this->addElement('submit', 'submit', array(
            'ignore'   => true,
        ));
    }
}