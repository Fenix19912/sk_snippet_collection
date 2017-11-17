<?php
namespace Sk\SkSnippetCollection\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Sebastian Krikke <s.krikke79+development@gmail.com>
 */
class HistoryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Sk\SkSnippetCollection\Controller\HistoryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Sk\SkSnippetCollection\Controller\HistoryController::class)
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
    public function createActionAddsTheGivenHistoryToHistoryRepository()
    {
        $history = new \Sk\SkSnippetCollection\Domain\Model\History();

        $historyRepository = $this->getMockBuilder(\Sk\SkSnippetCollection\Domain\Repository\HistoryRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $historyRepository->expects(self::once())->method('add')->with($history);
        $this->inject($this->subject, 'historyRepository', $historyRepository);

        $this->subject->createAction($history);
    }
}
