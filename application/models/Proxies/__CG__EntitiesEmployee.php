<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Employee extends \Entities\Employee implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setLocation(\Entities\Location $Location)
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

    public function addPersonAddress(\Entities\PersonAddress $PersonAddress)
    {
        $this->__load();
        return parent::addPersonAddress($PersonAddress);
    }

    public function getPersonAddresses()
    {
        $this->__load();
        return parent::getPersonAddresses();
    }

    public function addPersonDocument(\Entities\PersonDocument $PersonDocument)
    {
        $this->__load();
        return parent::addPersonDocument($PersonDocument);
    }

    public function getPersonDocuments()
    {
        $this->__load();
        return parent::getPersonDocuments();
    }

    public function getAllDocuments()
    {
        $this->__load();
        return parent::getAllDocuments();
    }

    public function addPersonPhoneNumber(\Entities\PersonPhoneNumber $PersonPhoneNumber)
    {
        $this->__load();
        return parent::addPersonPhoneNumber($PersonPhoneNumber);
    }

    public function getPersonPhoneNumbers()
    {
        $this->__load();
        return parent::getPersonPhoneNumbers();
    }

    public function addPersonEmailAddress(\Entities\PersonEmailAddress $PersonEmailAddress)
    {
        $this->__load();
        return parent::addPersonEmailAddress($PersonEmailAddress);
    }

    public function getPersonEmailAddresses()
    {
        $this->__load();
        return parent::getPersonEmailAddresses();
    }

    public function getWebAccount()
    {
        $this->__load();
        return parent::getWebAccount();
    }

    public function setWebAccount(\Entities\WebAccount $WebAccount)
    {
        $this->__load();
        return parent::setWebAccount($WebAccount);
    }

    public function removeWebAccount()
    {
        $this->__load();
        return parent::removeWebAccount();
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

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'first_name', 'middle_name', 'last_name', 'suffix', 'created', 'updated', 'PersonAddresses', 'PersonDocuments', 'PersonPhoneNumbers', 'PersonEmailAddresses', 'WebAccount', 'title', 'Location');
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