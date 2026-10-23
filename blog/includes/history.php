<div class="side-bar">
	<div class="history-bar">
		<h3 style="text-align:center">History</h3>
		<?php
			$files = glob($LOCAL_ROOT . "/blog/pages/*.html");
			foreach($files as $txt) {
				$doc = new DomDocument;
				libxml_use_internal_errors(true);
				$doc->loadHTML(file_get_contents($txt));
				libxml_clear_errors();
				$titleElem = $doc->getElementById('title');
				if(!$titleElem) {
					continue;
				}
				$baseName = basename($txt, ".html");
				?>
			<p>• <a href="<?= $SITE_ROOT ?>/blog/page.php?title=<?=$baseName?>"><?=$titleElem->nodeValue?></a></p>
		<?php
			}
		?>
	</div>
</div>