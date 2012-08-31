<?php
namespace Entities\Person;

/** 
 * @Entity (repositoryClass="Repositories\Person\PhoneNumber") 
 * @Table(name="person_phonenumbers") 
 */
class PhoneNumber extends \Entities\PhoneNumber\PhoneNumberAbstract
{
    /** 
     * @ManyToOne(targetEntity="\Entities\Person\PersonAbstract", inversedBy="PhoneNumbers")
     * @var \Entities\Person\PersonAbstract $Person
     */     
    private $Person;    
    
    /**
     * Add person to email address.
     * @param \Entities\Person\PersonAbstract $Person
     */
    public function setPerson(PersonAbstract $Person)
    {
        $this->Person = $Person;
    }
    
    /**
     * @return \Entities\Person\PersonAbstract
     */
    public function getPerson()
    {
	return $this->Person;
    }
}