---
layout: settings
title: Settings - Deactivate
---

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Delete account</h2>
</div>

<div class="mdl-card__supporting-text">

<p>Permanently delete your account and all of your content.</p>

<form>

{% include form/checkbox.html id="agreement" label="I agree" %}

<br>
<br>

<br>

<!-- Accent-colored raised button with ripple -->
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="/auth/sign-out">
    Delete
</a>

</form>

</div>