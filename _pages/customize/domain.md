---
layout: customize
title: Customize - Domain
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Domain</h2>
</div>

<div class="mdl-card__supporting-text">

<p>
    With the power of Rime publications, you can create a unique home for your brand and reach millions of our engaged readers directly.
</p>
<p>
    As part of your unique publication, you can create a custom domain for all your content to live under. It includes your domain setup, an SSL certificate, and ongoing support of your domain on Rime, all covered by a one-time payment.
</p>

<p>
    Point your DNS A record to <b>34.207.28.189</b>
</p>

<p>
    <small>To learn more, visit our <a href="/support/faq" target="_blank">frequently asked questions</a> and our <a href="/legal/terms" target="_blank">terms of service</a>. Otherwise, you can always use your default URL {{ site.url }}/{{ site.data.session.username }} free of charge.</small>
</p>

<form>

{% assign default = site.data.session.websites[0] %}
{% include form/input.html id="domain" value=default.domain label="Domain" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>

{% if site.data.session.websites[0].domain %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}

</div>