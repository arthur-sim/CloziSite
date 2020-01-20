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
     * @ORM\Column(type="string", length=255)
     */
    private $title;

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
     * @ORM\Column(type="string", length=255)
     */
    private $ifPreOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $commande;

    /**
     * @ORM\Column(type="date")
     */
    private $disponibilityDate;

    /**
     * @ORM\Column(type="date")
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
     * @ORM\Column(type="boolean")
     */
    private $deleteExistingImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $caracteristic;

    /**
     * @ORM\Column(type="boolean")
     */
    private $onlineOnly;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conditionProduct;

    /**
     * @ORM\Column(type="boolean")
     */
    private $customisable;

    /**
     * @ORM\Column(type="boolean")
     */
    private $download;

    /**
     * @ORM\Column(type="boolean")
     */
    private $textArea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deadStock;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dematerialize;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fileUrl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $downloadAutorize;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $expirationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dayNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $shopName;

    /**
     * @ORM\Column(type="boolean")
     */
    private $avancedStock;

    /**
     * @ORM\Column(type="boolean")
     */
    private $stockFunction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stockPlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accessories;

    public function getId(): ?int
    {
        return $this->id;
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
}
