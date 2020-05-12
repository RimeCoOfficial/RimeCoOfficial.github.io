---
layout: customize
permalink: customize
---

{% if src == nil  %}
{% assign style = 'height: 40px;' %}
{% assign src = 'assets/images/logotype.svg' %}
{% else %}
{% assign src = 's3_bucket_url' %}
{% assign show_delete_button = true %}
{% endif %}

{% assign text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.' %}

{% if show_delete_button %}
<!-- Icon button -->
<a href="{{ site.baseurl }}/customize/remove-image/'.{{ type }}" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

{% if src %}
<img src="{{ site.baseurl }}/{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}