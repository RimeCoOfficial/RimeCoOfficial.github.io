---
layout: settings
title: Settings - Deactivate
---

<p>Deactivating your account will remove it from Rime within a few minutes. You can sign back in anytime to reactivate your account and restore its content.</p>

<form>

{% include form/checkbox.html id="agreement" value=0 label="I understand" %}

<br>
<br>

<br>

<!-- Accent-colored raised button with ripple -->
<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="/auth/sign-out">
    Deactivate
</a>

</form>