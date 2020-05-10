---
layout: service
title: Add
---

{% assign service = "facebook" %}

<style type="text/css">
    .demo-card-square > .mdl-card__title {
        height: 200px;
        background:
            url('{{ site.baseurl }}/assets/images/social-icon-{{ service }}.svg') center center no-repeat #FFF;
    }
</style>

<div class="mdl-card__title mdl-card--expand">
   <!-- <h3 class="mdl-card__title-text">{{ service_name }}</h3> -->
</div>

{% assign launch = 0 %}
{% if launch == 0 %}
<div class="mdl-card__actions">
    <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ site.baseurl }}/services">
        <i class="material-icons">arrow_back</i>
    </a>

    <button class="service-popup mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent pull-right" href="{{ site.baseurl }}/oauth_path_base/service">
        Authorize a new account <i class="material-icons">launch</i>
    </button>
</div>

{% include services/actor_list.html %}
{% else %}

{% assign oauth_id = "this->session->tempdata('oauth_id')" %}

<div id="get_actor_list_{{ oauth_id }}">
    <!-- MDL Progress Bar with Indeterminate Progress -->
    <div class="mdl-progress mdl-js-progress mdl-progress__indeterminate full-width"></div>
    <script type="text/javascript"> $('#get_actor_list_{{ oauth_id }}').load('{{ site.base_url }}/services/get-actor-list/{{ oauth_id }}'); </script>
</div>

<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ site.baseurl }}/services">
        <!-- try again <i class="material-icons">refresh</i> -->
        <i class="material-icons">arrow_back</i>
    </a>
</div>
{% endif %}

{% include js/service_popup.html %}