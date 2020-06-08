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
 * Boisson
 */
class Drinks extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Prix
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0.0;

    /**
     * Description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * Alcoolisé
     * 
     * @var bool
     */
    protected $alcoholized = false;

    /**
     * Volume
     * 
     * @var string
     */
    protected $volume = '';

    /**
     * Catégorie
     * 
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category
     * @lazy
     */
    protected $category = null;

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
     * Returns the alcoholized
     * 
     * @return bool $alcoholized
     */
    public function getAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Sets the alcoholized
     * 
     * @param bool $alcoholized
     * @return void
     */
    public function setAlcoholized($alcoholized)
    {
        $this->alcoholized = $alcoholized;
    }

    /**
     * Returns the boolean state of alcoholized
     * 
     * @return bool
     */
    public function isAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Returns the volume
     * 
     * @return string $volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets the volume
     * 
     * @param string $volume
     * @return void
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Returns the category
     * 
     * @return \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
}
