---
layout: inbox
title: Invite
---

{% assign invites = site.data.invites.sent %}
{% assign invites_count = invites | size %}
{% assign min_invites = site.data.invites.min %}

<style>
.mdl-card__title {
    background: url('/assets/images/invite.png') center / cover;
}
</style>

<div class="mdl-card__title">
    <h2 class="mdl-card__title-text">
        Invites sent ({{ invites_count }}/{{ min_invites }})
    </h2>
</div>

<div class="mdl-card__supporting-text">

<p>
    <strong>Share your invite Code</strong> {{ site.url }}?invited_by={{ site.data.session.username }}
</p>

{% if invites_count == 0 %}
<p><em>No people found.</em></p>
{% else %}
<ul>
{% for email in invites %}
<li>{{ email }}</li>
{% endfor %}
</ul>
{% endif %}

</div>

<div class="mdl-card__actions mdl-card--border">
    <a id="show-dialog" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
        Invite
    </a>
</div>

<div class="mdl-card__menu">
<a id="preview" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="/email/invite" target="_blank">
    <i class="material-icons">visibility</i>
</a>
</div>