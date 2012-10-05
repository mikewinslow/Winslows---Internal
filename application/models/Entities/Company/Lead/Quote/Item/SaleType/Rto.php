<?php
namespace Entities\Company\Lead\Quote\Item\SaleType;
/** 
 * @Entity (repositoryClass="Repositories\Company\Lead\Quote\Item\SaleType\Rto") 
 * @Table(name="company_lead_quote_item_saletype_rtos") 
 */
class Rto extends \Entities\Company\Lead\Quote\Item\SaleType\SaleTypeAbstract
{
    /**
     * @OneToOne(targetEntity="\Entities\Company\RtoProvider\Program")
     * @var \Entities\Company\RtoProvider\Program $Program
     */
    protected $Program;
    
    /**
     * @param \Entities\Company\RtoProvider\Program $Program
     */
    public function setProgram(\Entities\Company\RtoProvider\Program $Program)
    {
	$this->Program = $Program;
    }
    
    /**
     * @return \Entities\Company\RtoProvider\Program
     */
    public function getProgram()
    {
	return $this->Program;
    }
    
    /**
     * @return string
     */
    public function getDescriminator()
    {
	return static::TYPE_Rto;
    }
    
    /**
     * @param \Entities\Company\Supplier\Product\ProductAbstract $Product
     * @return boolean
     */
    public function isProductAllowed(\Entities\Company\Supplier\Product\ProductAbstract $Product)
    {
	if($this->getProgram()->getProducts()->contains($Product))return true;
	
	return false;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
	$Program = $this->getProgram();
	
	return $this->getDescriminator()." - ".$Program->getRtoProvider()->getName()." - ".$Program->getName();
    }
    
    public function isApproved()
    {
	
    }
    
    public function getDue()
    {
	
    }
    
    public function getFees()
    {
	
    }
}