<?php
namespace AdSlFhAg\RestaurantAdslfhag\Controller;


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
 * DrinksController
 */
class DrinksController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * drinksRepository
     * 
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Repository\DrinksRepository
     * @inject
     */
    protected $drinksRepository = null;

    /**
     * action list
     * 
     * @param AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinkss
     * @return void
     */
    public function listAction()
    {
        $drinks = $this->drinksRepository->findAll();
        $this->view->assign('drinks', $drinks);
    }
}
