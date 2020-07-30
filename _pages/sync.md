---
title: Sync
layout: sync
---

<div class="mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Overview</h2>
</div>

<!-- {% include js/chart_treemap.html %} -->
{% include js/chart_line.html %}

<div class="mdl-card__supporting-text">
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Object</th>
      <th>Count</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Apps</td>
      <td>{{ site.data.session.apps | size }}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Actors</td>
      {% assign total_actor_count = 0 %}
      {% for app in site.data.session.apps %}
      {% for oauth_list in app %}
      {% for oauth in oauth_list %}
      {% for actor in oauth.actors %}
      {% if actor.user == site.data.session.username %}
      {% assign total_actor_count = total_actor_count | plus: 1 %}
      {% endif %}
      {% endfor %}
      {% endfor %}
      {% endfor %}
      {% endfor %}
      <td>{{ total_actor_count }}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Websites</td>
      <td>{{ site.data.session.websites | size }}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Posts</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Likes</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Comments</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Topics</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Collection</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Places</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">About</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="mdl-card mdl-cell mdl-cell--5-offset-desktop mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Places</h2>
</div>

<!-- ![]({{ site.data.session.places }}) -->

{% include js/chart_geo.html %}

<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
        View locations
    </a>
</div>
</div>

<div class="mdl-card mdl-cell mdl-cell--5-offset-desktop mdl-cell--6-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Bandwidth</h2>
</div>

{% include js/chart_pie.html %}

<div class="mdl-card__supporting-text">
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Website</th>
            <th>GB Usage</th>
        </tr>
    </thead>
    <tbody>
        {% for website in site.data.session.websites %}
        <tr>
            <td class="mdl-data-table__cell--non-numeric">{{ website.title }}</td>
            <td>{{ website.bandwidth }}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
</div>