---
layout: customize
title: Customize - Icon
---

<div class="mdl-card__supporting-text">
<br>

{% assign src = site.data.session.websites[0].icon %}

{% if src != nil  %}
{% assign style = 'height: 100px;' %}
{% assign show_delete_button = 1 %}
{% endif %}

{% assign text = 'This works like a user icon and appears in previews of your publication content throughout Rime. It is square and should be at least 200 × 200px in size.' %}

{% if src %}
<img src="{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}

</div>

{% if show_delete_button %}
<div class="mdl-card__menu">
    <a id="delete_forever" href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">delete_forever</i>
    </a>
</div>
{% endif %}