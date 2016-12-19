<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function pdie($array = []){
	echo "<pre>";	
	print_r($array);
	die();
}


function jdie($array = []){
	header('Content-Type: application/json');
	die(json_encode($array));
}

function bower($file=''){
	return './bower_components/'.$file;
}

?>