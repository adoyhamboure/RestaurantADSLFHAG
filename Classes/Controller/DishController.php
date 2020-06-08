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
 * DishController
 */
class DishController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dishRepository
     * 
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Repository\DishRepository
     * @inject
     */
    protected $dishRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action focus
     * 
     * @return void
     */
    public function focusAction()
    {
    }
}
