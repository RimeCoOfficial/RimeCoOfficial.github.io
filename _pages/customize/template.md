---
layout: customize
title: Customize - Template
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Template</h2>
</div>

<div class="mdl-card__supporting-text">
    <p><b>Current Theme</b> {{ site.data.session.websites[0].template }}</p>

    {% include form/upload.html id='upload' name='userfile' label='Add .zip' %}
</div>

{% assign show_delete_button = 1 %}
{% if show_delete_button %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}

</div>

<!-- Templates -->

<div class="mdl-card mdl-cell mdl-cell--5-offset-desktop mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Store</h2>
</div>

<ul class="demo-list-three mdl-list">
    {% for template in site.data.templates %}
    <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
            <img class="material-icons mdl-list__item-avatar" style="border-radius: 0; background-color: transparent;" src="{{ template.image }}">
            <span>{{ template.title }}</span>
            <span class="mdl-list__item-text-body">
            {{ template.description | truncate: 50, "..." }}
            </span>
        </span>
        <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action" href="{{ template.url }}"><i class="material-icons">visibility</i></a>
        </span>
    </li>
    {% endfor %}
</ul>

<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/templates">
        View More
    </a>
</div>
</div>