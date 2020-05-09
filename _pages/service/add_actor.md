---
---

<style type="text/css">
    .demo-card-square > .mdl-card__title {
        height: 200px;
        background:
            url('{{ site.baseurl }}/assets/images/social-icon-'.$service.'.svg') center center no-repeat #FFF;
    }
</style>

<div class="mdl-card__title mdl-card--expand">
   <!-- <h3 class="mdl-card__title-text">{{ service_name }}</h3> -->
</div>

<?php
$oauth_path_base = 'action/service/add';

if ($this->session->flashdata('flash_oauth_id') != TRUE)
{
    $this->config->load('service', TRUE);
    $service_order = $this->config->item('info', 'service');
    ?>

    <div class="mdl-card__actions">
        <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ site.baseurl }}/service">
            <i class="material-icons">arrow_back</i>
        </a>

        <button class="service-popup mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent pull-right" href="{{ site.baseurl }}/$oauth_path_base.'/'.$service">
            Authorize a new account <i class="material-icons">launch</i>
        </button>
    </div>

    <?php
    if (!empty($oauth_actor_list))
    {
        $this->view('service/actor_list', array('oauth_actor_list' => $oauth_actor_list));
    }
}
else
{
    $oauth_id = $this->session->tempdata('oauth_id');
    ?>

    <?php
    $key_id = 'get_actor_list_'.$oauth_id;
    $url = base_url('service/get-actor-list/'.$oauth_id);
    ?>

    <div id="{{ key_id }}">

        <!-- MDL Progress Bar with Indeterminate Progress -->
        <div class="mdl-progress mdl-js-progress mdl-progress__indeterminate full-width"></div>
        <script type="text/javascript"> $('#{{ key_id }}').load('{{ url }}'); </script>

    </div>

    <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
            <!-- try again <i class="material-icons">refresh</i> -->
            <i class="material-icons">arrow_back</i>
        </a>
    </div>
    <?php
}
?>

 {% include js/service_popup.html %}