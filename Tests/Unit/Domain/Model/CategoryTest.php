<?php
namespace AdSlFhAg\RestaurantAdslfhag\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Adrien Doyhamboure <adrien.doyhamboure@etu.u-bordeaux.fr>
 * @author Simon Lasbrugnas <simon.lasbrugnas@etu.u-bordeaux.fr>
 * @author Flavien Henry--Szatkowski <flavien.henry-szatkowski@etu.u-bordeaux.fr>
 * @author Alexandre Gendre <alexandre.gendre@etu.u-bordeaux.fr>
 */
class CategoryTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
