<?php
namespace Entities\Company\ContactLog\Contact;

use \Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity (repositoryClass="Repositories\Company\ContactLog\Contact\MediumAbstract") 
 * @Table(name="company_contactlog_contact_mediumabstracts") 
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({
 *			"company_lead_address" = "\Entities\Company\Lead\Address", 
 *			"company_employee_address" = "\Entities\Company\Employee\Address", 
 *			"company_supplier_address" = "\Entities\Company\Supplier\Address", 
 *			"company_location_address" = "\Entities\Company\Location\Address",
 *			"company_dealer_location_address" = "\Entities\Company\Dealer\Location\Address",
 *			"company_lead_emailaddress" = "\Entities\Company\Lead\EmailAddress",
 *			"company_employee_emailaddress" = "\Entities\Company\Employee\EmailAddress",
 *			"company_lead_faxnumber" = "\Entities\Company\Lead\FaxNumber",
 *			"company_employee_faxnumber" = "\Entities\Company\Employee\FaxNumber",
 *			"company_location_faxnumber" = "\Entities\Company\Location\FaxNumber",
 *			"company_dealer_location_faxnumber" = "\Entities\Company\Dealer\Location\FaxNumber",
 *			"company_lead_phonenumber" = "\Entities\Company\Lead\PhoneNumber", 
 *			"company_employee_phonenumber" = "\Entities\Company\Employee\PhoneNumber", 
 *			"company_location_phonenumber" = "\Entities\Company\Location\PhoneNumber",
 *			"company_dealer_location_phonenumber" = "\Entities\Company\Dealer\Location\PhoneNumber"
 *		    })
 * @HasLifecycleCallbacks
 * @Crud\Entity\Url(value="")
 * @Crud\Entity\Permissions(view={"Admin"}, edit={"Admin"}, create={"Admin"}, delete={"Admin"})
 */
abstract class MediumAbstract extends \Dataservice_Doctrine_Entity
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     * @var integer $id
     */
    protected $id;
    
    /**
     * @OneToMany(targetEntity="\Entities\Company\ContactLog\Contact", mappedBy="Medium", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var ArrayCollection $Contacts
     * @OrderBy({"datetime" = "ASC"})
     */
    protected $Contacts;
    
    public function __construct()
    {
	$this->Contacts	= new ArrayCollection();
	
	parent::__construct();
    }
    
    /**
     * @param \Entities\Company\ContactLog\Contact $Contact
     */
    public function addContact(\Entities\Company\ContactLog\Contact $Contact)
    {
	$Contact->setMedium($this);
	
	$this->Contacts[] = $Contact;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getContacts()
    {
	return $this->Contacts;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
	return $this->id;
    }
}