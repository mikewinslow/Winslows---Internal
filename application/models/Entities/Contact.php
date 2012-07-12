<?php

namespace Entities;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity (repositoryClass="Repositories\Privilege") 
 * @Table(name="contacts") 
 * @HasLifecycleCallbacks
 */
class Contact
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @Column(type="string", length=65536) */
    private $note;
    
    /** @Column(type="string", length=255) */
    private $type;
    
    /** @Column(type="string", length=255) */
    private $type_detail;
    
    /** @Column(type="string", length=255) */
    private $result;
    
    /**
     * @ManyToOne(targetEntity="Lead", inversedBy="contacts")
     * @JoinColumn(name="lead_id", referencedColumnName="id")
     * @var $lead Lead
     */
    private $lead;
    
    /** 
     * @ManyToOne(targetEntity="Person", cascade="persist")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     */     
    private $person;

    /** @Column(type="datetime") */
    private $created;

    /** @Column(type="datetime") */
    private $updated;

    public function __construct()
    {
	$this->created	= $this->updated = new \DateTime("now");
    }
           
    /**
     * @PreUpdate
     */
    public function updated()
    {
        $this->updated = new \DateTime("now");
    }

    public function setLead(Lead $Lead){
	$this->lead = $Lead;
    }
    
    public function getLead(){
	return $this->lead;
    }
    
    public function setPerson(Person $Person){
	$this->person = $Person;
    }
    
    public function getPerson(){
	return $this->person;
    }
    
    /**
     * Retrieve Option id
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setNote($note){
	$this->note = $note;
    }
    
    public function getNote(){
	return $this->note;
    }
    
    public function setType($type){
	if(!key_exists($type, $this->getTypeOptions()))
	    throw new Exception("Type must be in Type Options");
	$this->type = $type;
    }
    
    public function getType(){
	return $this->type;
    }
    
    public function setTypeDetail($type_detail){
	$this->type_detail = $type_detail;
    }
    
    public function getTypeDetail(){
	return $this->type_detail;
    }
    
    public function setResult($result){
	if(!key_exists($result, $this->getResultOptions()))
	    throw new Exception("Result must be in Result Options");
	$this->result = $result;
    }
    
    public function getResult(){
	return $this->result;
    }
    
    public function getResultDisplay(){
	$array = $this->getResultOptions();
	if(!key_exists($this->result, $array))
	    throw new Exception("Could not get Result Display. Key '".$this->result."' does not exist");
	return $array[$this->result];
    }
    
    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
    
    public function getTypeOptions(){
	return array(
	    "phone"	=> "Phone",
	    "email"	=> "Email",
	    "location"	=> "Walk In"
	);
    }
    
    public function getResultOptions(){
	return array(
	    "quote"	    => "Quote",
	    "information"   => "Information",
	    "sale"	    => "Sale"
	);
    }
}