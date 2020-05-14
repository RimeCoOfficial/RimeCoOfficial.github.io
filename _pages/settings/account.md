---
layout: settings
---

<!-- view settings/profile_image -->

<!-- <br> -->

<form>

{% include form/input.html id="name" value=site.data.logged_in_user.name label="Name" %}
{% include form/textarea.html id="bio" value=site.data.logged_in_user.bio label="Bio" %}
{% include form/input.html id="location" value=site.data.logged_in_user.location label="Location" %}

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>