---
layout: customize
title: Customize - Template
---

<div class="mdl-card__supporting-text">
    Upload Custom

    {% include form/upload.html id='userfile' %}
</div>

<!-- Templates -->

<div class="mdl-card__supporting-text">
    {% include form/search.html %}

    Most frequently used
</div>

<ul class="demo-list-three mdl-list">
    {% for template in site.data.templates %}
    <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-avatar">rss_feed</i>
            <span>{{ template.title }}</span>
            <span class="mdl-list__item-text-body">
            {{ template.description }}
            </span>
        </span>
        <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">visibility</i></a>
        </span>
    </li>
    {% endfor %}
</ul>