<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompanySelect
 *
 * @author jgreen
 */
class Dataservice_Form_Element_RtoProvider_Products_MultiCheckbox extends Zend_Form_Element_MultiCheckbox
{
    public function init()
    {
        foreach(Services\Company\Supplier\Product::factory()->getAllProducts() as $Product)
	{
            $this->addMultiOption($Product->getId(), $Product->getName());
        }
    }
}