<?php
	include '../includes/globals.php';
	$postTitle = isset($_GET['title']) ? $_GET['title'] : "";

	if(empty($postTitle)){
		die("om");
	}

	$html = file_get_contents($LOCAL_ROOT . "/blog/pages/" . $postTitle . ".html");
	$doc = new DomDocument;
	libxml_use_internal_errors(true);
	$doc->loadHTML($html);
	libxml_clear_errors();
	$titleElem = $doc->getElementById('title');

	$PAGE_NAME = $titleElem->nodeValue;
	include '../includes/header.php';
?>

<div class="blog-container">
    <?php include 'includes/history.php'; ?>
	<div class="center-bar">
		<?=$html?>
	</div>
</div>

<?php include '../includes/footer.php'; ?>