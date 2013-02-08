<?php
namespace Dataservice\Html\CRUD\Content\Relationship;

class OneToMany extends RelationshipAbstract
{
    private $relationshipCollection;
    
    /**
     * @param \Dataservice_Doctrine_Entity $parentEntity
     * @param string $relationshipPropertyName
     * @return OneToMany
     */
    public static function factory(\Dataservice_Doctrine_Entity $parentEntity, $relationshipPropertyName)
    {
	return new OneToMany($parentEntity, $relationshipPropertyName);
    }
    
    public function __construct(\Dataservice_Doctrine_Entity $parentEntity, $relationshipPropertyName)
    {
	parent::__construct($parentEntity, $relationshipPropertyName);
	
	$collection_method			    = "get".$relationshipPropertyName;
	$this->relationshipCollection		    = $parentEntity->$collection_method();
	
	return $this;
    }
    
    public function buildRelationshipHeaderHtml()
    {
	$this->addHtmlHeaderContent($this->relationshipPropertyName);
	
	if($this->currentUserAccount->hasRoleByRoleNames($this->relationshipPermissions->add))
	    $this->addHtmlHeaderContent(
		    $this->anchorObject->addIcon(
			"", 
			"/".$this->relationshipClassUrl."/edit/id/0/".strtolower($this->parentClassName).
			    "_id/".$this->parentEntity->getId(), 
			"Add ".$this->relationshipClassName)
		    );
	
	return $this;
    }
    
    public function buildRelationshipBodyHtml()
    {
	$this->addHtmlBodyContent('<ul>');

	if(!count($this->relationshipCollection))
	    $this->addHtmlBodyContent("<li>No ".$this->relationshipPropertyName."</li>");
	else
	    /* @var $Entity \Dataservice_Doctrine_Entity */
	    foreach ($this->relationshipCollection as $Entity)
	    {
		$this->addHtmlBodyContent("<li>");
		
		if($this->currentUserAccount->hasRoleByRoleNames($Entity->getCrudPermission("view")))
		    $this->addHtmlBodyContent(
			    $this->anchorObject->viewIcon(
				    "", 
				    "/".$Entity->getCrudUrl()."/view/id/".$Entity->getId(), 
				    "View ".$this->relationshipClassName)
			    );
		
		if($this->currentUserAccount->hasRoleByRoleNames($Entity->getCrudPermission("delete")))
		    $this->addHtmlBodyContent(
			    $this->anchorObject->deleteIcon(
				    "", 
				    "/".$Entity->getCrudUrl()."/delete/id/".$Entity->getId(), 
				    true, 
				    "Delete ".$this->relationshipClassName)
			    );
		
		$this->addHtmlBodyContent(htmlspecialchars($Entity->toString()));
		$this->addHtmlBodyContent("</li>");
	    }
	    
	$this->addHtmlBodyContent("</ul>");
	
	return $this;
    }
}