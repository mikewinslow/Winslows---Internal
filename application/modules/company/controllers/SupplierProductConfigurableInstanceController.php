<?php

class Company_SupplierProductConfigurableInstanceController extends Dataservice_Controller_Crud_Action
{     
    public function init() 
    {
	$this->_EntityClass = "Entities\Company\Supplier\Product\Configurable\Instance";
	
	parent::init();
    }
    
    public function manualsaveajaxAction()
    {
	$this->_helper->layout->setLayout("blank");
	$this->_helper->viewRenderer->setNoRender(true);
	
	
	$return			    = array();
	$return["success"]	    = true;
	$return["error_message"]    = "";
	$error_message		    = array();
	
	if($this->getRequest()->isPost())
	{	    
	    $this->_requireEntity();
	    
	    $data = $this->getRequest()->getPost();
	    
	    $this->_Entity->getOptions()->clear();
	    
	    foreach($data as $option_array)
	    {
		$parameter_id	    = key($option_array);
		$Parameter	    = $this->_em->find(
					    "\Entities\Company\Supplier\Product\Configurable\Option\Parameter", 
					    $parameter_id
					);
		$ConfigurableOption = $Parameter->getOption();
		$Option		    = new \Entities\Company\Supplier\Product\Configurable\Instance\Option($ConfigurableOption);
		
		/* @var $ConfigurableOption \Entities\Company\Supplier\Product\Configurable\Option */
		$Category		= $ConfigurableOption->getCategory();
		
		
		#--Check that values really exist
		foreach($option_array as $parameter_id => $value_id)
		{
		    if($value_id)
		    {
			$Value = $this->_em->find(
				    "\Entities\Company\Supplier\Product\Configurable\Option\Parameter\Value", 
				    $value_id
				);

			if($Value)$Option->addValue($Value);
			else
			{
			    $Parameter	= $this->_em->find(
						"\Entities\Company\Supplier\Product\Configurable\Option\Parameter", 
						$parameter_id
					     );
			    $error_message[] = $Category->getName()." - ".$ConfigurableOption->getName().
					    " - ".$Parameter->getName()." $value_id is not valid.";	
			}	
		    }
		}
		$this->_Entity->addOption($Option);
	    }
	    
	    try 
	    {
		$this->_Entity->validate();
	    } 
	    catch (Exception $exc)
	    {
		$error_message[] = $exc->getMessage();
	    }
		
	    if(count($error_message)>0){
		$return["success"] = false;
		$return["error_message"] = implode("<br />",$error_message);
	    }
	    else{
		try 
		{		    
		    $this->_Entity->setNote($this->_Entity->getNote()." **".date("Y-m-d H:i:s")." Modified");
		    $this->_em->persist($this->_Entity);
		    $this->_em->flush();
		} 
		catch (Exception $exc) 
		{
		    $return["success"] = false;
		    $return["error_message"] .= "<br />".$exc->getMessage();
		}
	    }
	}
	else{
	    $return["success"]		= false;
	    $return["error_message"]	= "Invalid Request or Missing Quote or Product Id";
	}
	echo json_encode($return);
    }
    
    public function manageOptionsAction()
    {	
	$this->view->headScript()->appendFile("/javascript/company/supplier/product/configurable/instance/manual.js");
	
	$this->_requireEntity();
	
	$data	    = array();
	$left	    = array();
	$required   = array();
	
	#--Build Left Options Array and required array
	/* @var $Option \Entities\Company\Supplier\Product\Configurable\Option */
	foreach ($this->_Entity->getProduct()->getOptionsOrderedByCategory() as $Option)
	{
	    $Category = $Option->getCategory();
	    
	    $left[$Category->getIndex()]["category"] = array(
							    "name"  => $Category->getName(), 
							    "id"    => $Category->getId(), 
							    "index" => $Category->getIndex()
							    );
	    $left[$Category->getIndex()]["options"][$Option->getId()] = array(
									"name"	    => $Option->getName(), 
									"id"	    => $Option->getId(), 
									"index"	    => $Option->getIndex(),
									"maxcount"  => $Option->getMaxCount()
									);
	    if($Option->isRequired())$required[] = $Option->getId();
	}
	
	$data["left"]	    = $left;
	$data["required"]   = $required;
	
	$existing = array();
	
	#--Build Existing Array
	/* @var $Option \Entities\Company\Supplier\Product\Configurable\Instance\Option */
	foreach ($this->_Entity->getOptions() as $Option)
	{
	    $ConfigurableOption			= $Option->getOption();
	    $Category				= $ConfigurableOption->getCategory(); 
	    $temp_array				= array();
	    $temp_array["category"]		= array(
							"name"  => $Category->getName(), 
							"id"    => $Category->getId(), 
							"index" => $Category->getIndex()
						    );
	    $temp_array["instance_option"]	= array(
							"id" => $Option->getId()
						    );
	    $temp_array["configurable_option"]  = array(
							"id" => $ConfigurableOption->getId()
						    );
	    $existing[]				= $temp_array;
	}
	
	$data["existing"] = $existing;
	
	$this->view->data	= $data;
	$this->view->return_url	= $this->_History->getPreviousUrl();
    }
    
    public function chooseeditorajaxAction()
    {
	$this->_helper->layout->setLayout("blank");
	
	$this->_requireEntity();
	
	$this->view->form	= new Forms\Company\Lead\Quote\AddProduct2(
					array("id" => "quote_addproduct2", "name" => "quote_addproduct2")
				    );
    }
    
    public function getoptionformAction()
    {
	$Option		    = $this->_getOption();
	$ConfigurableOption = $this->_getConfigurableOption();
	
	$this->_CheckRequiredConfigurableOptionExists($ConfigurableOption);
	
	if(!$Option)$Option = new Entities\Company\Supplier\Product\Configurable\Instance\Option($ConfigurableOption);
	
	$form	= new Forms\Company\Supplier\Product\Configurable\Instance\Manual\Option($ConfigurableOption, $Option);
	
	$form->removeDecorator('form');
	
	echo $form; 
	
	exit;
    }  
    
    /**
     * @return Entities\Company\Supplier\Product\Configurable\Option
     */
    private function _getConfigurableOption()
    {
	$id = $this->getRequest()->getParam("configurable_option_id", 0);
	
	return $this->_em->find("Entities\Company\Supplier\Product\Configurable\Option", $id);
    }
    
    private function _CheckRequiredConfigurableOptionExists(Entities\Company\Supplier\Product\Configurable\Option $Option)
    {
	if(!$Option->getId())
	{
	    $this->_FlashMessenger->addErrorMessage("Could not get Option");
	    $this->_History->goBack();
	}
    }
    
    /**
     * @return Entities\Company\Supplier\Product\Configurable\Option
     */
    private function _getOption()
    {
	$id = $this->getRequest()->getParam("option_id", 0);
	
	return $this->_em->find("Entities\Company\Supplier\Product\Configurable\Instance\Option", $id);
    }
}

