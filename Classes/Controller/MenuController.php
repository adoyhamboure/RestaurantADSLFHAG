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
 * MenuController
 */
class MenuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * menuRepository
     * 
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Repository\MenuRepository
     * @inject
     */
    protected $menuRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $menus = $this->menuRepository->findAll();
        $this->view->assign('menus', $menus);
    }

    /**
     * action show
     * 
     * @param \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Menu $menu
     * @return void
     */
    public function showAction(\AdSlFhAg\RestaurantAdslfhag\Domain\Model\Menu $menu)
    {
        $this->view->assign('menu', $menu);
    }
}
