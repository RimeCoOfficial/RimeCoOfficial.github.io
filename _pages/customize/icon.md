---
layout: customize
---

{% if src == nil  %}
{% assign style = 'height: 40px;' %}
{% assign src = 'assets/images/glyph.svg' %}
{% else %}
{% assign src = 's3_bucket_url' %}
{% assign show_delete_button = true %}
{% endif %}

{% assign text = 'This works like a user icon and appears in previews of your publication content throughout Rime. It is square and should be at least 64 × 64px in size.' %}

{% if show_delete_button %}
<!-- Icon button -->
<a href="{{ site.baseurl }}/customize/remove-image/'.{{ type }}" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

{% if src %}
<img src="{{ site.url }}/{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
{% endif %}

<p>{{ text }}</p>

{% include form/upload.html id='userfile' %}