<?php

/**
 * Name:
 * Location:
 *
 * Description for class (if any)...
 *
 * @author     Jessie Green <jessie.winslows@gmail.com>
 * @copyright  2012 Winslows inc.
 * @version    Release: @package_version@
 */
class Form_Contact_Subform extends Zend_Form_SubForm
{
    private $_Contact;
    private $_Lead;
    
    public function __construct(\Entities\Lead $Lead, $options = null, Entities\Contact $Contact = null) {
	$this->_Contact	    = $Contact;
	$this->_Lead	    = $Lead;
	parent::__construct($options);
    }
  
    public function init(){
	if($this->_Contact){
	    $result_options = $this->_Contact->getResultOptions();
	}
	else{
	    $Contact	    = new Entities\Contact();
	    $result_options = $Contact->getResultOptions();
	}
	
	$this->addElement(new Dataservice_Form_Element_ContactMediumSelect(
		"type",
		$this->_Lead, 
		$this->_Contact, 
		array(
		    'required'	    => true,
		    'label'	    => 'Type:',
		    'belongsTo'	    => 'contact',
		    'value'	    => $this->_Contact && $this->_Contact->getType() && $this->_Contact->getTypeDetail() ? 
					json_encode(
						array(
						    "type" => $this->_Contact->getType(), 
						    "type_detail" => $this->_Contact->getTypeDetail())) : 
					""
		)
	    )
	);
	
	$this->addElement(new Dataservice_Form_Element_EmployeeSelect("person", array(
            'required'	    => true,
            'label'	    => 'By:',
	    'belongsTo'	    => 'contact',
	    'value'	    => $this->_Contact && $this->_Contact->getPerson() ? 
				$this->_Contact->getPerson()->getId() : 
				\Services\Auth::factory()->getIdentityPerson()->getId()
        )));
	
	$this->addElement('textarea', 'note', array(
            'required'	    => false,
	    'label'	    => "Note:",
	    'rows'	    => 10,
	    'belongsTo'	    => "contact",
	    'value'	    => $this->_Contact ? $this->_Contact->getNote() : ""
        ));
	
	$this->addElement('select', 'result', array(
            'required'	    => true,
            'label'	    => 'Result:',
	    'multioptions'  => $result_options,
	    'belongsTo'	    => "contact",
	    'value'	    => $this->_Contact ? $this->_Contact->getType() : ""
        ));
    }
}

?>