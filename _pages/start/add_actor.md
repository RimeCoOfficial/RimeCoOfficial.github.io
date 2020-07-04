---
---

<?php
$supporting_text = [
    'facebook'  => 'Connecting your Facebook will bring your (publically shared only) storires to your weblog',
    'google'    => 'Your YouTube videos and Blogger content will give an awesome personality to your weblog',
    'linkedin'  => 'Connecting your LinkedIn account will allow us to generate a professioal about of you',
    'instagram' => 'Its never been so easy to share your photos to your weblog',
    'twitter'   => 'Get your latest tweets to your weblog',
    'tumblr'    => 'Get your blog posts to your weblog',
];
?>

<style type="text/css">
    .demo-card-square > .mdl-card__title {
        color: #fff;
        background:
            url('{{ site.url }}/assets/images/social-icon-'.$service.'-white.svg') center center no-repeat,
            url('{{ site.url }}/assets/images/stripe-v.png'),
            url('{{ site.url }}/{{ site.data.logged_in_user.avatar }}') bottom center / cover;
    }
</style>

<?php
${{ site.data.oauth.path_base }} = 'action/apps/add';

if (!empty($oauth_id))
{
    $this->load->view('start/actor_list');
    ?>
    <div class="mdl-card__actions mdl-card--border">
        <?php
        if (!empty($next))  $next = base_url('start/add/'.$next);
        else                $next = base_url();
        ?>
        <a class="mdl-button mdl-js-button mdl-js-ripple-effect pull-right" href="{{ next }}">
            Next
        </a>
    </div>
    <?php
}
else if ($this->session->flashdata('flash_oauth_id') != TRUE)
{
    $this->config->load('service', TRUE);
    $service_order = $this->config->item('info', 'service');
    ?>

    <div class="mdl-card__supporting-text" style="min-height: 40px;">
        {{ supporting_text[ service ] }}
    </div>

    <div class="mdl-card__actions">
        <button class="service-popup mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent" href="{{ site.url }}/{{ site.data.oauth.path_base }}/service">
            Add service <i class="material-icons">launch</i>
        </button>
    </div>


    <!-- 
    <div class="mdl-card__menu">
        <?php
        if (!empty($next))  $next = base_url('start/add/'.$next);
        else                $next = base_url();
        ?>
        <a id="skip_next" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored mdl-js-ripple-effect mdl-color-text--white" href="{{ next }}">
            <i class="material-icons">skip_next</i>
        </a>
    </div>
    -->
    <?php
}
else
{
    $oauth_id = $this->session->tempdata('oauth_id');
    ?>

    <?php
    $key_id = 'get_actor_list_'.$oauth_id;
    $url = base_url('start/get-actor-list/'.$oauth_id);
    ?>

    <div id="{{ key_id }}">

        <!-- MDL Progress Bar with Indeterminate Progress -->
        <div class="mdl-progress mdl-js-progress mdl-progress__indeterminate full-width"></div>
        <script type="text/javascript"> $('#{{ key_id }}').load('{{ url }}'); </script>

    </div>

    <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
            <!-- try again  -->
            <!-- <i class="material-icons">refresh</i> -->
            <i class="material-icons">arrow_back</i>
        </a>
    </div>
    <?php
}
?>

 {% include services/popup.html %}