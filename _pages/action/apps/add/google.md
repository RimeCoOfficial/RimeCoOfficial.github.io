---
layout: action
---

{% assign app = page.url | split: "/" | last %}

{% assign query = "?" %}
{% assign query = query | append: "client_id=" | append: site.data.oauth[app].client_id %}
{% assign query = query | append: "&redirect_uri=" | append: site.url | append: site.data.oauth.redirect_url | append: app %}

<!-- construct authorize url -->
{% assign authorize_url = site.data.oauth[app].authorize_url | append: query %}

<script type="text/javascript">
    window.location = "{{ authorize_url }}";
</script>