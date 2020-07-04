---
layout: settings
title: Settings - Avatar
---

{% assign src = site.data.logged_in_user.avatar %}
{% assign style = 'height: 500px;' %}
{% assign text = 'This works like a user icon and appears in previews of your publication content throughout Rime. It is square and should be at least 200 × 200px in size.' %}


{% if src %}
<img class="bg-cover img-circle" style="background-image: url({{ site.url }}/{{ src }})" width="200px" height="200px" src="{{ site.url }}/assets/images/blank.png">
<br>
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}