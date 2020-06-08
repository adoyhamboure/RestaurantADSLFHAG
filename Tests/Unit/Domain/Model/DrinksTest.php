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
class DrinksTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks();
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

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholizedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholized()
        );
    }

    /**
     * @test
     */
    public function setAlcoholizedForBoolSetsAlcoholized()
    {
        $this->subject->setAlcoholized(true);

        self::assertAttributeEquals(
            true,
            'alcoholized',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVolumeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVolume()
        );
    }

    /**
     * @test
     */
    public function setVolumeForStringSetsVolume()
    {
        $this->subject->setVolume('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'volume',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }
}
