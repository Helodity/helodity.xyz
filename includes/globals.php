<?php
//Contains definition for $PATH_FROM_ROOT
include_once "deployment_globals.php";

$SITE_NAME = "Helodity's Hot Garbage";
$SITE_ROOT = 'https://' . $_SERVER['HTTP_HOST'] . $PATH_FROM_ROOT; //Use when outputting HTML;
$LOCAL_ROOT = $_SERVER['DOCUMENT_ROOT'] . $PATH_FROM_ROOT; //Use when processing
?>
