<?php
namespace Sk\SkSnippetCollection\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Sebastian Krikke <s.krikke79+development@gmail.com>
 */
class SnippetControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Sk\SkSnippetCollection\Controller\SnippetController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Sk\SkSnippetCollection\Controller\SnippetController::class)
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
    public function listActionFetchesAllSnippetsFromRepositoryAndAssignsThemToView()
    {

        $allSnippets = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $snippetRepository = $this->getMockBuilder(\Sk\SkSnippetCollection\Domain\Repository\SnippetRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $snippetRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSnippets));
        $this->inject($this->subject, 'snippetRepository', $snippetRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('snippets', $allSnippets);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSnippetToView()
    {
        $snippet = new \Sk\SkSnippetCollection\Domain\Model\Snippet();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('snippet', $snippet);

        $this->subject->showAction($snippet);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSnippetToSnippetRepository()
    {
        $snippet = new \Sk\SkSnippetCollection\Domain\Model\Snippet();

        $snippetRepository = $this->getMockBuilder(\Sk\SkSnippetCollection\Domain\Repository\SnippetRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $snippetRepository->expects(self::once())->method('add')->with($snippet);
        $this->inject($this->subject, 'snippetRepository', $snippetRepository);

        $this->subject->createAction($snippet);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSnippetToView()
    {
        $snippet = new \Sk\SkSnippetCollection\Domain\Model\Snippet();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('snippet', $snippet);

        $this->subject->editAction($snippet);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSnippetInSnippetRepository()
    {
        $snippet = new \Sk\SkSnippetCollection\Domain\Model\Snippet();

        $snippetRepository = $this->getMockBuilder(\Sk\SkSnippetCollection\Domain\Repository\SnippetRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $snippetRepository->expects(self::once())->method('update')->with($snippet);
        $this->inject($this->subject, 'snippetRepository', $snippetRepository);

        $this->subject->updateAction($snippet);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSnippetFromSnippetRepository()
    {
        $snippet = new \Sk\SkSnippetCollection\Domain\Model\Snippet();

        $snippetRepository = $this->getMockBuilder(\Sk\SkSnippetCollection\Domain\Repository\SnippetRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $snippetRepository->expects(self::once())->method('remove')->with($snippet);
        $this->inject($this->subject, 'snippetRepository', $snippetRepository);

        $this->subject->deleteAction($snippet);
    }
}
