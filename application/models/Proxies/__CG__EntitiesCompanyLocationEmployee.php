<?php

namespace Proxies\__CG__\Entities\Company\Location;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Employee extends \Entities\Company\Location\Employee implements \Doctrine\ORM\Proxy\Proxy
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

    public function AddQuote(\Entities\Company\Lead\Quote $Quote)
    {
        $this->__load();
        return parent::AddQuote($Quote);
    }

    public function getQuotes()
    {
        $this->__load();
        return parent::getQuotes();
    }

    public function getOrders()
    {
        $this->__load();
        return parent::getOrders();
    }

    public function AddOrder(\Entities\Company\Customer\Order $Order)
    {
        $this->__load();
        return parent::AddOrder($Order);
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

    public function populate(array $array)
    {
        $this->__load();
        return parent::populate($array);
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

    public function getAccount()
    {
        $this->__load();
        return parent::getAccount();
    }

    public function setAccount(\Entities\Company\Website\Account $Account)
    {
        $this->__load();
        return parent::setAccount($Account);
    }

    public function removeAccount()
    {
        $this->__load();
        return parent::removeAccount();
    }

    public function updated()
    {
        $this->__load();
        return parent::updated();
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

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'first_name', 'middle_name', 'last_name', 'suffix', 'created', 'updated', 'Addresses', 'Documents', 'PhoneNumbers', 'EmailAddresses', 'Account', 'title', 'Location', 'Quotes', 'Orders', 'Leads');
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