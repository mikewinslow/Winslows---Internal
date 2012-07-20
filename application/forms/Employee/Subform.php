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
class Form_Employee_Subform extends Form_Person_Subform
{    
    private $_Employee;
    
    public function __construct($options = null, Entities\Employee $Employee = null) {
	$this->_Employee = $Employee;
	parent::__construct($options, $this->_Employee);
    }
    
    public function init($options = array())
    {	
	$this->addElement(new Dataservice_Form_Element_LocationSelect("location", array(
            'required'	    => true,
            'label'	    => 'Location:',
	    'belongsTo'	    => 'employee',
	    'value'	    => $this->_Employee && $this->_Employee->getLocation() ? $this->_Employee->getLocation()->getId() : ""
        )));
	
        $this->addElement('text', 'title', array(
            'required'	    => false,
            'label'	    => 'Title:',
	    'belongsTo'	    => 'employee',
	    'value'	    => $this->_Employee ? $this->_Employee->getTitle() : ""
        ));
	parent::init($options);
    }
}

?>