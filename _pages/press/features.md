---
title: Features
layout: press
---

<h1 class="mdl-typography--font-light">Features</h1>

- Embed URLs
- Thumbnail Cached
- Refresh
- Reposts merged
- Cache
- Real-time Sync
- Post (Title, Description and Body)
- SEO (AMP, Schema and Social Tags)
- Google analytics (Events and Tag manager)
- Collection
- Topics
- Search
- RSS (Posts, Collection and Topics)
- Random
- About (Life events and Institutions - school, work, places)
- Places
- Custom Domain
- Upload Template
- Customize PNG, JPG, GIF (Icon and Banner)

<h4>Services</h4>

<ol>
{% for app in site.data.apps %}
<li>
<i class="{{ app.icon }}"></i> {{ app.name }}

{% assign kind_count = app.kind | size %}
{% if kind_count > 1 %}
<ul>
{% for k in app.kind %}
<li><i class="{{ k.icon }}"></i> {{ k.name }}</li>
{% endfor %}
</ul>
{% endif %}
</li>
{% endfor %}
</ol>

<h4>Collections</h4>

<ol>
{% for collection in site.data.collection %}
<li><i class="material-icons md-18" style="width: 20px; line-height: 1;">{{ collection.icon }}</i> {{ collection.name }}</li>
{% endfor %}
</ol>