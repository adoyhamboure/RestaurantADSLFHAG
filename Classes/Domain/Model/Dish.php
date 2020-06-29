<?php
namespace AdSlFhAg\RestaurantAdslfhag\Domain\Model;


/***
 *
 * This file is part of the "Restaurant ADSLFHAG" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Adrien Doyhamboure <adrien.doyhamboure@etu.u-bordeaux.fr>, DAWIN
 *           Simon Lasbrugnas <simon.lasbrugnas@etu.u-bordeaux.fr>, DAWIN
 *           Flavien Henry--Szatkowski <flavien.henry-szatkowski@etu.u-bordeaux.fr>, DAWIN
 *           Alexandre Gendre <alexandre.gendre@etu.u-bordeaux.fr>, DAWIN
 *
 ***/
/**
 * Dish
 */
class Dish extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

        const TYPE_ENTRY = 1;
        const TYPE_MAIN = 2;
        const TYPE_CHEESE = 3;
        const TYPE_DESSERT = 4;
    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * Photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $photo = null;

    /**
     * Type
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $type = 0;

    /**
     * price
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0.0;

    /**
     * Reduction
     * 
     * @var float
     */
    protected $discount = 0.0;

    /**
     * Contient des allergènes
     * 
     * @var bool
     */
    protected $allergens = false;

    /**
     * Contient des produits surgelés
     * 
     * @var bool
     */
    protected $frozens = false;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the type
     * 
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the discount
     * 
     * @return float $discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets the discount
     * 
     * @param float $discount
     * @return void
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * Returns the allergens
     * 
     * @return bool $allergens
     */
    public function getAllergens()
    {
        return $this->allergens;
    }

    /**
     * Sets the allergens
     * 
     * @param bool $allergens
     * @return void
     */
    public function setAllergens($allergens)
    {
        $this->allergens = $allergens;
    }

    /**
     * Returns the boolean state of allergens
     * 
     * @return bool
     */
    public function isAllergens()
    {
        return $this->allergens;
    }

    /**
     * Returns the frozens
     * 
     * @return bool $frozens
     */
    public function getFrozens()
    {
        return $this->frozens;
    }

    /**
     * Sets the frozens
     * 
     * @param bool $frozens
     * @return void
     */
    public function setFrozens($frozens)
    {
        $this->frozens = $frozens;
    }

    /**
     * Returns the boolean state of frozens
     * 
     * @return bool
     */
    public function isFrozens()
    {
        return $this->frozens;
    }
}
