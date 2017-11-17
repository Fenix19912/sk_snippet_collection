<?php
namespace Sk\SkSnippetCollection\Domain\Model;

/***
 *
 * This file is part of the "Snippet Samlung" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian Krikke <s.krikke79+development@gmail.com>
 *
 ***/

/**
 * Snippet
 */
class Snippet extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * code
     *
     * @var string
     * @validate NotEmpty
     */
    protected $code = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * feusers
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    protected $feusers = null;

    /**
     * history
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Sk\SkSnippetCollection\Domain\Model\History>
     * @cascade remove
     * @lazy
     */
    protected $history = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->history = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the code
     *
     * @param string $code
     * @return void
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Returns the beschreibung
     *
     * @return string $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Sets the beschreibung
     *
     * @param string $beschreibung
     * @return void
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

    /**
     * Returns the feusers
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feusers
     */
    public function getFeusers()
    {
        return $this->feusers;
    }

    /**
     * Sets the feusers
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feusers
     * @return void
     */
    public function setFeusers(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feusers)
    {
        $this->feusers = $feusers;
    }

    /**
     * Adds a History
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\History $history
     * @return void
     */
    public function addHistory(\Sk\SkSnippetCollection\Domain\Model\History $history)
    {
        $this->history->attach($history);
    }

    /**
     * Removes a History
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\History $historyToRemove The History to be removed
     * @return void
     */
    public function removeHistory(\Sk\SkSnippetCollection\Domain\Model\History $historyToRemove)
    {
        $this->history->detach($historyToRemove);
    }

    /**
     * Returns the history
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Sk\SkSnippetCollection\Domain\Model\History> $history
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Sets the history
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Sk\SkSnippetCollection\Domain\Model\History> $history
     * @return void
     */
    public function setHistory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $history)
    {
        $this->history = $history;
    }
}
