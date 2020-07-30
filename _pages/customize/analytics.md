---
layout: customize
title: Customize - Analytics
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Analytics</h2>
</div>

<div class="mdl-card__supporting-text">

{% assign default = site.data.session.websites[0] %}

<p><b>Google Analytics</b> lets you measure your advertising ROI as well as track your Flash, video, and social networking sites and applications.</p>

<form>

{% include form/input.html id="analytics" value=default.analytics label="Analytics" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>

{% if site.data.session.websites[0].analytics %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}

</div>