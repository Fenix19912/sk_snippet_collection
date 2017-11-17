<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history',
        'label' => 'action',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'enablecolumns' => [
        ],
		'searchFields' => 'action,name,code,beschreibung,kommentar',
        'iconfile' => 'EXT:sk_snippet_collection/Resources/Public/Icons/tx_sksnippetcollection_domain_model_history.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, action, name, code, beschreibung, kommentar',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, action, name, code, beschreibung, kommentar'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_sksnippetcollection_domain_model_history',
                'foreign_table_where' => 'AND tx_sksnippetcollection_domain_model_history.pid=###CURRENT_PID### AND tx_sksnippetcollection_domain_model_history.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'action' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history.action',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'name' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'code' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history.code',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'beschreibung' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history.beschreibung',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'kommentar' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:sk_snippet_collection/Resources/Private/Language/locallang_db.xlf:tx_sksnippetcollection_domain_model_history.kommentar',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        'snippet' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
