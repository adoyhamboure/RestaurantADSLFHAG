<?php
namespace AdSlFhAg\RestaurantAdslfhag\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Adrien Doyhamboure <adrien.doyhamboure@etu.u-bordeaux.fr>
 * @author Simon Lasbrugnas <simon.lasbrugnas@etu.u-bordeaux.fr>
 * @author Flavien Henry--Szatkowski <flavien.henry-szatkowski@etu.u-bordeaux.fr>
 * @author Alexandre Gendre <alexandre.gendre@etu.u-bordeaux.fr>
 */
class DrinkControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Controller\DrinkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Controller\DrinkController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllDrinksFromRepositoryAndAssignsThemToView()
    {

        $allDrinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $drinkRepository = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Domain\Repository\DrinkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $drinkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDrinks));
        $this->inject($this->subject, 'drinkRepository', $drinkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('drinks', $allDrinks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
