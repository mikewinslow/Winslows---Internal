<?php

namespace Proxies\__CG__\Entities\Company;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class RtoProvider extends \Entities\Company\RtoProvider implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setCompany(\Entities\Company $Company)
    {
        $this->__load();
        return parent::setCompany($Company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function getPrograms()
    {
        $this->__load();
        return parent::getPrograms();
    }

    public function addProgram(\Entities\Company\RtoProvider\Program $Program)
    {
        $this->__load();
        return parent::addProgram($Program);
    }

    public function removeProgram(\Entities\Company\RtoProvider\Program $Program)
    {
        $this->__load();
        return parent::removeProgram($Program);
    }

    public function getApplications()
    {
        $this->__load();
        return parent::getApplications();
    }

    public function addApplication(\Entities\Company\RtoProvider\Application $Application)
    {
        $this->__load();
        return parent::addApplication($Application);
    }

    public function removeApplication(\Entities\Company\RtoProvider\Application $Application)
    {
        $this->__load();
        return parent::removeApplication($Application);
    }

    public function hasLeadApplication(\Entities\Company\Lead $Lead)
    {
        $this->__load();
        return parent::hasLeadApplication($Lead);
    }

    public function isApproved(\Entities\Company\Lead $Lead)
    {
        $this->__load();
        return parent::isApproved($Lead);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
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

    public function getDba()
    {
        $this->__load();
        return parent::getDba();
    }

    public function setDba($dba)
    {
        $this->__load();
        return parent::setDba($dba);
    }

    public function getNameIndex()
    {
        $this->__load();
        return parent::getNameIndex();
    }

    public function setNameIndex($name_index)
    {
        $this->__load();
        return parent::setNameIndex($name_index);
    }

    public function getMinimumPoints()
    {
        $this->__load();
        return parent::getMinimumPoints();
    }

    public function setMinimumPoints($minimum_points)
    {
        $this->__load();
        return parent::setMinimumPoints($minimum_points);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
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

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'dba', 'name_index', 'minimum_points', 'description', 'created', 'updated', 'Company', 'Applications', 'Programs');
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