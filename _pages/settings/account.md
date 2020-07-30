---
layout: settings
title: Settings - Account
---

<div class="mdl-card__supporting-text">
<form>

{% include form/input.html id="name" value=site.data.session.name label="Name" %}
{% include form/textarea.html id="bio" value=site.data.session.bio label="Bio" %}
{% include form/input.html id="location" value=site.data.session.location label="Location" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>