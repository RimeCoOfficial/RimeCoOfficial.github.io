---
layout: apps
title: Apps
---

{% assign service = page.url | split: "/" | last %}

<style type="text/css">
    .demo-card-square > .mdl-card__title {
        height: 200px;
        background:
            url('{{ site.url }}/assets/images/social-icon-{{ service | downcase }}.svg') center center no-repeat #FFF;
    }
</style>

<div class="mdl-card__title mdl-card--expand">
   <!-- <h3 class="mdl-card__title-text">{{ service_name }}</h3> -->
</div>

{% assign launch = 0 %}
{% if launch == 0 %}
<div class="mdl-card__actions">
    <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ site.url }}/apps">
        <i class="material-icons">arrow_back</i>
    </a>

    <button class="service-popup mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent pull-right" href="{{ site.url }}/{{ site.data.oauth.path_base }}/service">
        Authorize new account <i class="material-icons">launch</i>
    </button>
</div>

{% include apps/actor_list.html %}
{% else %}

{% assign oauth_id = "this->session->tempdata('oauth_id')" %}

<div id="get_actor_list_{{ oauth_id }}">
    <!-- MDL Progress Bar with Indeterminate Progress -->
    <div class="mdl-progress mdl-js-progress mdl-progress__indeterminate full-width"></div>
    <script type="text/javascript"> $('#get_actor_list_{{ oauth_id }}').load('{{ site.base_url }}/apps/get-actor-list/{{ oauth_id }}'); </script>
</div>

<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ site.url }}/apps">
        <!-- try again <i class="material-icons">refresh</i> -->
        <i class="material-icons">arrow_back</i>
    </a>
</div>
{% endif %}