<?php
class Dataservice_Price
{
    /**
     * @var int $_price
     */
    private $_price = 0;
    
    /**
     * @var array() $_details 
     */
    private $_details = array();
    
    /**
     * @var array() $_history 
     */
    private $_history = array();
    
    /**
     * @param int $price
     */
    public function setPrice($price)
    {
	$price		    = round((int) $price, 2);
	$this->_price	    = $price;
	$this->_history[]   = "=".$price;
    }
    
    /**
     * @param int $int
     */
    public function add($int)
    {
	$int		    = round($int, 2);
	$this->_price	    += $int;
	$this->_history[]    = "+".$int;
    }
    
    /**
     * @param int $int
     */
    public function subtract($int)
    {
	$int		    = round($int, 2);
	$this->_price	    -= $int;
	$this->_history[]    = "-".$int;
    }
    
    /**
     * @return int
     */
    public function getPrice()
    {
	return $this->_price;
    }
    
    /**
     * @return string number formatted string of price with $
     */
    public function getDisplayPrice($dollar_sign = true)
    {
	$string = "";
	
	if($dollar_sign !== false) $string .= "$";
	
	$string .= number_format($this->_price, 2);
	
	return $string;
    }
    
    /**
     * @param string $detail
     */
    public function addDetail($detail)
    {
	$this->_details[] = (string) $detail;
    }
    
    /**
     * @return array
     */
    public function getDetails()
    {
	return $this->_details;
    }
    
    /**
     * @return string
     */
    public function getDisplayDetails($list_class = "", $item_class = "")
    {
	$string = '<ul class="'.$list_class.'">';
	
	$string .= ltrim(implode('</li><li class="'.$item_class.'">', $this->_details),'</li>');
	
	$string .= '</li></ul>';
	
	return $string;
    }
    
    /**
     * @return array
     */
    public function getHistory()
    {
	return $this->_history;
    }
    
    /**
     * @return string
     */
    public function getDisplayHistory()
    {
	return implode("\r\n", $this->_history);
    }
}