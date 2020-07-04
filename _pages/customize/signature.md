---
layout: customize
title: Customize - Signature
---

{% assign type = 'signature' %}
{% assign src = site.data.logged_in_user.weblog.suvozit.signature %}

{% if src != nil  %}
{% assign style = 'height: 40px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}

{% if show_delete_button %}
<!-- Icon button -->
<a href="{{ site.url }}/customize/reset/{{ type }}" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

{% if src %}
<img src="{{ site.url }}/{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}