---
layout: inbox
title: Unread
---

<style>
.mdl-card__title {
  color: #fff;
  background:
    url('/assets/third-party/getmdl.io/dog.png') bottom right 15% no-repeat #DA2E75;
}
</style>

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Activities</h2>
</div>

<div class="mdl-card__actions">
    <!-- <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/apps">
        <i class="material-icons">arrow_back</i>
    </a> -->
    <!-- <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
    <input type="checkbox" id="switch-2" class="mdl-switch__input">
    <span class="mdl-switch__label"></span>
    </label> -->
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="#">
        Mark all read
    </button>
</div>


{% assign activities = site.data.activities %}
{% assign activities_count = activities | size %}

{% if activities_count == 0 %}
<div class="mdl-card__supporting-text">
    <p><em>No activities found</em></p>
</div>
{% else %}
<ul class="demo-list-two mdl-list">
    {% for activity in activities %}
    {% if activity.unread %}
    <li class="mdl-list__item mdl-list__item--two-line {% if activity.unread %} mdl-color--grey-100 {% endif %}">
        <span class="mdl-list__item-primary-content">
            <!-- <i class="material-icons mdl-list__item-avatar" style="font-size: 22px; background-color: transparent; color: #757575;">{{ activity.icon }}</i> -->
            {% if activity.type == "system" %}
            <img class="mdl-list__item-avatar" src="/assets/images/logo-share-black.png">
            {% else %}
            <img class="mdl-list__item-avatar" src="{{ site.data.session.avatar }}">
            {% endif %}
            <span>{{ activity.title }}</span>
            <span class="mdl-list__item-sub-title">{{ activity.description }}</span>
        </span>
        <span class="mdl-list__item-secondary-content">
        <time class="mdl-list__item-secondary-info dateDisplay" datetime="{{ activity.date | date: "%Y%m%d" }}"></time>
        {% if activity.url %}
        <a class="mdl-list__item-secondary-action" href="{{ activity.url }}"><i class="material-icons">{{ activity.icon }}</i></a>
        {% endif %}
        </span>
    </li>
    {% endif %}
    {% endfor %}
</ul>
{% endif %}

<div class="mdl-card__menu">
    <a id="chat" class="mdl-button mdl- mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--white" href="/inbox">
        <i class="material-icons">chat</i>
    </a>
</div>

{% include js/moment.html %}