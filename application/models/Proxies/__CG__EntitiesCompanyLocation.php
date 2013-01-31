<?php

namespace Proxies\__CG__\Entities\Company;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Location extends \Entities\Company\Location implements \Doctrine\ORM\Proxy\Proxy
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

    public function addEmployee(\Entities\Company\Employee $Employee)
    {
        $this->__load();
        return parent::addEmployee($Employee);
    }

    public function getEmployees()
    {
        $this->__load();
        return parent::getEmployees();
    }

    public function addInventoryItem(\Entities\Company\Inventory\Item $Item)
    {
        $this->__load();
        return parent::addInventoryItem($Item);
    }

    public function getInventoryItems()
    {
        $this->__load();
        return parent::getInventoryItems();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function setPhoneNumber(\Entities\Company\Location\PhoneNumber $PhoneNumber)
    {
        $this->__load();
        return parent::setPhoneNumber($PhoneNumber);
    }

    public function getPhoneNumber()
    {
        $this->__load();
        return parent::getPhoneNumber();
    }

    public function setAddress(\Entities\Company\Location\Address $Address)
    {
        $this->__load();
        return parent::setAddress($Address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getTypeDisplay($type = NULL)
    {
        $this->__load();
        return parent::getTypeDisplay($type);
    }

    public function toString()
    {
        $this->__load();
        return parent::toString();
    }

    public function getTypeOptions()
    {
        $this->__load();
        return parent::getTypeOptions();
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

    public function getCrudPermissions()
    {
        $this->__load();
        return parent::getCrudPermissions();
    }

    public function getCrudPermission($permission_name)
    {
        $this->__load();
        return parent::getCrudPermission($permission_name);
    }

    public function getRelationshipCrudPermissions($collection_property_name)
    {
        $this->__load();
        return parent::getRelationshipCrudPermissions($collection_property_name);
    }

    public function getRelationshipTypeName($related_property_name)
    {
        $this->__load();
        return parent::getRelationshipTypeName($related_property_name);
    }

    public function getRelationshipClass($related_property_name)
    {
        $this->__load();
        return parent::getRelationshipClass($related_property_name);
    }

    public function getRelationshipClassCrudPermissions($related_property_name)
    {
        $this->__load();
        return parent::getRelationshipClassCrudPermissions($related_property_name);
    }

    public function getCrudUrl()
    {
        $this->__load();
        return parent::getCrudUrl();
    }

    public function getRelationshipCrudUrl($related_property_name)
    {
        $this->__load();
        return parent::getRelationshipCrudUrl($related_property_name);
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function getClassName()
    {
        $this->__load();
        return parent::getClassName();
    }

    public function getClass()
    {
        $this->__load();
        return parent::getClass();
    }

    public function getEditForm()
    {
        $this->__load();
        return parent::getEditForm();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'type', 'created', 'updated', 'Address', 'PhoneNumber', 'InventoryItems', 'Company', 'Employees');
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