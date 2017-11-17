
plugin.tx_sksnippetcollection_snippetlist {
  view {
    # cat=plugin.tx_sksnippetcollection_snippetlist/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:sk_snippet_collection/Resources/Private/Templates/
    # cat=plugin.tx_sksnippetcollection_snippetlist/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:sk_snippet_collection/Resources/Private/Partials/
    # cat=plugin.tx_sksnippetcollection_snippetlist/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:sk_snippet_collection/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_sksnippetcollection_snippetlist//a; type=string; label=Default storage PID
    storagePid =
  }
}

plugin.tx_sksnippetcollection_snippetedit {
  view {
    # cat=plugin.tx_sksnippetcollection_snippetedit/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:sk_snippet_collection/Resources/Private/Templates/
    # cat=plugin.tx_sksnippetcollection_snippetedit/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:sk_snippet_collection/Resources/Private/Partials/
    # cat=plugin.tx_sksnippetcollection_snippetedit/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:sk_snippet_collection/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_sksnippetcollection_snippetedit//a; type=string; label=Default storage PID
    storagePid =
  }
}

plugin.tx_sksnippetcollection_snippetsearch {
  view {
    # cat=plugin.tx_sksnippetcollection_snippetsearch/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:sk_snippet_collection/Resources/Private/Templates/
    # cat=plugin.tx_sksnippetcollection_snippetsearch/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:sk_snippet_collection/Resources/Private/Partials/
    # cat=plugin.tx_sksnippetcollection_snippetsearch/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:sk_snippet_collection/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_sksnippetcollection_snippetsearch//a; type=string; label=Default storage PID
    storagePid =
  }
}
