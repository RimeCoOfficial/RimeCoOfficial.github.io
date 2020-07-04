---
layout: customize
title: Customize - Fonts
---

{% if src == nil  %}
{% assign style = 'height: 40px;' %}
{% assign src = 'assets/weblog/1-logo.png' %}
{% else %}
{% assign src = 's3_bucket_url' %}
{% assign show_delete_button = true %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}

{% if show_delete_button %}
<!-- Icon button -->
<a href="{{ site.url }}/customize/remove-image/'.{{ type }}" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family={{ site.data.logged_in_user.font.primary }}&family={{ site.data.logged_in_user.font.secondary }}">
<div style="font-family: '{{ site.data.logged_in_user.font.primary }}', serif; font-size: 24px; line-height: 1.5; margin-top: 10px;">Making the Web Beautiful!</div>
<div style="font-family: '{{ site.data.logged_in_user.font.secondary }}', serif; font-size: 18px; line-height: 1.5; margin-top: 10px;">Making the Web Beautiful!</div>

<br>

{% include form/select.html id='font' %}