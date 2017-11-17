
plugin.tx_sksnippetcollection_snippetlist {
  view {
    templateRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetlist.view.templateRootPath}
    partialRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetlist.view.partialRootPath}
    layoutRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetlist.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_sksnippetcollection_snippetlist.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_sksnippetcollection_snippetedit {
  view {
    templateRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetedit.view.templateRootPath}
    partialRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetedit.view.partialRootPath}
    layoutRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetedit.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_sksnippetcollection_snippetedit.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_sksnippetcollection_snippetsearch {
  view {
    templateRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetsearch.view.templateRootPath}
    partialRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetsearch.view.partialRootPath}
    layoutRootPaths.0 = EXT:sk_snippet_collection/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_sksnippetcollection_snippetsearch.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_sksnippetcollection_snippetsearch.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_sksnippetcollection._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-sk-snippet-collection table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-sk-snippet-collection table th {
        font-weight:bold;
    }

    .tx-sk-snippet-collection table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
