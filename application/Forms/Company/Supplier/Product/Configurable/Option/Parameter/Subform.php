<?php
namespace Forms\Company\Supplier\Product\Configurable\Option\Parameter;

use Entities\Company\Supplier\Product\Configurable\Option\Parameter as Parameter;

class Subform extends \Zend_Form_SubForm
{
    private $_Parameter;
    
    public function __construct(Parameter $Parameter, $options = null)
    {
	$this->_Parameter = $Parameter;
	
	parent::__construct($options);
    }
    
    public function init()
    {
	$this->addElement(new \Dataservice_Form_Element_OptionSelect("option_id", array(
            'required'	    => false,
            'label'	    => 'Option:',
	    'value'	    => $this->_Parameter && 
				    $this->_Parameter->getOption()
				? $this->_Parameter->getOption()->getId() 
				: ""
        )));
	
	$this->addElement('text', 'name', array(
            'required'	    => true,
            'label'	    => 'Name:',
	    'value'	    => $this->_Parameter ? $this->_Parameter->getName() : ""
        ));
	
	$this->addElement('text', 'index_string', array(
            'required'	    => true,
            'label'	    => 'Name Index:',
	    'value'	    => $this->_Parameter ? $this->_Parameter->getIndex() : ""
        ));
	
	$this->addElement('text', 'length', array(
            'required'	    => true,
            'label'	    => 'Length:',
	    'size'	    => 2,
	    'maxlength'	    => 2,
	    'value'	    => $this->_Parameter ? $this->_Parameter->getLength() : ""
        ));
	
	$this->addElement('textarea', 'description', array(
            'required'	    => false,
            'label'	    => 'Description:',
	    'cols'	    => 50,
	    'rows'	    => 8,
	    'value'	    => $this->_Parameter ? $this->_Parameter->getDescription() : ""
        ));
	
	$this->addElement('text', 'sort_order', array(
            'required'	    => false,
            'label'	    => 'Order:',
	    'value'	    => $this->_Value ? $this->_Value->getOrder() : ""
        ));
	
	$this->addElement('select', 'required', array(
            'required'	    => true,
            'label'	    => 'Required:',
	    'multioptions'  => array(0 => "false", 1 => "true"),
	    'value'	    => $this->_Parameter ? $this->_Parameter->isRequired() : ""
        ));
	
	$this->setElementsBelongTo("company_supplier_product_configurable_option_parameter");
    }
}