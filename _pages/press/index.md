---
title: Press
layout: press
---

<h1 class="mdl-typography--font-light">Press Releases</h1>

<h4>Contact Us</h4>
<p>
    If you'd like to write a story about Rime, please get in touch!
    Are you a journalist? Let us know if you're interested in getting occasional press-related news. <a href="mailto:press@{{ site.url | remove: "https://"  | remove: "http://" }}?subject=Press">press@{{ site.url | remove: "https://"  | remove: "http://" }}</a>
</p>

{% for article in site.data.articles.recent %}
<h4 class="mdl-typography--font-light">{{ article.title }}</h4>
<p>
    <a href="{{ article.url }}" target="_blank">{{ article.published }}</a>
    {{ article.author }}, {{ article.org }}
</p>
{% endfor %}