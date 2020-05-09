---
---

form_open uri_string_q() 


 {% include settings/notifications_options.html id = notification %}

 {% include settings/notifications_options.html id = tips %}
 {% include settings/notifications_options.html id = newsletter %}
 {% include settings/notifications_options.html id = announcement %}

<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Save Changes
</button>

form_close