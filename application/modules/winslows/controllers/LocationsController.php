<?php
class Winslows_LocationsController extends Dataservice_Controller_Action
{
    public function searchAction()
    {
	$distance = null;
	$address  = null;
	$Form	  =  new Forms\Company\Location\Search(array("method" => "post"));
	
	if($this->isPostAndValid($Form))
	{
	    $address	= $this->_request->getParam("address");
	    $distance	= $this->_request->getParam("range");
	}
	
	$this->view->Locations = Services\Winslows\Location::factory()
				    ->getAllCompanyLocationsWithinDistanceOfAddress($distance, $address);
	
	$this->view->Form = $Form;
    }
}


