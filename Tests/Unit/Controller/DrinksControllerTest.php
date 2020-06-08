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
class DrinksControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \AdSlFhAg\RestaurantAdslfhag\Controller\DrinksController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Controller\DrinksController::class)
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
    public function listActionFetchesAllDrinkssFromRepositoryAndAssignsThemToView()
    {

        $allDrinkss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $drinksRepository = $this->getMockBuilder(\AdSlFhAg\RestaurantAdslfhag\Domain\Repository\DrinksRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $drinksRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDrinkss));
        $this->inject($this->subject, 'drinksRepository', $drinksRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('drinkss', $allDrinkss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
