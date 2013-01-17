<?php
namespace Forms\Company\Lead\Quote\Sale\Transaction\Payment\Cash;
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
    public function init() 
    {
	$this->addElement("text", "amount", 
			    array(
				"label"		=> "Amount",
				"required"	=> true,
				"belongsTo"	=> "company_lead_quote_sale_payment_transaction_payment_cash",
				"validators"	=> array(
							array('float', true, array('locale' => 'en_US')),
							array('greaterThan', true, array('min' => 0))
						    )
			    ));
	
	parent::init();
    }
}