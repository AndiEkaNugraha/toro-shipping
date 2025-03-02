<ul class="main-menu__list">
	<?php foreach ($menu as $item):
		if ($item->is_active == 0 || $item->showInNavbar == 0) continue;
		?>
		<li>
			<a href="<?= $item->seo_page??"" ?>"><?= $item->pageName??"" ?></a>
		</li>
	<?php endforeach; ?>
</ul>