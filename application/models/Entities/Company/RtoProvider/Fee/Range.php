<?php
namespace Entities\Company\RtoProvider\Fee;

/** 
 * @Entity (repositoryClass="Repositories\Company\RtoProvider\Fee\Range") 
 * @Table(name="company_rtoprovider_fee_ranges") 
 * @Crud\Entity\Url(value="rto-provider-fee-range")
 * @Crud\Entity\Permissions(view={"Admin"}, edit={"Admin"}, create={"Admin"}, delete={"Admin"})
 */
class Range extends FeeAbstract
{    
    /**
     * Bidirectional - One-To-Many (INVERSE SIDE)
     *
     * @OneToMany(targetEntity="\Entities\Company\RtoProvider\Fee\Range\Value", mappedBy="Range", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var \Doctrine\Common\Collections\ArrayCollection $Values
     */
    protected $Values;
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getValues()
    {
	return $this->Values;
    }
    
    /**
     * @param \Entities\Company\RtoProvider\Fee\Range\Value $Value
     */
    public function addValue(\Entities\Company\RtoProvider\Fee\Range\Value $Value)
    {
	$Value->setRange($this);
	
	$this->getValues()->add($Value);
    }
    
    /**
     * @param \Entities\Company\RtoProvider\Fee\Range\Value $Value
     */
    public function removeValue(\Entities\Company\RtoProvider\Fee\Range\Value $Value)
    {
	$this->getValues()->removeElement($Value);
    }
    
    /**
     * @param \Dataservice_Price $Price
     * @return \Dataservice_Price
     */
    public function getFeePrice(\Dataservice_Price $Price)
    {
	$FeePrice = new \Dataservice_Price();
	
	/* @var $Value \Entities\Company\RtoProvider\Program\Fee\Range\Value */
	foreach ($this->getValues() as $Value)
	{
	    if($Value->isInRange($Price->getPrice()))
	    {
		$FeePrice->add($Value->getValue());
		$FeePrice->addDetail("Range ".$Value->getLow()."-".$Value->getHigh());
		
		break;
	    }
	}
	return $FeePrice;
    }
    
    /**
     * @return string
     */
    public function getDescriminator()
    {
	return static::TYPE_Range;
    }
}