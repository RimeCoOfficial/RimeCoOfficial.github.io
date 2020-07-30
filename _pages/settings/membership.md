---
layout: settings
title: Settings - Membership
---

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Upgrade membership</h2>
</div>

<div class="mdl-card__supporting-text">
<p>Subscribe for unlimited access to the smartest writers and biggest ideas on Rime.</p>
<form>

{% include form/input.html id="card" value=site.data.session.payment.card label="Card" %}
{% include form/input.html id="name" value=site.data.session.payment.name label="Name" %}
{% include form/input.html id="expiry" value=site.data.session.payment.expiry label="Expiry" %}
{% include form/input.html id="cvv" label="CVV" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>