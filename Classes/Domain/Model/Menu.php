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
 * Menu
 */
class Menu extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * Service
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $service = 0;

    /**
     * Disponible
     * 
     * @var bool
     */
    protected $available = false;

    /**
     * Réduction
     * 
     * @var float
     */
    protected $discount = 0.0;

    /**
     * Les entrées
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish>
     * @lazy
     */
    protected $entries = null;

    /**
     * Les plats principaux
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish>
     * @lazy
     */
    protected $mainDishes = null;

    /**
     * Les fromages
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish>
     * @lazy
     */
    protected $cheeses = null;

    /**
     * Les desserts
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish>
     * @lazy
     */
    protected $desserts = null;

    /**
     * Les boissons
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks>
     * @lazy
     */
    protected $drinks = null;

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
     * Returns the service
     * 
     * @return int $service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets the service
     * 
     * @param int $service
     * @return void
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * Returns the available
     * 
     * @return bool $available
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Sets the available
     * 
     * @param bool $available
     * @return void
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * Returns the boolean state of available
     * 
     * @return bool
     */
    public function isAvailable()
    {
        return $this->available;
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
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->entries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->mainDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->cheeses = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->desserts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->drinks = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $entry
     * @return void
     */
    public function addEntry(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $entry)
    {
        $this->entries->attach($entry);
    }

    /**
     * Removes a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $entryToRemove The Dish to be removed
     * @return void
     */
    public function removeEntry(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $entryToRemove)
    {
        $this->entries->detach($entryToRemove);
    }

    /**
     * Returns the entries
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $entries
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Sets the entries
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $entries
     * @return void
     */
    public function setEntries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $entries)
    {
        $this->entries = $entries;
    }

    /**
     * Adds a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $mainDish
     * @return void
     */
    public function addMainDish(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $mainDish)
    {
        $this->mainDishes->attach($mainDish);
    }

    /**
     * Removes a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $mainDishToRemove The Dish to be removed
     * @return void
     */
    public function removeMainDish(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $mainDishToRemove)
    {
        $this->mainDishes->detach($mainDishToRemove);
    }

    /**
     * Returns the mainDishes
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $mainDishes
     */
    public function getMainDishes()
    {
        return $this->mainDishes;
    }

    /**
     * Sets the mainDishes
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $mainDishes
     * @return void
     */
    public function setMainDishes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mainDishes)
    {
        $this->mainDishes = $mainDishes;
    }

    /**
     * Adds a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $cheese
     * @return void
     */
    public function addCheese(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $cheese)
    {
        $this->cheeses->attach($cheese);
    }

    /**
     * Removes a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $cheeseToRemove The Dish to be removed
     * @return void
     */
    public function removeCheese(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $cheeseToRemove)
    {
        $this->cheeses->detach($cheeseToRemove);
    }

    /**
     * Returns the cheeses
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $cheeses
     */
    public function getCheeses()
    {
        return $this->cheeses;
    }

    /**
     * Sets the cheeses
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $cheeses
     * @return void
     */
    public function setCheeses(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cheeses)
    {
        $this->cheeses = $cheeses;
    }

    /**
     * Adds a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dessert
     * @return void
     */
    public function addDessert(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dessert)
    {
        $this->desserts->attach($dessert);
    }

    /**
     * Removes a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dessertToRemove The Dish to be removed
     * @return void
     */
    public function removeDessert(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dessertToRemove)
    {
        $this->desserts->detach($dessertToRemove);
    }

    /**
     * Returns the desserts
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $desserts
     */
    public function getDesserts()
    {
        return $this->desserts;
    }

    /**
     * Sets the desserts
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $desserts
     * @return void
     */
    public function setDesserts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $desserts)
    {
        $this->desserts = $desserts;
    }

    /**
     * Adds a Drinks
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks $drink
     * @return void
     */
    public function addDrink(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks $drink)
    {
        $this->drinks->attach($drink);
    }

    /**
     * Removes a Drinks
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks $drinkToRemove The Drinks to be removed
     * @return void
     */
    public function removeDrink(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks $drinkToRemove)
    {
        $this->drinks->detach($drinkToRemove);
    }

    /**
     * Returns the drinks
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks> drinks
     */
    public function getDrinks()
    {
        return $this->drinks;
    }

    /**
     * Sets the drinks
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks> $drinks
     * @return void
     */
    public function setDrinks(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $drinks)
    {
        $this->drinks = $drinks;
    }
}
