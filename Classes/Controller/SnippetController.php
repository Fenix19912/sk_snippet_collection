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
 * SnippetController
 */
class SnippetController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * snippetRepository
     *
     * @var \Sk\SkSnippetCollection\Domain\Repository\SnippetRepository
     * @inject
     */
    protected $snippetRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $snippets = $this->snippetRepository->findAll();
        $this->view->assign('snippets', $snippets);
    }

    /**
     * action show
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\Snippet $snippet
     * @return void
     */
    public function showAction(\Sk\SkSnippetCollection\Domain\Model\Snippet $snippet)
    {
        $this->view->assign('snippet', $snippet);
    }

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
     * @param \Sk\SkSnippetCollection\Domain\Model\Snippet $newSnippet
     * @return void
     */
    public function createAction(\Sk\SkSnippetCollection\Domain\Model\Snippet $newSnippet)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->snippetRepository->add($newSnippet);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\Snippet $snippet
     * @ignorevalidation $snippet
     * @return void
     */
    public function editAction(\Sk\SkSnippetCollection\Domain\Model\Snippet $snippet)
    {
        $this->view->assign('snippet', $snippet);
    }

    /**
     * action update
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\Snippet $snippet
     * @return void
     */
    public function updateAction(\Sk\SkSnippetCollection\Domain\Model\Snippet $snippet)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->snippetRepository->update($snippet);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Sk\SkSnippetCollection\Domain\Model\Snippet $snippet
     * @return void
     */
    public function deleteAction(\Sk\SkSnippetCollection\Domain\Model\Snippet $snippet)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->snippetRepository->remove($snippet);
        $this->redirect('list');
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
