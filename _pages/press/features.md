---
title: Features
layout: press
---

<h1 class="mdl-typography--font-light">Features</h1>

- Embed url
- Auto Thumbnail (Images Cached, positioned, repetation removed [via giphy])
- Cross-post (canonical + title, match in a while)
- Refresh
- Repost
- Cache
- Real time
- Title, description, body
- SEO (AMP, Schema, Social Tags)
- Analytics (Google analytics, events, tag manager)
- Collection
- Topics
- Search
- RSS (all, collection, topics)
- Random
- About (life events, institutions - school, work, places)
- Places
- Contact (Notification, Invite)
- Custom Domain
- PNG, JPG, GIF (logo, name, title)

<h4>Services</h4>

<ol>
{% for app in site.data.apps %}
<li><i class="{{ app.kind[0].icon }}"></i> {{ app.name }}</li>
{% endfor %}
</ol>

<h4>Collections</h4>

<ol>
{% for collection in site.data.collection %}
<li><i class="material-icons md-18" style="width: 20px; line-height: 1;">{{ collection.icon }}</i> {{ collection.name }}</li>
{% endfor %}
</ol>