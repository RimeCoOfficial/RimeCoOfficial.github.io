---
layout: customize
title: Customize - Fonts
---

{% assign src = site.data.logged_in_user.weblog.suvozit.icon %}

{% if src != nil  %}
{% assign style = 'height: 40px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}

{% if show_delete_button %}
<!-- Icon button -->
<a href="{{ site.url }}/customize/reset/fonts'.{{ type }}" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family={{ site.data.logged_in_user.weblog.suvozit.font.primary }}&family={{ site.data.logged_in_user.weblog.suvozit.font.secondary }}">
<div style="font-family: '{{ site.data.logged_in_user.weblog.suvozit.font.primary }}', serif; font-size: 28px; line-height: 1.5; margin-top: 10px;">{{ site.data.logged_in_user.name }}</div>
<div style="font-family: '{{ site.data.logged_in_user.weblog.suvozit.font.secondary }}', serif; font-size: 16px; line-height: 1.5; margin-top: 10px;">{{ site.data.logged_in_user.bio }}</div>

<br>

{% include form/select.html id='font' %}