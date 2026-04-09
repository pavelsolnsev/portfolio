<header class="head">
	<div class="head__title loving-title _h1"><?= htmlspecialchars($head_role_title, ENT_QUOTES, 'UTF-8') ?></div>
	<div class="head__langs">
		<a href="#" class="head__lang ru<?= $lang === 'ru' ? ' _current' : '' ?>" data-set-lang="ru" role="button">РУ</a>
		<a href="#" class="head__lang en<?= $lang === 'en' ? ' _current' : '' ?>" data-set-lang="en" role="button">EN</a>
	</div>
</header>