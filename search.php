<?php
/*
 * Demo serverside file for Leaflet Search Plugin
 * https://github.com/stefanocudini/leaflet-search
 * https://bitbucket.org/zakis_/leaflet-search
 *
 * http://labs.easyblog.it/maps/leaflet-search
 *
 * Copyright 2013, Stefano Cudini - http://labs.easyblog.it/stefano-cudini/
 * Licensed under the MIT license.

 What's:
	 php code for testing jsonp and ajax features

	 receive get parameters:
	 	q		 :	search text
	 	callback :	callback name for jsonp request

 Example Ajax:
 	request:
 		search.php?q=dark
 	response:
		[{"loc":[41.34419,13.242145],"title":"darkblue"},{"loc":[41.67919,13.122145],"title":"darkred"}]

 Example Jsonp:
 	request:
 		search.php?q=dark&callback=L.Control.Search.callJsonp
 	response:
		L.Control.Search.callJsonp([{"loc":[41.34419,13.242145],"title":"darkblue"},{"loc":[41.67919,13.122145],"title":"darkred"}])

 Example Bulk data:
 	request:
 		search.php?q=roma&cities=1
 	response:
		[{"title":"Romainville","loc":[48.8854,2.43482]},{"title":"Roma","loc":[41.89474,12.4839]},{"title":"Roman","loc":[46.91667,26.91667]}]


 Example Ajax Empty Result:
 	request:
 		search.php?q=xx
 	response:
		{"ok":1,"results":[]}

 Example Error Result:
 	request:
 		search.php?s=dark
 	response:
		{"ok":0,"errmsg":"specify query parameter"}

*/

$url = 'http://mapnus-wsapi.cloudapp.net/api/search_api/search_svc/callback';
if (isDomainAvailible($url)) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);

	if(!isset($_GET['q']) or empty($_GET['q']))
		die( json_encode(array('ok'=>0, 'errmsg'=>'specify q parameter') ) );

	$json_obj = json_decode($data, true);	//SIMULATE A DATABASE data
	//the searched field is: title
}

function searchInit($text)	//search initial text in titles
{
	$reg = "/^".$_GET['q']."/i";	//initial case insensitive searching
	return (bool)@preg_match($reg, $text['title']);
}

$fdata = array_filter($json_obj, 'searchInit');	//filter data
$fdata = array_values($fdata);	//reset $fdata indexs

$JSON = json_encode($fdata,true);

if($_SERVER['REMOTE_ADDR'] == 'localhost') sleep(1);
//simulate connection latency for localhost tests
@header("Content-type: application/json; charset=utf-8");

if(isset($_GET['callback']) and !empty($_GET['callback']))	//support for JSONP request
	echo $_GET['callback']."($JSON)";
else
	echo $JSON;	//AJAX request

function isDomainAvailible($domain) {
	//check, if a valid url is provided
	if(!filter_var($domain, FILTER_VALIDATE_URL)) {
		return false;
	}

	//initialize curl
	$curlInit = curl_init($domain);
	curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($curlInit,CURLOPT_HEADER,true);
	curl_setopt($curlInit,CURLOPT_NOBODY,true);
	curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

	$response = curl_exec($curlInit);

	curl_close($curlInit);

	if ($response) return true;

	return false;
}
?>
