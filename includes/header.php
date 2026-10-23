<?php
include_once("globals.php");

$PAGE_NAME = isset($PAGE_NAME) ? $PAGE_NAME : "ERROR: PAGE NAME NOT SET";
$header_info = [
		["name" => "Home", "link" => ""],
		["name" => "Projects", "link" => "projects"],
		["name" => "Blog", "link" => "blog"],
	];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
		<title><?= $SITE_NAME ?></title>
		<link href='<?= $SITE_ROOT ?>/includes/main_style.css' type="text/css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet" />
		<link rel="icon" type="image/x-icon" href='<?= $SITE_ROOT ?>/img/icon.png'>
	</head>
	<body>
		<div class="header">
			<div>
				<p class="header-title"><?= $SITE_NAME ?></p>
				<p class="header-subtitle slide-in-left"><?= $PAGE_NAME ?></p>
			</div>
			<div class="header-button-group">
				<?php foreach($header_info as $btn_info) { ?>
					<button class="button-header" onclick="location.href ='<?= $SITE_ROOT . '/' . $btn_info["link"]?>'">
					<?=$btn_info["name"]?>
					</button>
				<?php } ?>
			</div>
		</div>
		<?php include __DIR__ . "/background.php" ?>
		<main>