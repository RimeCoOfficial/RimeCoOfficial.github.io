---
layout: service
title: Service
---

{% assign min_invites = 3 %}

<div class="mdl-card__supporting-text">
    <!-- <strong><a href="{{ site.baseurl }}/people/invite">Invite</a>  {{ min_invites }} or more to add more than one service</strong><br> -->
    <!-- Add Facebook, Google or Microsoft account to sync contacts -->
    To add more than one service <a href="{{ site.baseurl }}/people/invite">Invite</a> at least {{ min_invites }} people <sup>+++</sup>
</div>

<ul class="demo-list-two mdl-list">
    {% for s in site.data.services %}
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

    <li class="mdl-list__item mdl-list__item--two-line">
        <span class="mdl-list__item-primary-content">
            <i class="mdl-list__item-icon {{ s.kind[0].icon }}"></i>
            <span>{{ s.name }}</span>
            <span class="mdl-list__item-sub-title">{{ s.detials }}</span>
        </span>
        <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action mdl-button mdl-js-button {{ icon_color }} mdl-button--icon" href="{{ site.baseurl }}/services/add">
                <i class="material-icons">{{ icon }}</i>
            </a>
        </span>
    </li>
    {% endfor %}   
</ul>
