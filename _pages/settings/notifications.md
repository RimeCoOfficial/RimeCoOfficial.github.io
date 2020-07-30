---
layout: settings
title: Settings - Notification
---

<div class="mdl-card__supporting-text">
<form>

{% include form/checkbox.html id="notification" value=site.data.session.email_subscription.notification label="Notification" %}
{{ site.data.unsubscribe.notification }}
<br>
<br>
{% include form/checkbox.html id="tips" value=site.data.session.email_subscription.tips label="Tips" %}
{{ site.data.unsubscribe.tips }}
<br>
<br>
{% include form/checkbox.html id="newsletter" value=site.data.session.email_subscription.newsletter label="Newsletter" %}
{{ site.data.unsubscribe.newsletter }}
<br>
<br>
{% include form/checkbox.html id="announcement" value=site.data.session.email_subscription.announcement label="Announcement" %}
{{ site.data.unsubscribe.announcement }}
<br>
<br>

<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>
</div>