<?php
	$PAGE_NAME = "Blog";
	include '../includes/header.php';
?>

<div class="blog-container">
    <?php include 'includes/history.php'; ?>
	<div class="center-bar">
		<?php
			$files = glob($LOCAL_ROOT . "/blog/pages/*.html");
			foreach($files as $txt) {
				$doc = new DomDocument;
				libxml_use_internal_errors(true);
				$doc->loadHTML(file_get_contents($txt));
				libxml_clear_errors();
				$titleElem = $doc->getElementById('title');
				$dateElem = $doc->getElementById('date');
				$summaryElem = $doc->getElementById('summary');
				$baseName = basename($txt, ".html");
				if(!$titleElem) {
					continue;
				}
				?>
			<div class="blog-entry">
				<p class="blog-date"><?=$dateElem->nodeValue?></p>
				<h2><?=$titleElem->nodeValue?></h2>
				<div>
					<?=$summaryElem->nodeValue?>
				</div>
				<button class="button-main" onclick="location.href ='<?= $SITE_ROOT ?>/blog/page.php?title=<?=$baseName?>'">Read more!</button>
			</div>
		<?php
			}
		?>
	</div>
</div>

<?php include '../includes/footer.php'; ?>