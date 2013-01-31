<?php

namespace Proxies\__CG__\Entities\Company;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Employee extends \Entities\Company\Employee implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getLeads()
    {
        $this->__load();
        return parent::getLeads();
    }

    public function addLead(\Entities\Company\Lead $Lead)
    {
        $this->__load();
        return parent::addLead($Lead);
    }

    public function getAllAllowedLeads()
    {
        $this->__load();
        return parent::getAllAllowedLeads();
    }

    public function canSeeAllLeads()
    {
        $this->__load();
        return parent::canSeeAllLeads();
    }

    public function canSeeLead(\Entities\Company\Lead $Lead)
    {
        $this->__load();
        return parent::canSeeLead($Lead);
    }

    public function getAllAllowedLeadsAutocomplete($term, $count = 20)
    {
        $this->__load();
        return parent::getAllAllowedLeadsAutocomplete($term, $count);
    }

    public function getTimeClockEntries()
    {
        $this->__load();
        return parent::getTimeClockEntries();
    }

    public function addTimeClockEntry(\Entities\Company\TimeClock\Entry $Entry)
    {
        $this->__load();
        return parent::addTimeClockEntry($Entry);
    }

    public function clockInOut()
    {
        $this->__load();
        return parent::clockInOut();
    }

    public function getTodaysTimeClockEntries()
    {
        $this->__load();
        return parent::getTodaysTimeClockEntries();
    }

    public function isClockedIn()
    {
        $this->__load();
        return parent::isClockedIn();
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setLocation(\Entities\Company\Location $Location)
    {
        $this->__load();
        return parent::setLocation($Location);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setCompany(\Entities\Company $Company)
    {
        $this->__load();
        return parent::setCompany($Company);
    }

    public function getAccount()
    {
        $this->__load();
        return parent::getAccount();
    }

    public function setAccount(\Entities\Company\Employee\Account $Account)
    {
        $this->__load();
        return parent::setAccount($Account);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function addAddress(\Entities\Person\Address $Address)
    {
        $this->__load();
        return parent::addAddress($Address);
    }

    public function getAddresses()
    {
        $this->__load();
        return parent::getAddresses();
    }

    public function addDocument(\Entities\Person\Document $Document)
    {
        $this->__load();
        return parent::addDocument($Document);
    }

    public function getDocuments()
    {
        $this->__load();
        return parent::getDocuments();
    }

    public function addPhoneNumber(\Entities\Person\PhoneNumber $PhoneNumber)
    {
        $this->__load();
        return parent::addPhoneNumber($PhoneNumber);
    }

    public function getPhoneNumbers()
    {
        $this->__load();
        return parent::getPhoneNumbers();
    }

    public function addEmailAddress(\Entities\Person\EmailAddress $EmailAddress)
    {
        $this->__load();
        return parent::addEmailAddress($EmailAddress);
    }

    public function getEmailAddresses()
    {
        $this->__load();
        return parent::getEmailAddresses();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setFirstName($first_name)
    {
        $this->__load();
        return parent::setFirstName($first_name);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setLastName($last_name)
    {
        $this->__load();
        return parent::setLastName($last_name);
    }

    public function getMiddleName()
    {
        $this->__load();
        return parent::getMiddleName();
    }

    public function setMiddleName($middle_name)
    {
        $this->__load();
        return parent::setMiddleName($middle_name);
    }

    public function getSuffix()
    {
        $this->__load();
        return parent::getSuffix();
    }

    public function setSuffix($suffix)
    {
        $this->__load();
        return parent::setSuffix($suffix);
    }

    public function getFullName()
    {
        $this->__load();
        return parent::getFullName();
    }

    public function toString()
    {
        $this->__load();
        return parent::toString();
    }

    public function updated()
    {
        $this->__load();
        return parent::updated();
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setCreated(\DateTime $created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function populate(array $array)
    {
        $this->__load();
        return parent::populate($array);
    }

    public function filterCollectionByfield(\Doctrine\Common\Collections\ArrayCollection $ArrayCollection, $field, $value)
    {
        $this->__load();
        return parent::filterCollectionByfield($ArrayCollection, $field, $value);
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'first_name', 'middle_name', 'last_name', 'suffix', 'created', 'updated', 'Addresses', 'Documents', 'PhoneNumbers', 'EmailAddresses', 'title', 'Location', 'Company', 'Leads', 'TimeClockEntries', 'Account');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}