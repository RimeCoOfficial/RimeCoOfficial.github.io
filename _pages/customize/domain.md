---
layout: customize
# permalink: customize
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
    <small>To learn more, visit our <a href="{{ site.baseurl }}/support/faq" target="_blank">frequently asked questions</a> and our <a href="{{ site.baseurl }}/legal/terms" target="_blank">terms of service</a>. Otherwise, you can always use your default URL (HTTPS://rime.co/weblog/<a class="mdl-color-text--black" href="{{ site.baseurl }}//weblog/'.$logged_in_user['username']" target="_blank">{{ site.data.logged_in_user.username }}</a>) free of charge.</small>
</p>

{% if weblog.domain %}
    <!-- Icon button -->
    <a href="{{ site.baseurl }}/customize/remove-domain" class="mdl-button mdl-js-button mdl-button--icon pull-right">
        <i class="material-icons">delete_forever</i>
    </a>
{% endif %}

form_open uri_string_q() 

<?php
$this->view('form/input', array('id' => 'domain', 'value' => $weblog['domain']));
?>

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Change
</button>

form_close