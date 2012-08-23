<?php

namespace Proxies\__CG__\Entities\Company\Supplier\Product\Configurable\Option;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Parameter extends \Entities\Company\Supplier\Product\Configurable\Option\Parameter implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setOption(\Entities\Company\Supplier\Product\Configurable\Option $Option)
    {
        $this->__load();
        return parent::setOption($Option);
    }

    public function getOption()
    {
        $this->__load();
        return parent::getOption();
    }

    public function AddValue(\Entities\Company\Supplier\Product\Configurable\Option\Parameter\Value $Value)
    {
        $this->__load();
        return parent::AddValue($Value);
    }

    public function getValues()
    {
        $this->__load();
        return parent::getValues();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getIndex()
    {
        $this->__load();
        return parent::getIndex();
    }

    public function setIndex($index)
    {
        $this->__load();
        return parent::setIndex($index);
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

    public function getLength()
    {
        $this->__load();
        return parent::getLength();
    }

    public function setLength($length)
    {
        $this->__load();
        return parent::setLength($length);
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

    public function setRequired($required)
    {
        $this->__load();
        return parent::setRequired($required);
    }

    public function isRequired()
    {
        $this->__load();
        return parent::isRequired();
    }

    public function isRequiredString()
    {
        $this->__load();
        return parent::isRequiredString();
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
        return array('__isInitialized__', 'id', 'index_string', 'name', 'description', 'required', 'length', 'Option_id', 'Option', 'Values');
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