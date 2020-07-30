---
layout: settings
title: Settings - Username
---

<div class="mdl-card__supporting-text">
<p>{{ site.url }}/@<strong>{{ site.data.session.username }}</strong></p>

<form></form>

<form>

{% include form/input.html id="username" label="Username" value=site.data.session.username %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>