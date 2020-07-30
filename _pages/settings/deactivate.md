---
layout: settings
title: Settings - Deactivate
---

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Deactivate account</h2>
</div>

<div class="mdl-card__supporting-text">

<p>Deactivating your account will remove it from Rime within a few minutes. You can sign back in anytime to reactivate your account and restore its content.</p>

<form>

{% include form/checkbox.html id="agreement" label="I agree" %}

<br>
<br>

<br>

<!-- Accent-colored raised button with ripple -->
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="/auth/sign-out">
    Deactivate
</a>

</form>

</div>