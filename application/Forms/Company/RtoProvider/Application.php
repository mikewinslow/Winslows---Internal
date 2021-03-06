<?php
namespace Forms\Company\RtoProvider;

class Application extends \Dataservice_Form
{
    private $_Application;
    
    public function __construct(\Entities\Company\RtoProvider\Application $Application, $options = null)
    {
	$this->_Application = $Application;
	
	parent::__construct($options);
    }
    
    public function init($options = array())
    {	
        $form = new Application\Subform($this->_Application, $options);
	
	$this->addSubForm($form, "company_rto_provider_application");
	
	$this->addElement('submit', 'submit', array(
            'ignore'   => true,
        ));
    }
}