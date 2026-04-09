<section id="about" data-key="about" class="loving-section about">
	<h1 class="loving-title _h2"><span class="loving-title__inside">
			<?= $loving_title ?>
		</span></h1>
	<div class="about__main">
		<img class="about__photo" alt="<?= htmlspecialchars($loving_title, ENT_QUOTES, 'UTF-8') ?>" src="img/about/pavel.jpg" decoding="async" />
		<ul class="about__list">
			<li class="about__item _date">22<span class="about__slash">/</span>12<span class="about__slash">/</span>1990</li>
			<li class="about__item _city"><?= $about__item?></li>
			<li class="about__item _phone"><a href="tel:+79166986185" class="about__phone">+7 (916) 698-61-85</a></li>
			<li class="about__item _mail"><a href="mailto:pavelsolnsev@gmail.com" class="about__phone">pavelsolnsev@gmail.com</a></li>
			<li class="about__item _socials">
				<a href="https://t.me/pavelsolnsev" target="_blank" rel="noopener noreferrer" class="about__link _tg" title="Telegram">Telegram</a>
				<a href="https://vk.com/id7895483" target="_blank" rel="noopener noreferrer" class="about__link _vk" title="VKontakte">VKontakte</a>
				<a href="<?= htmlspecialchars($about_max_url, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="about__link _max" title="<?= htmlspecialchars($about_max_title, ENT_QUOTES, 'UTF-8') ?>">MAX</a>
			</li>
		</ul>
	</div>
	<div class="about__education education">
		<h3 class="education__title loving-title _h3"><?=$education__title?></h3>
		<dl class="education__dl">
			<dt class="education__dt"><?= $education__dt_1 ?></dt>
			<dd class="education__dd"><a data-fancybox href="#diplom"><?= $education__dd_1 ?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt">wayup.in</dt>
			<dd class="education__dd"><a target="_blank" rel="noopener noreferrer" href="https://lab.pavelsolnsev.ru/wayup/Pavel_Solntsev_Alexandrovich.pdf"><?= $education__dd_2?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt">loftschool.com</dt>
			<dd class="education__dd"><a target="_blank" rel="noopener noreferrer" href="https://loftschool.com/diploma/BE38167122518/ru/pdf"><?= $education__dd_3?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt"><?= $education__dt_2?></dt>
			<dd class="education__dd"><?= $education__dd_4 ?></dd>
		</dl>
	</div>
</section>