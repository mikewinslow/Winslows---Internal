<?php

namespace Proxies\__CG__\Entities\Company;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Inventory extends \Entities\Company\Inventory implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
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

    public function addItem(\Entities\Company\Inventory\Item $Item)
    {
        $this->__load();
        return parent::addItem($Item);
    }

    public function getItems()
    {
        $this->__load();
        return parent::getItems();
    }

    public function getItemsByProduct()
    {
        $this->__load();
        return parent::getItemsByProduct();
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
        return array('__isInitialized__', 'id', 'created', 'updated', 'Company', 'Items');
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