<?php
namespace Forms\Role;

class Privilege extends \Zend_Form
{
    private $_Privilege;
    
    public function __construct($options = null, \Entities\Privilege $Privilege = null)
    {
	$this->_Privilege = $Privilege;
	
	parent::__construct($options);
    }
    
    public function init()
    {
	if($this->_Privilege !== null && $this->_Privilege->getId() > 0)
	{
	    $id = $this->addElement('hidden', 'id', array(
		'required'  => true,
		'belongsTo' => 'privilege',
		'value'	    => $this->_Privilege ? $this->_Privilege->getId() : ""
	    ));
	}
	
	$this->addElement('text', 'name', array(
            'required'	    => true,
            'label'	    => 'Name:',
	    'belongsTo'	    => 'privilege',
	    'value'	    => $this->_Privilege ? $this->_Privilege->getName() : ""
        ));
	
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
        ));

    }
}