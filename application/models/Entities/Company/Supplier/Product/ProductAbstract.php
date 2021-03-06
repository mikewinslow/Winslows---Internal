<?php
namespace Entities\Company\Supplier\Product;

use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity (repositoryClass="Repositories\Company\Supplier\Product\ProductAbstract") 
 * @Table(name="company_supplier_product_productabstracts") 
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({
 *			"company_supplier_product_configurable" = "\Entities\Company\Supplier\Product\Configurable", 
 *			"company_supplier_product_simple" = "\Entities\Company\Supplier\Product\Simple"
 *			})
 * @HasLifecycleCallbacks
 * @Crud\Entity\Url()
 * @Crud\Entity\Permissions(view={"Admin"}, edit={"Admin"}, create={"Admin"}, delete={"Admin"})
 */
abstract class ProductAbstract extends \Dataservice_Doctrine_Entity implements \Interfaces\Company\Supplier\Product
{
    const TYPE_Configurable = "Configurable";
    const TYPE_Simple	    = "Simple";
    const TYPE_Base	    = "Base";

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     * @var integer $id
     */
    private $id;

    /** 
     * @Column(type="string", length=255) 
     * @var string $name
     */
    protected $name;
    
    /** 
     * @Column(type="string", length=255) 
     * @var string $name_index
     */
    protected $name_index;
    
    /** 
     * @Column(type="string", length=255) 
     * @var string $part_number
     */
    protected $part_number;
    
    /** 
     * @Column(type="string", length=2000) 
     * @var string $part_number
     */
    protected $description;
    
    /** 
     * @ManyToOne(targetEntity="\Entities\Company\Supplier", inversedBy="Products")
     * @Crud\Relationship\Permissions()
     * @var \Entities\Company\Supplier $Supplier
     */     
    protected $Supplier;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\Supplier\Product\Category", mappedBy="Products", cascade={"persist"})
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var array $Categories
     */
    protected $Categories;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\RtoProvider\Program", inversedBy="Products", cascade={"persist"})
     * @JoinTable(name="company_supplier_product_program_joins")
     * @Crud\Relationship\Permissions()
     * @var ArrayCollection $Programs
     */
    protected $Programs;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\Supplier\Product\DeliveryType\DeliveryTypeAbstract", inversedBy="Products", cascade={"persist"})
     * @JoinTable(name="company_supplier_product_productabstract_deliverytype_joins")
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var ArrayCollection $DeliveryTypes
     */
    private $DeliveryTypes;
    
    /**
     * Bidirectional - One-To-Many (INVERSE SIDE)
     *
     * @OneToMany(targetEntity="\Entities\Company\Supplier\Product\Purpose", mappedBy="Product", cascade={"persist"})
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var array $Purposes
     */
    protected $Purposes;
    
    /**
     * @OnetoMany(targetEntity="\Entities\Company\Supplier\Product\File\Image", cascade={"persist", "remove"}, mappedBy="Product", orphanRemoval=true)
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var ArrayCollection $Images
     */
    private $Images;
    
    /**
     * @OneToOne(targetEntity="\Entities\Company\Supplier\Product\File\Image", cascade={"persist"}, orphanRemoval=true)
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var \Entities\Company\Supplier\Product\File\Image $DefaultImage
     */
    protected $DefaultImage;
    
    /**
     * @ManytoMany(targetEntity="\Entities\Company\Catalog", inversedBy="Products", cascade={"persist"})
     * @JoinTable(name="company_supplier_product_catalog_joins")
     * @Crud\Relationship\Permissions(add={"Admin"}, remove={"Admin"})
     * @var ArrayCollection $Catalogs
     */
    protected $Catalogs;

    public function __construct()
    {
	$this->RtoProviders	= new ArrayCollection();
	$this->Categories	= new ArrayCollection();
	$this->Programs		= new ArrayCollection();
	$this->DeliveryTypes	= new ArrayCollection();
	$this->Purposes		= new ArrayCollection();
	$this->Images		= new ArrayCollection();
	$this->Catalogs		= new ArrayCollection();
	
	parent::__construct();
    }
    
    /**
     * @param \Entities\Company\Supplier $Supplier
     */
    public function setSupplier(\Entities\Company\Supplier $Supplier)
    {
        $this->Supplier = $Supplier;
    }
    
    /**
     * @return \Entities\Company\Supplier
     */
    public function getSupplier()
    {
	return $this->Supplier;
    }
    
    /**
     * @param Category $Category
     */
    public function addCategory(Category $Category)
    {
	if(!$this->Categories->contains($Category))
	    $this->Categories[] = $Category;
    }
    
    /**
     * @param Category $Category
     */
    public function removeCategory(Category $Category)
    {
	$this->Categories->removeElement($Category);
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCategories()
    {
	return $this->Categories;
    }
    
    /**
     * @param \Entities\Company\RtoProvider\Program $Program
     */
    public function addProgram(\Entities\Company\RtoProvider\Program $Program)
    {
	if(!$this->Programs->contains($Program))
	    $this->Programs[] = $Program;
    }
    
    /**
     * @param \Entities\Company\RtoProvider\Program $Program
     */
    public function removeProgram(\Entities\Company\RtoProvider\Program $Program)
    {
	$this->Programs->removeElement($Program);
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPrograms()
    {
	return $this->Programs;
    }
    
    /**
     * @param \Entities\Company\Website $Catalog
     */
    public function addCatalog(\Entities\Company\Catalog $Catalog)
    {
	if(!$this->Catalogs->contains($Catalog))
	    $this->Catalogs[] = $Catalog;
    }
    
    /**
     * @param \Entities\Company\Catalog $Catalog
     */
    public function removeCatalog(\Entities\Company\Catalog $Catalog)
    {
	$this->Catalogs->removeElement($Catalog);
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCatalogs()
    {
	return $this->Catalogs;
    }
    
    /**
     * @param File\Image $Image
     */
    public function addImage(File\Image $Image)
    {
	$Image->setProduct($this);
	
	$this->Images[] = $Image;
    }
    
    /**
     * @param File\Image $Image
     */
    public function removeImage(File\Image $Image)
    {
	$this->Images->removeElement($Image);
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getImages()
    {
	return $this->Images;
    }
    
    /**
     * @param \Entities\Company\Supplier\Product\File\Image $Image
     */
    public function setDefaultImage(File\Image $Image)
    {
	$this->DefaultImage = $Image;
    }
    
    /**
     * @return \Entities\Company\Supplier\Product\File\Image
     */
    public function getDefaultImage()
    {
	return $this->DefaultImage;
    }
    
    /**
     * @return \Entities\Company\Supplier\Product\File\Image
     */
    public function getDefaultImageOrFirst()
    {
	return $this->getDefaultImage() ? $this->getDefaultImage() : $this->getImages()->first();
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getDeliveryTypes()
    {
	return $this->DeliveryTypes;
    }
    
    /**
     * @param DeliveryType\DeliveryTypeAbstract $DeliveryType
     */
    public function addDeliveryType(DeliveryType\DeliveryTypeAbstract $DeliveryType)
    {
	if(!$this->DeliveryTypes->contains($DeliveryType))
	{
	    $DeliveryType->addProduct($this);
	    
	    $this->DeliveryTypes[] = $DeliveryType;
	}
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPurposes()
    {
	return $this->Purposes;
    }
    
    /**
     * @param Purpose $Purpose
     */
    public function addPurpose(Purpose $Purpose)
    {
	if(!$this->Purposes->contains($Purpose))
	{
	    $Purpose->setProduct($this);
	    
	    $this->Purposes[] = $Purpose;
	}
    }
    
    /**
     * @param DeliveryType\DeliveryTypeAbstract $DeliveryType
     */
    public function removeDeliveryType(DeliveryType\DeliveryTypeAbstract $DeliveryType)
    {
	$this->DeliveryTypes->removeElement($DeliveryType);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getNameIndex()
    {
        return $this->name_index;
    }

    /**
     * @param string $name
     */
    public function setNameIndex($name_index)
    {
        $this->name_index = $name_index;
    }
    
    /**
     * @return string
     */
    public function getPartNumber()
    {
        return $this->part_number;
    }

    /**
     * @param string $partnumber
     */
    public function setPartNumber($partnumber)
    {
        $this->part_number = $partnumber;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * @return string
     */
    public function getDescriminator()
    {
	return static::TYPE_Base;
    }
    
    public function isSaleTypeAllowed($sale_type_index)
    {
	if($sale_type_index == "cash")
	    return true;
	else
	{
	    //TODO: Fix this...By Program?
	    $indexes_array = array();
	    /* @var $RtoProvider \Entities\Company\RtoProvider */ 
	    foreach ($this->getRtoProviders() as $RtoProvider)
	    {
		$indexes_array[] = $RtoProvider->getNameIndex();
	    }
	    
	    if(in_array($sale_type_index, $indexes_array)) return true;
	}
	
	return false;
    }
    
    public function toString()
    {
	return $this->getDescriminator()." >> ".$this->getName();
    }
}
