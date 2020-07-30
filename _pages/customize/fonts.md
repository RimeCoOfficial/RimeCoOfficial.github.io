---
layout: customize
title: Customize - Fonts
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Fonts</h2>
</div>

<div class="mdl-card__supporting-text">

{% assign default = site.data.session.websites[0] %}

{% assign src = default.icon %}

{% if src != nil  %}
{% assign style = 'height: 40px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family={{ default.font.primary }}&family={{ default.font.secondary }}">
<div style="font-family: '{{ default.font.primary }}', serif; font-size: 28px; line-height: 1.5; margin-bottom: 10px;">{{ site.data.session.name }}</div>
<div style="font-family: '{{ default.font.secondary }}', serif; font-size: 18px; line-height: 1.5;">{{ site.data.session.bio }}</div>

<br>

{% include form/select.html id='font' %}

</div>

{% if show_delete_button %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}

</div>