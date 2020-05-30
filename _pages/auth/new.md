---
layout: auth
title: Create new account
---

<div class="mdl-card__supporting-text">

<!-- If you already have an account, use that account to <a href="{{ site.url }}/auth/sign-in">sign in</a>. -->


{% assign invited_by_username = get_cookie %}
{% if invited_by_username %}
<strong>You are invited by:</strong> <code>@{{ invited_by_username }}</code>
{% endif %}


{% assign username = site.data.logged_in_user.username %}
{% if username %}
{% assign username = username | replace: " ", "" | replace: ".", "" %}
{% endif %}

<form>

{% include form/input.html id="name" value=site.data.logged_in_user.name label="Name" %}
{% include form/input.html id="email" value=site.data.logged_in_user.email label="Email" %}

<!-- Bug: alpha_dash only allowed, dots are removed -->
{% include form/input.html id="username" value=username label="Username" %}

<br>
<br>
<br>

Click create account to agree to the <a href="{{ site.url }}/legal/terms" target="_blank">services agreement</a> and <a href="{{ site.url }}/legal/privacy" target="_blank">privacy</a><br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-button--raised mdl-button--accent mdl-js-button mdl-js-ripple-effect" type="submit">
    Create Account
</button>

</form>

</div>