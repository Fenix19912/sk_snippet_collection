<?php
namespace Sk\SkSnippetCollection\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sebastian Krikke <s.krikke79+development@gmail.com>
 */
class SnippetTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Sk\SkSnippetCollection\Domain\Model\Snippet
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Sk\SkSnippetCollection\Domain\Model\Snippet();
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
    public function getCodeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCode()
        );

    }

    /**
     * @test
     */
    public function setCodeForStringSetsCode()
    {
        $this->subject->setCode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'code',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBeschreibungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBeschreibung()
        );

    }

    /**
     * @test
     */
    public function setBeschreibungForStringSetsBeschreibung()
    {
        $this->subject->setBeschreibung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'beschreibung',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFeusersReturnsInitialValueForFrontendUser()
    {
    }

    /**
     * @test
     */
    public function setFeusersForFrontendUserSetsFeusers()
    {
    }

    /**
     * @test
     */
    public function getHistoryReturnsInitialValueForHistory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getHistory()
        );

    }

    /**
     * @test
     */
    public function setHistoryForObjectStorageContainingHistorySetsHistory()
    {
        $history = new \Sk\SkSnippetCollection\Domain\Model\History();
        $objectStorageHoldingExactlyOneHistory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneHistory->attach($history);
        $this->subject->setHistory($objectStorageHoldingExactlyOneHistory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneHistory,
            'history',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addHistoryToObjectStorageHoldingHistory()
    {
        $history = new \Sk\SkSnippetCollection\Domain\Model\History();
        $historyObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $historyObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($history));
        $this->inject($this->subject, 'history', $historyObjectStorageMock);

        $this->subject->addHistory($history);
    }

    /**
     * @test
     */
    public function removeHistoryFromObjectStorageHoldingHistory()
    {
        $history = new \Sk\SkSnippetCollection\Domain\Model\History();
        $historyObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $historyObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($history));
        $this->inject($this->subject, 'history', $historyObjectStorageMock);

        $this->subject->removeHistory($history);

    }
}
