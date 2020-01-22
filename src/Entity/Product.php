<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
    */
    private $actif;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;
    
    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $price;
    
    /**
     * @ORM\Column(type="integer")
    */
    private $taxRules;
    
    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $shoppedPrice;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $discount;
    
    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $discountPrice;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $discountPercent;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dicsountFor;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dicsountTo;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referenceShopper;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shopper;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ean13;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $upc;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $ecoPart;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $width;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $height;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $depth;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weight;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deliveryProduct;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deliveryproductSoldOut;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $minimalQuantity;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $levelMinimalStock;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $levelMinimalStockForMail;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visibility;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $shippingPrice;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $unity;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $unityPrice;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $summary;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keyWord;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tagTitle;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metaKeyWord;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metaDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $newUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ifInStock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ifPreOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $commande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disponibilityDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $addDate;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $displayPrice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageTexte;

    /**
     * @ORM\Column(type="integer")
     */
    private $deleteExistingImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $caracteristic;

    /**
     * @ORM\Column(type="integer")
     */
    private $onlineOnly;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conditionProduct;

    /**
     * @ORM\Column(type="integer")
     */
    private $customisable;

    /**
     * @ORM\Column(type="integer")
     */
    private $download;

    /**
     * @ORM\Column(type="integer")
     */
    private $textArea;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deadStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $dematerialize;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fileUrl;

    /**
     * @ORM\Column(type="integer")
     */
    private $downloadAutorize;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $expirationDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $dayNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shopName;

    /**
     * @ORM\Column(type="integer")
     */
    private $avancedStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $stockFunction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stockPlace;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $accessories;

    public function getId(): ?int
    {
        return $this->id;
    }

    function getActif(): ?int
    {
        return $this->actif;
    }
    
    function setActif(int $actif): self 
    {
        $this->actif = $actif;
        
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMetaKeyWord(): ?string
    {
        return $this->metaKeyWord;
    }

    public function setMetaKeyWord(string $metaKeyWord): self
    {
        $this->metaKeyWord = $metaKeyWord;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getNewUrl(): ?string
    {
        return $this->newUrl;
    }

    public function setNewUrl(string $newUrl): self
    {
        $this->newUrl = $newUrl;

        return $this;
    }

    public function getIfInStock(): ?string
    {
        return $this->ifInStock;
    }

    public function setIfInStock(string $ifInStock): self
    {
        $this->ifInStock = $ifInStock;

        return $this;
    }

    public function getIfPreOrder(): ?string
    {
        return $this->ifPreOrder;
    }

    public function setIfPreOrder(string $ifPreOrder): self
    {
        $this->ifPreOrder = $ifPreOrder;

        return $this;
    }

    public function getCommande(): ?int
    {
        return $this->commande;
    }

    public function setCommande(int $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getDisponibilityDate(): ?\DateTimeInterface
    {
        return $this->disponibilityDate;
    }

    public function setDisponibilityDate(\DateTimeInterface $disponibilityDate): self
    {
        $this->disponibilityDate = $disponibilityDate;

        return $this;
    }

    public function getAddDate(): ?\DateTimeInterface
    {
        return $this->addDate;
    }

    public function setAddDate(\DateTimeInterface $addDate): self
    {
        $this->addDate = $addDate;

        return $this;
    }

    public function getDisplayPrice(): ?string
    {
        return $this->displayPrice;
    }

    public function setDisplayPrice(string $displayPrice): self
    {
        $this->displayPrice = $displayPrice;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImageTexte(): ?string
    {
        return $this->imageTexte;
    }

    public function setImageTexte(string $imageTexte): self
    {
        $this->imageTexte = $imageTexte;

        return $this;
    }

    public function getDeleteExistingImage(): ?bool
    {
        return $this->deleteExistingImage;
    }

    public function setDeleteExistingImage(bool $deleteExistingImage): self
    {
        $this->deleteExistingImage = $deleteExistingImage;

        return $this;
    }

    public function getCaracteristic(): ?string
    {
        return $this->caracteristic;
    }

    public function setCaracteristic(string $caracteristic): self
    {
        $this->caracteristic = $caracteristic;

        return $this;
    }

    public function getOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    public function setOnlineOnly(bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }

    public function getConditionProduct(): ?string
    {
        return $this->conditionProduct;
    }

    public function setConditionProduct(string $conditionProduct): self
    {
        $this->conditionProduct = $conditionProduct;

        return $this;
    }

    public function getCustomisable(): ?bool
    {
        return $this->customisable;
    }

    public function setCustomisable(bool $customisable): self
    {
        $this->customisable = $customisable;

        return $this;
    }

    public function getDownload(): ?bool
    {
        return $this->download;
    }

    public function setDownload(bool $download): self
    {
        $this->download = $download;

        return $this;
    }

    public function getTextArea(): ?bool
    {
        return $this->textArea;
    }

    public function setTextArea(bool $textArea): self
    {
        $this->textArea = $textArea;

        return $this;
    }

    public function getDeadStock(): ?string
    {
        return $this->deadStock;
    }

    public function setDeadStock(string $deadStock): self
    {
        $this->deadStock = $deadStock;

        return $this;
    }

    public function getDematerialize(): ?bool
    {
        return $this->dematerialize;
    }

    public function setDematerialize(bool $dematerialize): self
    {
        $this->dematerialize = $dematerialize;

        return $this;
    }

    public function getFileUrl(): ?string
    {
        return $this->fileUrl;
    }

    public function setFileUrl(string $fileUrl): self
    {
        $this->fileUrl = $fileUrl;

        return $this;
    }

    public function getDownloadAutorize(): ?bool
    {
        return $this->downloadAutorize;
    }

    public function setDownloadAutorize(bool $downloadAutorize): self
    {
        $this->downloadAutorize = $downloadAutorize;

        return $this;
    }

    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getDayNumber(): ?bool
    {
        return $this->dayNumber;
    }

    public function setDayNumber(bool $dayNumber): self
    {
        $this->dayNumber = $dayNumber;

        return $this;
    }

    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    public function setShopName(string $shopName): self
    {
        $this->shopName = $shopName;

        return $this;
    }

    public function getAvancedStock(): ?bool
    {
        return $this->avancedStock;
    }

    public function setAvancedStock(bool $avancedStock): self
    {
        $this->avancedStock = $avancedStock;

        return $this;
    }

    public function getStockFunction(): ?bool
    {
        return $this->stockFunction;
    }

    public function setStockFunction(bool $stockFunction): self
    {
        $this->stockFunction = $stockFunction;

        return $this;
    }

    public function getStockPlace(): ?string
    {
        return $this->stockPlace;
    }

    public function setStockPlace(string $stockPlace): self
    {
        $this->stockPlace = $stockPlace;

        return $this;
    }

    public function getAccessories(): ?string
    {
        return $this->accessories;
    }

    public function setAccessories(string $accessories): self
    {
        $this->accessories = $accessories;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTaxRules(): ?int
    {
        return $this->taxRules;
    }

    public function setTaxRules(int $taxRules): self
    {
        $this->taxRules = $taxRules;

        return $this;
    }

    public function getShoppedPrice(): ?string
    {
        return $this->shoppedPrice;
    }

    public function setShoppedPrice(string $shoppedPrice): self
    {
        $this->shoppedPrice = $shoppedPrice;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getDiscountPrice(): ?string
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice(string $discountPrice): self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    public function getDiscountPercent(): ?int
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(int $discountPercent): self
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    public function getDicsountFor(): ?\DateTimeInterface
    {
        return $this->dicsountFor;
    }

    public function setDicsountFor(\DateTimeInterface $dicsountFor): self
    {
        $this->dicsountFor = $dicsountFor;

        return $this;
    }

    public function getDicsountTo(): ?\DateTimeInterface
    {
        return $this->dicsountTo;
    }

    public function setDicsountTo(\DateTimeInterface $dicsountTo): self
    {
        $this->dicsountTo = $dicsountTo;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getReferenceShopper(): ?string
    {
        return $this->referenceShopper;
    }

    public function setReferenceShopper(string $referenceShopper): self
    {
        $this->referenceShopper = $referenceShopper;

        return $this;
    }

    public function getShopper(): ?string
    {
        return $this->shopper;
    }

    public function setShopper(string $shopper): self
    {
        $this->shopper = $shopper;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(string $ean13): self
    {
        $this->ean13 = $ean13;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getEcoPart(): ?int
    {
        return $this->ecoPart;
    }

    public function setEcoPart(int $ecoPart): self
    {
        $this->ecoPart = $ecoPart;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getDepth(): ?string
    {
        return $this->depth;
    }

    public function setDepth(string $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getDeliveryProduct(): ?string
    {
        return $this->deliveryProduct;
    }

    public function setDeliveryProduct(string $deliveryProduct): self
    {
        $this->deliveryProduct = $deliveryProduct;

        return $this;
    }

    public function getDeliveryproductSoldOut(): ?string
    {
        return $this->deliveryproductSoldOut;
    }

    public function setDeliveryproductSoldOut(string $deliveryproductSoldOut): self
    {
        $this->deliveryproductSoldOut = $deliveryproductSoldOut;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getMinimalQuantity(): ?int
    {
        return $this->minimalQuantity;
    }

    public function setMinimalQuantity(int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;

        return $this;
    }

    public function getLevelMinimalStock(): ?int
    {
        return $this->levelMinimalStock;
    }

    public function setLevelMinimalStock(int $levelMinimalStock): self
    {
        $this->levelMinimalStock = $levelMinimalStock;

        return $this;
    }

    public function getLevelMinimalStockForMail(): ?int
    {
        return $this->levelMinimalStockForMail;
    }

    public function setLevelMinimalStockForMail(int $levelMinimalStockForMail): self
    {
        $this->levelMinimalStockForMail = $levelMinimalStockForMail;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getShippingPrice(): ?string
    {
        return $this->shippingPrice;
    }

    public function setShippingPrice(string $shippingPrice): self
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }

    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(string $unity): self
    {
        $this->unity = $unity;

        return $this;
    }

    public function getUnityPrice(): ?string
    {
        return $this->unityPrice;
    }

    public function setUnityPrice(string $unityPrice): self
    {
        $this->unityPrice = $unityPrice;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKeyWord(): ?string
    {
        return $this->keyWord;
    }

    public function setKeyWord(string $keyWord): self
    {
        $this->keyWord = $keyWord;

        return $this;
    }

    public function getTagTitle(): ?string
    {
        return $this->tagTitle;
    }

    public function setTagTitle(string $tagTitle): self
    {
        $this->tagTitle = $tagTitle;

        return $this;
    }
}
