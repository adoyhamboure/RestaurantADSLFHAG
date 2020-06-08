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
class MenuTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Menu
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Menu();
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
    public function getServiceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getService()
        );
    }

    /**
     * @test
     */
    public function setServiceForIntSetsService()
    {
        $this->subject->setService(12);

        self::assertAttributeEquals(
            12,
            'service',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailableReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAvailable()
        );
    }

    /**
     * @test
     */
    public function setAvailableForBoolSetsAvailable()
    {
        $this->subject->setAvailable(true);

        self::assertAttributeEquals(
            true,
            'available',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDiscountReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDiscount()
        );
    }

    /**
     * @test
     */
    public function setDiscountForFloatSetsDiscount()
    {
        $this->subject->setDiscount(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'discount',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getEntriesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEntries()
        );
    }

    /**
     * @test
     */
    public function setEntriesForObjectStorageContainingDishSetsEntries()
    {
        $entry = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneEntries = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEntries->attach($entry);
        $this->subject->setEntries($objectStorageHoldingExactlyOneEntries);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEntries,
            'entries',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addEntryToObjectStorageHoldingEntries()
    {
        $entry = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $entriesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entriesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($entry));
        $this->inject($this->subject, 'entries', $entriesObjectStorageMock);

        $this->subject->addEntry($entry);
    }

    /**
     * @test
     */
    public function removeEntryFromObjectStorageHoldingEntries()
    {
        $entry = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $entriesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $entriesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($entry));
        $this->inject($this->subject, 'entries', $entriesObjectStorageMock);

        $this->subject->removeEntry($entry);
    }

    /**
     * @test
     */
    public function getMainDishesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMainDishes()
        );
    }

    /**
     * @test
     */
    public function setMainDishesForObjectStorageContainingDishSetsMainDishes()
    {
        $mainDish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneMainDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMainDishes->attach($mainDish);
        $this->subject->setMainDishes($objectStorageHoldingExactlyOneMainDishes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMainDishes,
            'mainDishes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMainDishToObjectStorageHoldingMainDishes()
    {
        $mainDish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $mainDishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mainDishesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($mainDish));
        $this->inject($this->subject, 'mainDishes', $mainDishesObjectStorageMock);

        $this->subject->addMainDish($mainDish);
    }

    /**
     * @test
     */
    public function removeMainDishFromObjectStorageHoldingMainDishes()
    {
        $mainDish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $mainDishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mainDishesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($mainDish));
        $this->inject($this->subject, 'mainDishes', $mainDishesObjectStorageMock);

        $this->subject->removeMainDish($mainDish);
    }

    /**
     * @test
     */
    public function getCheesesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCheeses()
        );
    }

    /**
     * @test
     */
    public function setCheesesForObjectStorageContainingDishSetsCheeses()
    {
        $cheese = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneCheeses = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCheeses->attach($cheese);
        $this->subject->setCheeses($objectStorageHoldingExactlyOneCheeses);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCheeses,
            'cheeses',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCheeseToObjectStorageHoldingCheeses()
    {
        $cheese = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $cheesesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cheesesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($cheese));
        $this->inject($this->subject, 'cheeses', $cheesesObjectStorageMock);

        $this->subject->addCheese($cheese);
    }

    /**
     * @test
     */
    public function removeCheeseFromObjectStorageHoldingCheeses()
    {
        $cheese = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $cheesesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $cheesesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($cheese));
        $this->inject($this->subject, 'cheeses', $cheesesObjectStorageMock);

        $this->subject->removeCheese($cheese);
    }

    /**
     * @test
     */
    public function getDessertsReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDesserts()
        );
    }

    /**
     * @test
     */
    public function setDessertsForObjectStorageContainingDishSetsDesserts()
    {
        $dessert = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneDesserts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDesserts->attach($dessert);
        $this->subject->setDesserts($objectStorageHoldingExactlyOneDesserts);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDesserts,
            'desserts',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDessertToObjectStorageHoldingDesserts()
    {
        $dessert = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $dessertsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dessertsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dessert));
        $this->inject($this->subject, 'desserts', $dessertsObjectStorageMock);

        $this->subject->addDessert($dessert);
    }

    /**
     * @test
     */
    public function removeDessertFromObjectStorageHoldingDesserts()
    {
        $dessert = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();
        $dessertsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dessertsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dessert));
        $this->inject($this->subject, 'desserts', $dessertsObjectStorageMock);

        $this->subject->removeDessert($dessert);
    }

    /**
     * @test
     */
    public function getDrinksReturnsInitialValueForDrinks()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDrinks()
        );
    }

    /**
     * @test
     */
    public function setDrinksForObjectStorageContainingDrinksSetsDrinks()
    {
        $drink = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks();
        $objectStorageHoldingExactlyOneDrinks = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDrinks->attach($drink);
        $this->subject->setDrinks($objectStorageHoldingExactlyOneDrinks);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDrinks,
            'drinks',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDrinkToObjectStorageHoldingDrinks()
    {
        $drink = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks();
        $drinksObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $drinksObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($drink));
        $this->inject($this->subject, 'drinks', $drinksObjectStorageMock);

        $this->subject->addDrink($drink);
    }

    /**
     * @test
     */
    public function removeDrinkFromObjectStorageHoldingDrinks()
    {
        $drink = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Drinks();
        $drinksObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $drinksObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($drink));
        $this->inject($this->subject, 'drinks', $drinksObjectStorageMock);

        $this->subject->removeDrink($drink);
    }
}
