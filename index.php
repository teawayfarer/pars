<?php
	include_once('lib/SQL.php');
	include_once('lib/curl_query.php');
	include_once('lib/simple_html_dom.php');

	$html = file_get_contents("https://spryt.ru/feed/");
	echo 'html';
?>