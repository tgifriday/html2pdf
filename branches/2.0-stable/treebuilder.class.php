<?php
// $Header: /cvsroot/html2ps/treebuilder.class.php,v 1.17 2007/05/06 18:49:29 Konstantin Exp $

if (!defined('XML_ELEMENT_NODE')) { define('XML_ELEMENT_NODE',1); };
if (!defined('XML_TEXT_NODE')) { define('XML_TEXT_NODE',2); };
if (!defined('XML_DOCUMENT_NODE')) { define('XML_DOCUMENT_NODE',3); };

class TreeBuilder { 
  function build($xmlstring) {
    require_once(HTML2PS_DIR.'dom.php5.inc.php');
    return DOMTree::from_DOMDocument(DOMDocument::loadXML($xmlstring)); 
  }
};
?>