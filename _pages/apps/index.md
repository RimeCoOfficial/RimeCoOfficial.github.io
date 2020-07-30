---
layout: apps
title: Apps
---

<br>
<ul class="demo-list-three mdl-list">
    {% for s in site.data.apps %}
    {% assign s_class = "" %}
    {% if service_status_list.s_class == 0 %}
    {
        <!-- no account connected -->
        {% assign icon_color = "mdl-button--accent" %}
        {% assign icon = "add" %}
    }
    {% else if service_status_list.s_class < 400 %}
        <!-- all sytem OK -->
        {% assign icon_color = "mdl-button--colored" %}
        {% assign icon = "arrow_forward" %}
    {% else %}
        <!-- warning: required attention -->
        {% assign icon_color = "" %}
        {% assign icon = "error_outline" %}
    {% endif %}
    <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
        <!-- <i class="material-icons mdl-list__item-avatar">person</i> -->
        <i class="mdl-list__item-avatar mdl-list__item-icon {{ s.kind[0].icon }}"
        style="line-height: 1.4; font-size: 28px; background-color: transparent; color: #757575;"
        ></i>
        <span>{{ s.name }}</span>
        <span class="mdl-list__item-text-body">{{ s.detials }}</span>
        </span>
        <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action mdl-button mdl-js-button {{ icon_color }} mdl-button--icon" href="/apps/add/{{ s.name | downcase }}">
                <i class="material-icons">{{ icon }}</i>
            </a>
        </span>
    </li>
    {% endfor %}   
</ul>

<div class="mdl-card__menu">
<a id="warning" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="/inbox/invite">
    <i class="material-icons">warning</i>
</a>
</div>