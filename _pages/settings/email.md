---
layout: settings
title: Settings - Email
---


Your email address <strong>{{ site.data.session.email }}</strong> will be used for account-related notifications (e.g. account changes, contacts joined)<br>

{% if site.data.session.verified == false %}
<i class="icon-warning"></i> Verify your email, <a href="/email/verify">resend verification</a>
{% endif %}

<i id="info_outline" class="material-icons md-24 pull-right">info_outline</i>
Looking for activity notification controls?<br>

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