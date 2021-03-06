<?php
namespace Forms\Company\Website\Menu\Item;

class Subform extends \Zend_Form_SubForm
{
    private $_MenuItem;
    
    public function __construct(\Entities\Company\Website\Menu\Item $MenuItem,$options = null)
    {
	$this->_MenuItem = $MenuItem;
	
	parent::__construct($options);
    }
    
    public function init()
    {
	$this->addElement(new \Dataservice_Form_Element_MenuSelect("menu_id", array(
            'required'	    => true,
            'label'	    => 'Menu:',
	    'value'	    => $this->_MenuItem && $this->_MenuItem->getMenu() ? 
				$this->_MenuItem->getMenu()->getId() : 
				""
        )));
	
	$this->addElement(new \Dataservice_Form_Element_MenuItemSelect("parent_id", array(
            'required'	    => false,
            'label'	    => 'Parent:',
	    'description'   => 'Leave blank if no parent',
	    'value'	    => $this->_MenuItem && $this->_MenuItem->getParent() ? 
				$this->_MenuItem->getParent()->getId() : 
				""
        )));
	
	$this->addElement('text', 'name_index', array(
            'required'	    => true,
            'label'	    => 'Name Index:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getNameIndex() : ""
        ));
	
	$this->addElement('text', 'label', array(
            'required'	    => true,
            'label'	    => 'Label:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getLabel() : ""
        ));
	
	$this->addElement('text', 'link_module', array(
            'required'	    => false,
            'label'	    => 'Link Module:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getLinkModule() : ""
        ));
	
	$this->addElement('text', 'link_controller', array(
            'required'	    => false,
            'label'	    => 'Link Controller:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getLinkController() : ""
        ));
	
	$this->addElement('text', 'link_action', array(
            'required'	    => false,
            'label'	    => 'Link Action:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getLinkAction() : ""
        ));
	
	$this->addElement('text', 'link_params', array(
            'required'	    => false,
            'label'	    => 'Link Params:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getLinkParams() : ""
        ));
	
	$this->addElement('text', 'icon', array(
            'required'	    => false,
            'label'	    => 'Icon:',
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getIcon() : ""
        ));
	
	$this->addElement('select', 'sort_order', array(
            'required'	    => false,
            'label'	    => 'Sort Order:',
	    'multioptions'  => range(0, 100),
	    'value'	    => $this->_MenuItem ? $this->_MenuItem->getOrder() : ""
        ));
	
	$this->setElementsBelongTo("company_website_menu_item");
    }
}