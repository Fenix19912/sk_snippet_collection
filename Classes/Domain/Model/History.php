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
 * History
 */
class History extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * action
     *
     * @var string
     * @validate NotEmpty
     */
    protected $action = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * code
     *
     * @var string
     */
    protected $code = '';

    /**
     * beschreibung
     *
     * @var string
     */
    protected $beschreibung = '';

    /**
     * kommentar
     *
     * @var string
     */
    protected $kommentar = '';

    /**
     * Returns the action
     *
     * @return string $action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets the action
     *
     * @param string $action
     * @return void
     */
    public function setAction($action)
    {
        $this->action = $action;
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
     * Returns the kommentar
     *
     * @return string $kommentar
     */
    public function getKommentar()
    {
        return $this->kommentar;
    }

    /**
     * Sets the kommentar
     *
     * @param string $kommentar
     * @return void
     */
    public function setKommentar($kommentar)
    {
        $this->kommentar = $kommentar;
    }
}
