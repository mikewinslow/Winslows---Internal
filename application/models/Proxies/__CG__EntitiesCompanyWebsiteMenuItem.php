<?php

namespace Proxies\__CG__\Entities\Company\Website\Menu;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Item extends \Entities\Company\Website\Menu\Item implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setParent(\Entities\Company\Website\Menu\Item $parent)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function AddChild(\Entities\Company\Website\Menu\Item $Item)
    {
        $this->__load();
        return parent::AddChild($Item);
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }

    public function setMenu(\Entities\Company\Website\Menu $Menu)
    {
        $this->__load();
        return parent::setMenu($Menu);
    }

    public function getMenu()
    {
        $this->__load();
        return parent::getMenu();
    }

    public function updated()
    {
        $this->__load();
        return parent::updated();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
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

    public function getMenuId()
    {
        $this->__load();
        return parent::getMenuId();
    }

    public function getLabel()
    {
        $this->__load();
        return parent::getLabel();
    }

    public function setLabel($label)
    {
        $this->__load();
        return parent::setLabel($label);
    }

    public function getIcon()
    {
        $this->__load();
        return parent::getIcon();
    }

    public function setIcon($icon)
    {
        $this->__load();
        return parent::setIcon($icon);
    }

    public function getLinkModule()
    {
        $this->__load();
        return parent::getLinkModule();
    }

    public function setLinkModule($link_module)
    {
        $this->__load();
        return parent::setLinkModule($link_module);
    }

    public function getLinkController()
    {
        $this->__load();
        return parent::getLinkController();
    }

    public function setLinkController($link_controller)
    {
        $this->__load();
        return parent::setLinkController($link_controller);
    }

    public function getLinkAction()
    {
        $this->__load();
        return parent::getLinkAction();
    }

    public function setLinkAction($link_action)
    {
        $this->__load();
        return parent::setLinkAction($link_action);
    }

    public function getLinkParams()
    {
        $this->__load();
        return parent::getLinkParams();
    }

    public function setLinkParams($link_params)
    {
        $this->__load();
        return parent::setLinkParams($link_params);
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Menu_id', 'name_index', 'label', 'icon', 'link_module', 'link_controller', 'link_action', 'link_params', 'created', 'updated', 'Menu', 'parent', 'children');
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