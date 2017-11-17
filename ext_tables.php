<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Sk.SkSnippetCollection',
            'Snippetlist',
            'Snippet Liste'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Sk.SkSnippetCollection',
            'Snippetedit',
            'Snippet Bearbeiten'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Sk.SkSnippetCollection',
            'Snippetsearch',
            'Snippet Suchen'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Snippet Samlung');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sksnippetcollection_domain_model_snippet', 'EXT:sk_snippet_collection/Resources/Private/Language/locallang_csh_tx_sksnippetcollection_domain_model_snippet.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sksnippetcollection_domain_model_snippet');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sksnippetcollection_domain_model_history', 'EXT:sk_snippet_collection/Resources/Private/Language/locallang_csh_tx_sksnippetcollection_domain_model_history.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sksnippetcollection_domain_model_history');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $extKey,
            'tx_sksnippetcollection_domain_model_snippet'
        );

    },
    $_EXTKEY
);
