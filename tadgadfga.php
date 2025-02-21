<?php

$xml = $_POST['xml'];
$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
$info = simplexml_import_dom($dom);
echo $info->name;
?>