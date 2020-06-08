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
 * Suggestion
 */
class Suggestion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Date de début
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $start = null;

    /**
     * Date de fin
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $end = null;

    /**
     * Les plats
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish>
     * @lazy
     */
    protected $dishes = null;

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
        $this->dishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the start
     * 
     * @return \DateTime $start
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets the start
     * 
     * @param \DateTime $start
     * @return void
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
    }

    /**
     * Returns the end
     * 
     * @return \DateTime $end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets the end
     * 
     * @param \DateTime $end
     * @return void
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
    }

    /**
     * Adds a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dish
     * @return void
     */
    public function addDish(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dish)
    {
        $this->dishes->attach($dish);
    }

    /**
     * Removes a Dish
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dishToRemove The Dish to be removed
     * @return void
     */
    public function removeDish(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dishToRemove)
    {
        $this->dishes->detach($dishToRemove);
    }

    /**
     * Returns the dishes
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish> $dishes
     * @return void
     */
    public function setDishes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dishes)
    {
        $this->dishes = $dishes;
    }
}
