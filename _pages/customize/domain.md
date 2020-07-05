---
layout: customize
title: Customize - Domain
---

<p>
    With the power of Rime publications, you can create a unique home for your brand and reach millions of our engaged readers directly.
</p>
<p>
    As part of your unique publication, you can create a custom domain for all your content to live under. It includes your domain setup, an SSL certificate, and ongoing support of your domain on Rime, all covered by a one-time payment.
</p>

<p>
    Point your DNS A record to <b>34.207.28.189</b>
</p>

<p>
    <small>To learn more, visit our <a href="{{ site.url }}/support/faq" target="_blank">frequently asked questions</a> and our <a href="{{ site.url }}/legal/terms" target="_blank">terms of service</a>. Otherwise, you can always use your default URL {{ site.url }}/{{ site.data.session.username }} free of charge.</small>
</p>

{% if site.data.session.weblog.suvozit.domain %}
<!-- Icon button -->
<a href="{{ site.url }}/customize/reset/domain" class="mdl-button mdl-js-button mdl-button--icon pull-right">
    <i class="material-icons">delete_forever</i>
</a>
{% endif %}

<form>

{% include form/input.html id="domain" value=site.data.session.weblog.suvozit.domain label="Domain" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>