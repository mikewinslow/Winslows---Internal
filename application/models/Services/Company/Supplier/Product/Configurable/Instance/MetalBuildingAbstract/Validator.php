<?php
namespace Services\Company\Supplier\Product\Configurable\Instance\MetalBuildingAbstract;

abstract class Validator extends \Services\Company\Supplier\Product\Configurable\Instance\Validator\ValidatorAbstract
{
    /**
     *  @var \Services\Company\Supplier\Product\Configurable\Instance\MetalBuildingAbstract\Validator\Data $_Data 
     */
    protected $_Data;
    
    /**
     *  @var \Services\Company\Supplier\Product\Configurable\Instance\MetalBuildingAbstract\Mapper $_Mapper 
     */
    protected $_Mapper;
    
    /**
     * @param string $location
     */
    public function validate($location = null)
    {
	parent::validate($location);
    }
    
    protected function _validateWindSnowLoad($location)
    {
	$valid	    = true;
	$WS_code    = $this->_Mapper->getWindSnowLoad();
	
	switch($WS_code)
	{
	    case "1":
		$array = $this->_Data->getRegularStates();
		
		if(!in_array($location, $array))$valid = false;
	    break;
	    case "2":
		$array = array_merge($array, $this->_Data->getRegularStates(), $this->_Data->getHighWindStates());
		
		if(!in_array($location, $array))$valid = false;
	    break;
	    case "3":
		$array = array_merge($array, $this->_Data->getRegularStates(), $this->_Data->getHighWindStates(), $this->_Data->getSnowWindStates());
		
		if(!in_array($location, $array))$valid = false;
	    break;
	    case "4":
		$array = array_merge($array, $this->_Data->getRegularStates(), $this->_Data->getHighWindStates(), $this->_Data->getSnowWindStates(), $this->_Data->getHighSnowWindStates());
		
		if(!in_array($location, $array))$valid = false;
	    break;
	    case "":
		throw new \Exception("Model is required");
	    break;
	    default:
		$valid = false;
	}
	
	if($valid === false)throw new \Exception(
		$this->_Mapper->getModelName()."  model is not available in your area.".
		" Please select a new model or location."
		);
    }
    
    protected function _validateWallsCovered()
    {
	foreach($this->_Mapper->getSidesArray() as $side_initial => $side)
	{
	    switch($this->_Mapper->getWallCoveredType($side))
	    {
		case "NO":
		case "CL":
		    if($this->_Mapper->getWallCoveredHeight($side) !== false)
			throw new \Exception(
			    "Walls &raquo; Covered ".  ucfirst($side)." &raquo; Type is set to '".
			    $this->_Mapper->getWallCoveredTypeName($side)."' but Height is set. Set type ".
			    " to Partial Coverage or unset Height."
			);
		break;
		case "PT":
		case "PB":
		    if($this->_Mapper->getWallCoveredHeight($side) === false)
			throw new \Exception(
			    "Walls &raquo; Covered ".  ucfirst($side)." &raquo; Type is set to '".
			    $this->_Mapper->getWallCoveredTypeName($side)."' but Height is not set. Set ".
			    " Height."
			);
	    }
	}
    }
    
    protected function _validateAnchors()
    {
	if($this->_Mapper->getAnchorsHasAnchors() === "Y")
	{
	    if($this->_Mapper->getAnchorsType() === false)
		throw new \Exception(
			    "Installation &raquo; Anchors &raquo; Has Anchors is set to ".
			    "'Yes' but Type is not set. Set Type."
			);
	    
	    if($this->_Mapper->getAnchorsQuantity() === false)
		throw new \Exception(
			    "Installation &raquo; Anchors &raquo; Has Anchors is set to ".
			    "'Yes' but Quantity is not set. Set Quantity."
			);
	}
	else
	{
	    if($this->_Mapper->getAnchorsType() !== false)
		throw new \Exception(
			    "Installation &raquo; Anchors &raquo; Has Anchors is set to ".
			    "'No' but Type is set. Unset Type or set Has Anchors to 'Yes'."
			);
	    
	    if($this->_Mapper->getAnchorsQuantity() !== false)
		throw new \Exception(
			    "Installation &raquo; Anchors &raquo; Has Anchors is set to ".
			    "'No' but Quantity is set. Unset Quantity or set Has Anchors to 'Yes'."
			);
	}
    }
    
    protected function _validateFrameGauge()
    {
	$frame_gauge	= $this->_Mapper->getFrameGauge();
	$WS_code	= $this->_Mapper->getWindSnowLoad();

	if(
	    $WS_code == "4" &&
	    $frame_gauge !== false && 
	    strlen($frame_gauge) > 0 && 
	    $frame_gauge != "12"
	)
	{
	    throw new \Exception(
		    "Frame &raquo; Frame Gauge option not valid. Maximum frame gauge already standard with model '".
		    $this->_Mapper->getModelName()."'. Change model or remove frame gauge."
		    );
	}
    }
    
    protected function _validateLegHeight()
    {
	$leg_height		= $this->_Mapper->getLegHeight();
	$roof_style_code	= $this->_Mapper->getRoofStyle();
	$allowed_leg_heights	= $this->_Data->getAllowedLegHeightsArray();
	
	if(
	    !key_exists($roof_style_code, $allowed_leg_heights) || 
	    !in_array($leg_height, $allowed_leg_heights[$roof_style_code])
	)
	    throw new \Exception(
		"Frame &raquo; Leg Height is not allowed for ".$this->_Mapper->getRoofStyleName().
		". Change leg height or roof style."
		);
    }
}