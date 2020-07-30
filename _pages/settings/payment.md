---
layout: settings
title: Settings - Payment
---

<form>

{% include form/input.html id="card" value=site.data.session.payment.card label="Card" %}
{% include form/input.html id="name" value=site.data.session.payment.name label="Name" %}
{% include form/input.html id="expiry" value=site.data.session.payment.expiry label="Expiry" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>