---
title: Newsletters
layout: email
---

<!-- LIST -->

<ol>
	{% for n in site.newsletters limit:33 %}
	{% if n.url contains 'index' %}
	<!-- {{ n.title }} -->
    {% else %}
    <li>
		<a href="{{ n.url }}">{{ n.title }}</a>
	</li>

	<code>{{ n.date | date: "%A %d %b'%y" }}</code>
	{% for tag in n.tags %}#{{ tag }} {% endfor %}

	{% endif %}
	{% endfor %}
</ol>