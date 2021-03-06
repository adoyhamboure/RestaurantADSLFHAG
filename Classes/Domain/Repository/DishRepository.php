<?php
namespace AdSlFhAg\RestaurantAdslfhag\Domain\Repository;


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
 * The repository for Dishes
 */
class DishRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
