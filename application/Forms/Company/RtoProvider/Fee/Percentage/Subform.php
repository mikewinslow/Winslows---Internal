<?php
namespace Forms\Company\RtoProvider\Fee\Percentage;

class Subform extends \Forms\Company\RtoProvider\Fee\Subform
{
    private $_Percentage;
    
    public function __construct(\Entities\Company\RtoProvider\Fee\Percentage $Percentage, $options = null)
    {
	$this->_Percentage = $Percentage;
	
	parent::__construct($Percentage, $options);
    }
    
    public function init()
    {
	parent::init();
	
	$this->addElement('text', 'percentage', array(
            'required'	    => true,
            'label'	    => 'Percentage:',
	    'value'	    => $this->_Percentage ? $this->_Percentage->getPercentage() : ""
        ));
	
	$this->setElementsBelongTo('company_rto_provider_fee_percentage');
    }
}
