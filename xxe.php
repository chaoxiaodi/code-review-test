<?php
// 不安全的XML解析
$xml = $_POST['xml'];
$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
$info = simplexml_import_dom($dom);
echo $info->name;
?>