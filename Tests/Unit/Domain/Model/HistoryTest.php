<?php
namespace Sk\SkSnippetCollection\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sebastian Krikke <s.krikke79+development@gmail.com>
 */
class HistoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Sk\SkSnippetCollection\Domain\Model\History
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Sk\SkSnippetCollection\Domain\Model\History();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getActionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAction()
        );

    }

    /**
     * @test
     */
    public function setActionForStringSetsAction()
    {
        $this->subject->setAction('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'action',
            $this->subject
        );

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
    public function getKommentarReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKommentar()
        );

    }

    /**
     * @test
     */
    public function setKommentarForStringSetsKommentar()
    {
        $this->subject->setKommentar('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kommentar',
            $this->subject
        );

    }
}
