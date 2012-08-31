<?php

namespace Entities\Company;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity (repositoryClass="Repositories\Company\Location") 
 * @Table(name="company_locations")
 * @HasLifecycleCallbacks
 */
class Location extends \Dataservice_Doctrine_Entity
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     * @var integer $id
     */
    private $id;
    
    /** 
     * @Column(type="string", length=255) 
     * @var string $name
     */
    private $name;
    
    /** 
     * @Column(type="string", length=255) 
     * @var string $type
     */
    private $type;

    /**
     * @OneToOne(targetEntity="\Entities\Company\Location\Address", mappedBy="Location", cascade={"persist"}, orphanRemoval=true)
     * @var Entities\Company\Location\Address $Address
     */
    protected $Address;
    
    /**
     * @OneToOne(targetEntity="\Entities\Company\Location\PhoneNumber", mappedBy="Location", cascade={"persist"}, orphanRemoval=true)
     * @var \Entities\Company\Location\PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber;
    
    /** 
     * @ManyToOne(targetEntity="\Entities\Company", inversedBy="locations")
     * @var \Entities\Company
     */     
    private $Company;
    
    /**
     * Bidirectional - One-To-Many (INVERSE SIDE)
     *
     * @OneToMany(targetEntity="\Entities\Company\Employee", mappedBy="Location", cascade={"persist"})
     * @var ArrayCollection $Employees
     */
    private $Employees;
    
    public function __construct()
    {
	$this->Employees = new ArrayCollection();
	
	parent::__construct();
    }
    
    /**
     * @return \Entities\Company
     */
    public function getCompany()
    {
	return $this->Company;
    }
    
    /**
     * @param \Entities\Company $Company
     */
    public function setCompany(\Entities\Company $Company)
    {
	$this->Company = $Company;
    }
    
    /**
     * @param \Entities\Company\Employee $Employee
     */
    public function addEmployee(Location\Employee $Employee)
    {
	$Employee->setLocation($this);
        $this->Employees[] = $Employee;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getEmployees()
    {
	return $this->Employees;
    }

    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @param \Entities\Company\Location\PhoneNumber $PhoneNumber
     */
    public function setPhoneNumber(Location\PhoneNumber $PhoneNumber)
    {
	$PhoneNumber->setLocation($this);
        $this->PhoneNumber = $PhoneNumber;
    }
    
    /**
     * @return \Entities\Company\Location\PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param \Entities\Company\Location\Address $Address
     */
    public function setAddress(Location\Address $Address)
    {
	$Address->setLocation($this);
        $this->Address = $Address;
    }
    
    /**
     * @return \Entities\Company\Location\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @throws \Exception
     */
    public function setType($type)
    {
	if(!key_exists($type, $this->getTypeOptions()))
	    throw new \Exception("Type option of ".htmlspecialchars ($type)." does not exist");
        $this->type = $type;
    }
    
    /**
     * @param string $type
     * @return string
     * @throws \Exception
     */
    public function getTypeDisplay($type = null)
    {
	if($type === null)
	{
	    $type = $this->type; 
	}
	
	if(!$type)return "";
	
	$array = $this->getTypeOptions();
	
	if(!key_exists($type, $array))
	    throw new \Exception("Could not get Type Display. Key '".$type."' does not exist");
	
	return $array[$type];
    }
    
    /**
     * @return array
     */
    public function getTypeOptions()
    {
	return array(
	    "sales" => "Sales",
	);
    }
}