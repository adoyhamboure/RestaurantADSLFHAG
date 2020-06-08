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
 * Catégorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

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
}
