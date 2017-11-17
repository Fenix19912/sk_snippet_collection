<?php
namespace Sk\SkSnippetCollection\Controller;

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
 * HistoryController
 */
class HistoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * historyRepository
     *
     * @var \Sk\SkSnippetCollection\Domain\Repository\HistoryRepository
     * @inject
     */
    protected $historyRepository = null;

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\History $newHistory
     * @return void
     */
    public function createAction(\Sk\SkSnippetCollection\Domain\Model\History $newHistory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->historyRepository->add($newHistory);
        $this->redirect('list');
    }
}
