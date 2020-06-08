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
class SuggestionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Suggestion
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Suggestion();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStart()
        );
    }

    /**
     * @test
     */
    public function setStartForDateTimeSetsStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'start',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnd()
        );
    }

    /**
     * @test
     */
    public function setEndForDateTimeSetsEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'end',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForObjectStorageContainingDishSetsDishes()
    {
        $dish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDishes->attach($dish);
        $this->subject->setDishes($objectStorageHoldingExactlyOneDishes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDishes,
            'dishes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDishToObjectStorageHoldingDishes()
    {
        $dish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->addDish($dish);
    }

    /**
     * @test
     */
    public function removeDishFromObjectStorageHoldingDishes()
    {
        $dish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->removeDish($dish);
    }
}
