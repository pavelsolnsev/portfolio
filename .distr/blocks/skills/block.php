{% from './data.njk' import data as skills %}
<section id="skills" data-key="skills" class="loving-section skills">
	<h2 class="skills__title loving-title _h2"><span class="loving-title__inside"><?= $skills__title?></span></h2>
	{% for item in skills %}
	<div class="skills__item _{{item.tag | safe}}"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">{{item.tag | safe}}</h3>
			<div class="skills__line">
				<span style="width:{{item.skills | safe}}%; background: {{item.color | safe}};"></span>
				<div class="skills__value">{{item.skills | safe}}%</div>
			</div>
		</div>
		<div class="skills__tags">
			{{item.tags | safe}}
		</div>
		<div class="skills__text">{{item.desc | safe}}</div>
	</div>
	{% endfor %}
</section>

