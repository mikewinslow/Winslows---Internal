<?php

namespace Entities\Company\Website\Account;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity (repositoryClass="Repositories\Company\Website\Account\Role") 
 * @Table(name="company_website_account_roles") 
 * @HasLifecycleCallbacks
 */
class Role
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
     * @Column(type="string", length=2000) 
     * @var string $description
     */
    private $description;
    
    /**
     * @OneToMany(targetEntity="\Entities\Company\Website\Account\Role\Privilege", mappedBy="Role", cascade={"persist"}, orphanRemoval=true)
     * @var array Privileges
     */
    private $Privileges;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\Website\Resource", inversedBy="Roles", cascade={"persist", "remove"})
     * @JoinTable(name="company_website_account_role_resource_joins",
     *      joinColumns={@JoinColumn(name="role_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="resource_id", referencedColumnName="id")}
     *      )
     * @var array $Resources
     */
    private $Resources;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\Website\Account", mappedBy="Roles", cascade={"ALL"})
     * @var array $Accounts
     */
    private $Accounts;
    
    public function __construct()
    {
	$this->Privileges   = new ArrayCollection();
	$this->Resources    = new ArrayCollection();
	$this->Accounts	    = new ArrayCollection();
    }
    
    /**
     * @param \Entities\Company\Website\Account\Role\Privilege $Privilege
     */
    public function addPrivilege(Role\Privilege $Privilege)
    {
	$Privilege->setRole($this);
        $this->Privileges[] = $Privilege;
    }
    
    /**
     * @param \Entities\Company\Website\Account $Account
     */
    public function addAccount(\Entities\Company\Website\Account $Account)
    {
        $this->Accounts[] = $Account;
    }
    
    /**
     * @param \Entities\Company\Website\Account $Account
     * @return bool
     */
    public function removeAccount(\Entities\Company\Website\Account $Account)
    {
	foreach ($this->Accounts as $key => $Account2) 
	{
	    if($Account->getId() == $Account2->getId())
	    {
		$this->Accounts[$key];
		unset($this->Accounts[$key]);
		return true;
	    }
	}
	return false;
    }

    /**
     * @return array
     */
    public function getPrivileges(){
	return $this->Privileges;
    }
    
    /**
     * @param \Entities\Company\Website\Resource $Resource
     */
    public function addResource(\Entities\Company\Website\Resource $Resource)
    {
        $this->Resources[] = $Resource;
    }
    
    /**
     * @param \Entities\Company\Website\Resource $Resource
     * @return boolean
     */
    public function removeResource(\Entities\Company\Website\Resource $Resource){
	foreach ($this->Resources as $key => $Resource2) {
	    if($Resource->getId() == $Resource2->getId()){
		$removed = $this->Resources[$key];
		unset($this->Resources[$key]);
		return true;
	    }
	}
	return false;
    }
    
    /**
     * @return array
     */
    public function getResources()
    {
	return $this->Resources;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function populate(array $array){
	foreach ($array as $key => $value) {
	    if(property_exists($this, $key)){
		$this->$key = $value;
	    }
	}
    }
}