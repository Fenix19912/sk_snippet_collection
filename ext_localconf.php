<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Sk.SkSnippetCollection',
            'Snippetlist',
            [
                'Snippet' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Snippet' => 'list, show'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Sk.SkSnippetCollection',
            'Snippetedit',
            [
                'Snippet' => 'new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Snippet' => 'create, update, delete, ',
                'History' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Sk.SkSnippetCollection',
            'Snippetsearch',
            [
                'Snippet' => 'search, list'
            ],
            // non-cacheable actions
            [
                'Snippet' => 'create, update, delete, ',
                'History' => 'create'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					snippetlist {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_snippetlist.svg
						title = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetlist
						description = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetlist.description
						tt_content_defValues {
							CType = list
							list_type = sksnippetcollection_snippetlist
						}
					}
					snippetedit {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_snippetedit.svg
						title = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetedit
						description = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetedit.description
						tt_content_defValues {
							CType = list
							list_type = sksnippetcollection_snippetedit
						}
					}
					snippetsearch {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_snippetsearch.svg
						title = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetsearch
						description = LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sk_snippet_collection_domain_model_snippetsearch.description
						tt_content_defValues {
							CType = list
							list_type = sksnippetcollection_snippetsearch
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
