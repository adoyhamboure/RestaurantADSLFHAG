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
class DishControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Controller\DishController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Controller\DishController::class)
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
    public function listActionFetchesAllDishesFromRepositoryAndAssignsThemToView()
    {

        $allDishes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dishRepository = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Domain\Repository\DishRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dishRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDishes));
        $this->inject($this->subject, 'dishRepository', $dishRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('dishes', $allDishes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDishToView()
    {
        $dish = new \AdSlFhAg\RestaurantAdslfhag\Domain\Model\Dish();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('dish', $dish);

        $this->subject->showAction($dish);
    }
}
