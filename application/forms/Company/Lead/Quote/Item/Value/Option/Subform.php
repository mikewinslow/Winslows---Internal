<?php
namespace Forms\Company\Lead\Quote\Item\Value\Option;
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
class Subform extends \Zend_Form_SubForm
{    
    private $_Option;
    
    public function __construct(\Entities\Company\Supplier\Product\Configurable\Option $Option, $options = null)
    {
	$this->_Option = $Option;
	parent::__construct($options);
    }
    
    public function init() 
    {
	$ids_array = array();
	
	/* @var $Parameter \Entities\Company\Supplier\Product\Configurable\Option\Parameter */
	foreach ($this->_Option->getParameters() as $Parameter) 
	{
	    $options = array("" => "Please Select...");
	    
	    /* @var $Value \Entities\Company\Supplier\Product\Configurable\Option\Parameter\Value */
	    foreach ($Parameter->getValues() as $Value)
	    {
		$options[$Value->getId()] = $Value->getName();
	    }
	    
	    $this->addElement(
		    "select", 
		    (string) $Parameter->getId(), 
		    array(
			"required"	=> $Parameter->isRequired(),
			"label"		=> $Parameter->getName(),
			"belongsTo"	=> $this->_Option->getId(),
			"multioptions"	=> $options
		    )
		);
	    $ids_array[] = $Parameter->getId();
	}
	
	$this->addDisplayGroup(
		$ids_array, 
		(string) $this->_Option->getId(), 
		array(
		    'legend'	=> $this->_Option->getName().
				    ($this->_Option->hasRequiredOption() ? 
					" *required" : ""),
		)
	);
	
	$displaygroup = $this->getDisplayGroup((string) $this->_Option->getId());
		$displaygroup->setDecorators(array(
                    'FormElements',
                    'Fieldset',
                    array('HtmlTag',array('tag'=>'div','style'=>'width:100%;'))
		));
	
	parent::init();
    }
}