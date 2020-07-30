---
layout: customize
title: Customize - Banner
---

<br>

{% assign type = 'banner' %}
{% assign src = site.data.session.websites[0].banner %}

{% if src != nil  %}
{% assign style = 'height: 40px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}

{% if src %}
<img src="{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}

{% if show_delete_button %}
<div class="mdl-card__menu">
    <a href="/customize/reset/{{ type }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}