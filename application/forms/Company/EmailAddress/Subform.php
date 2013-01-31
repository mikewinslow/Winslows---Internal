<?php
namespace Forms\Company\EmailAddress;

class Subform extends \Zend_Form_SubForm
{
    private $_EmailAddress;
    
    public function __construct($options = null, \Entities\Company\EmailAddress\EmailAddressAbstract $Emailaddress = null)
    {
	$this->_EmailAddress = $Emailaddress;
	
	parent::__construct($options);
    }
  
    public function init()
    {
	if($this->_EmailAddress)
	{
	    $type_options   = $this->_EmailAddress->getTypeOptions();
	}
	else
	{
	    $Emailaddress   = new Entities\Emailaddress();
	    $type_options   = $Emailaddress->getTypeOptions();
	}
	
	$this->addElement('select', 'type', array(
            'required'	    => true,
            'label'	    => 'Type:',
	    'multioptions'  => $type_options,
	    'belongsTo'	    => $this->_belongs_to,
	    'value'	    => $this->_EmailAddress ? $this->_EmailAddress->getType() : ""
        ));
	
	$this->addElement('text', 'address', array(
            'required'	    => true,
            'label'	    => 'Address:',
	    'validators'    => array('EmailAddress'),
	    'belongsTo'	    => $this->_belongs_to,
	    'value'	    => $this->_EmailAddress ? $this->_EmailAddress->getAddress() : ""
        ));
    }
}