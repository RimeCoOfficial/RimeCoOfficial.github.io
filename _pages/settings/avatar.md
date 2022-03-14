---
layout: settings
title: Settings - Avatar
---

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Your avatar</h2>
</div>

<div class="mdl-card__supporting-text">

{% assign src = site.data.session.avatar %}
{% assign style = 'height: 500px;' %}
{% assign text = 'This works like a user icon and appears in previews of your publication content throughout Rime. It is square and should be at least 200 × 200px in size.' %}


{% if src %}
<img class="bg-cover img-circle" style="background-image: url({{ src }})" width="200px" height="200px" src="/assets/images/blank.png">
<br>
{% endif %}

<p>{{ text }}</p>

{% include form/checkbox.html id="sync" value=site.data.session.sync_avatar label="Sync from apps data" %}

{% include form/upload.html id='userfile' name='userfile' label='Upload new avatar' %}

</div>