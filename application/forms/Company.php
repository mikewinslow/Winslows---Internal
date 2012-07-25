<?php

/**
 * Name:
 * Company:
 *
 * Description for class (if any)...
 *
 * @author     Jessie Green <jessie.winslows@gmail.com>
 * @copyright  2012 Winslows inc.
 * @version    Release: @package_version@
 */
class Form_Company extends Zend_Form
{    
    private $_Company;
    
    public function __construct($options = null, Entities\Company $Company = null)
    {
	$this->_Company = $Company;
	parent::__construct($options, $this->_Company);
    }
    
    public function init($options = array())
    {	
        $form = new Form_Company_Subform($options, $this->_Company);
	
	$this->addSubForm($form, "company");
	
	$this->addElement('submit', 'submit', array(
            'ignore'   => true,
        ));
    }
}

?>