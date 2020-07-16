---
layout: default
title: Demo
---

{% assign sign_in_apps = '' %}
{% for app in site.data.apps %}
{% if app.sign-in %}
{% assign sign_in_apps = sign_in_apps | append: app.name | downcase | append: "," %}
{% endif %}
{% endfor %}

{% assign slice = sign_in_apps.size | minus: 1 %}
{% assign sign_in_apps = sign_in_apps | slice: 0, slice | split: "," %}

<script>
    var sign_in_options = ['{{ sign_in_apps | join: "', '"}}']
    var random_number = Math.floor(Math.random() * 3);  // returns a random integer from 0 to 2
    
    window.location = "/auth/" + sign_in_options[ random_number ];
</script>