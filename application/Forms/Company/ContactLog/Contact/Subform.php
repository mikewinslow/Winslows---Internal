<?php
namespace Forms\Company\ContactLog\Contact;

class Subform extends \Zend_Form_SubForm
{
    private $_Contact;
    
    public function __construct(\Entities\Company\ContactLog\Contact $Contact, $options = null)
    {
	$this->_Contact = $Contact;
	
	parent::__construct($options);
    }
    
    public function init()
    {
	$this->addElement('hidden', 'contactlog_id', array(
            'required'	    => true,
	    'value'	    => $this->_Contact->getContactLog() ? $this->_Contact->getContactLog()->getId() : ""
        ));
	
	$this->addElement(
	    new \Dataservice\Form\Element\Company\Employee\Lead\AutoComplete(
		'function(event,ui) { C = new Company_Contact_Log_Contact_Edit();C.FormAddPerson(ui.item.id, ui.item.label); }',
		"people_picker", 
		array(
		    'required'	    => true,
		    'label'	    => 'People:',
		    'value'	    => ""
		)
	    )
	);
	
	$people = array();
	
	foreach($this->_Contact->getPeople() as $Person)
	{
	    $people[$Person->getId()] = $Person->getDescriminator()." - ".$Person->getFullName();
	}
	
	$people_json = json_encode($people);
	
	$this->addElement('hidden', 'people', array(
            'required'	    => true,
            'label'	    => '',
	    'value'	    => $people_json,
	    'description'   => $people ? implode(", ", $people) : "none"
        ));
	
	$this->addElement('select', 'medium', array(
            'required'	    => true,
            'label'	    => 'Receiving Medium:',
	    'value'	    => '',
	    'multioptions'  => array("1" => "Lead Phone - 214-554-8678", "2" => "Employee Phone - 214-554-5555")
        ));
	
	$this->addElement('text', 'date_time_value', array(
            'required'	    => true,
            'label'	    => 'Date/Time:',
	    'class'	    => 'ui-date-time-picker',
	    'value'	    => $this->_Contact->getDateTime() ? $this->_Contact->getDateTime()->format("Y-m-d H:i:s") : ""
        ));
	
	$this->addElement('textarea', 'description', array(
            'required'	    => false,
            'label'	    => 'Description:',
	    'style'	    => 'width:200px;height:150px;',
	    'value'	    => $this->_Contact ? $this->_Contact->getDescription() : ""
        ));
	
	$this->setElementsBelongTo('company_contact_log_contact');
    }
}