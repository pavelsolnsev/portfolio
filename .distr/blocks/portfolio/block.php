{% from './data.njk' import data as portfolio %}
<section id="portfolio" data-key="portfolio" class="loving-section portfolio">
	<h2 class="portfolio__title loving-title _h2"><span class="loving-title__inside"><?= $title_inside ?></span></h2>
	{% for item in portfolio %}
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3">{{item.title | safe}}</h3>
		<div class="portfolio__list">
			{% for item in item.block %}
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/{{item.name | safe}}.png" alt="<?= htmlspecialchars($portfolio_img_alt_prefix, ENT_QUOTES, 'UTF-8') ?>{{ item.name | e }}" class="portfolio__image _m" loading="lazy" decoding="async">
					<img src="img/portfolio/{{item.name | safe}}.png" alt="<?= htmlspecialchars($portfolio_img_alt_prefix, ENT_QUOTES, 'UTF-8') ?>{{ item.name | e }}" class="portfolio__image _d" loading="lazy" decoding="async">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">{{item.name | safe}}</div>
					<div class="portfolio__links">
						<a href="https://{{item.link | safe}}/" target="_blank" rel="noopener noreferrer" class="portfolio__link">{{item.link | safe}}</a>
						<a href="https://github.com/pavelsolnsev/{{item.name | safe}}" target="_blank" rel="noopener noreferrer" class="portfolio__link"><br>Code: {{item.name | safe}}</a>
						{% if item.link2 %}
							<a href="https://{{ item.link2 | safe }}/" target="_blank" rel="noopener noreferrer" class="portfolio__link"><br>{{ item.link2 | safe }}</a>
						{% endif %}

						{% if item.link3 %}
							<a href="https://{{ item.link3 | safe }}/" target="_blank" rel="noopener noreferrer" class="portfolio__link"><br>{{ item.link3 | safe }}</a>
						{% endif %}
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							{{item.tags | safe}}
						</div>
					</div>
				</div>
			</div>
			{% endfor %}
		</div>
	</div>
	{% endfor %}
</section>

