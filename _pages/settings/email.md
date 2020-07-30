---
layout: settings
title: Settings - Email
---

<div class="mdl-card__supporting-text">

<p>Your email address <strong>{{ site.data.session.email }}</strong> will be used for account-related notifications (e.g. account changes, contacts joined)</p>

{% if site.data.session.verified == false %}
<p><i class="icon-warning"></i> Verify your email, <a href="/email/verify">resend verification</a></p>
{% endif %}

<p>Looking for activity notification controls?</p>

<br>

<form action="/email/update">

{% include form/input.html id="user_email" value=site.data.session.new_email label="Email" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>

<div class="mdl-card__menu">
    <button id="info_outline" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
        <i class="material-icons">info_outline</i>
    </button>
</div>