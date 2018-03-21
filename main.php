<?php

require_once("./phpQuery-onefile.php");

$html = file_get_contents("https://www.apple.com/jp/shop/browse/home/specialdeals/mac/macbook_pro/13");

echo phpQuery::newDocument($html)->find("h1")->text();

?>
