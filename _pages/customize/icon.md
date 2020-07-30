---
layout: customize
title: Customize - Icon
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Icon</h2>
</div>

<div class="mdl-card__supporting-text">

{% assign src = site.data.session.websites[0].icon %}

{% if src != nil  %}
{% assign style = 'height: 100px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This works like a user icon and appears in previews of your publication content throughout Medium. It is square and should be at least 60 × 60px in size.' %}

{% if src %}
<img src="{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='upload' name='userfile' label='Add Image' %}

</div>

{% if show_delete_button %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}

</div>