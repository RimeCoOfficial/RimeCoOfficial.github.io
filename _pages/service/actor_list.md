---
---

<?php
if ( ! empty($oauth_actor_list))
{
    // view/user/about_ext_link, view/service/actor_list
    $sorted_oauth_actor_list = array();
    foreach ($oauth_actor_list as $a) $sorted_oauth_actor_list[  $a['service'].'.'.$a['oauth_id'].'.'.$a['kind'].'.'.$a['actor_id'] ] = $a;
    ksort($sorted_oauth_actor_list);

    ?>
    <ul class="demo-list-three mdl-list">
        <?php
        foreach ($sorted_oauth_actor_list as $actor)
        {
            // if (!empty($prev_actor) AND $prev_actor['oauth_id'] != $actor['oauth_id'])
            // {
            //     echo '<hr>';
            // }
            // $prev_actor = $actor;

            $sub_title = '';
            if (!empty($actor['url']))
            {
                $sub_title = $actor['url'];
                $sub_title = str_replace(['http://www.', 'https://www.', 'http://', 'https://'], '', $sub_title);
                $sub_title = trim($sub_title, '/');
                $sub_title = trim($sub_title, '/');
            }

            if (empty($sub_title)) $sub_title = $actor['x_actor_id'];
            ?>

            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <!-- <i class="material-icons mdl-list__item-avatar">person</i> -->
                    <img class="mdl-list__item-avatar bg-cover" style="background-image: url({{ site.baseurl }}/assets/third-party/material.io/face.png)" width="40px" height="40px" src="{{ site.baseurl }}/assets/images/blank.png">

                    <span>
                        {{ actor['full_name'] }}
                        <?php
                        if ($actor['verified'])
                        {
                            ?>
                            <small>
                                <i id="actor-id" class="material-icons md-text mdl-color-text--accent">star</i>
                            </small>

                            <div class="mdl-tooltip  mdl-tooltip--large" for="actor-id">Verified</div>
                            <?php
                        }
                        ?>
                    </span>

                    <span class="mdl-list__item-sub-title dont-break-out">
                        {{ sub_title }}
                    </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <?php
                    if (is_null($actor['user_id']))
                    {
                        ?>
                        <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="{{ site.baseurl }}/action/actor/add/'.$actor['actor_id'].'/'.$actor['oauth_id']).'?redirect=service/add/'.$actor['service'] }}">
                            <!-- <i class="material-icons">add</i> -->
                            Connect
                        </a>
                        <?php
                    }
                    else
                    {
                        if ($actor['user_id'] == $logged_in_user['user_id'])
                        {
                            if ($actor['status'] == 400)
                            {
                                ?>
                                <span class="mdl-list__item-secondary-info">
                                    Error: {{ actor['status'] }}
                                </span>
                                <?php
                            }
                            else
                            {
                                ?>
                                <time class="mdl-list__item-secondary-info" datetime="date('Y-m-d H:m', strtotime($actor['last_sync'])">
                                    Last sync: time_elapsed($actor['last_sync'])
                                </time>
                                <?php
                            }
                            ?>

                            <a class="mdl-list__item-secondary-action dialog-button mdl-button mdl-js-button mdl-color-text--primary mdl-button--icon"
                                href="#"
                                data-actor-id="{{ actor['actor_id'] }}"
                                data-service-name="{{ actor['service'] }}"
                                data-actor-name="{{ actor['full_name'] }}">
                                <i class="material-icons">delete</i>
                            </a>
                            
                            <?php
                        }
                        else
                        {
                            ?>
                            <span class="mdl-list__item-secondary-info">
                                {{ actor['user']['username'] }}
                            </span>

                            <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" href="{{ site.baseurl }}/@'.$actor['user']['username']" target="_blank">
                                <i class="material-icons">rss_feed</i>
                            </a>
                            <?php
                        }
                    }
                    ?>
                </span>
            </li>
            <?php
        }
        ?>
    </ul>
    <?php
}
else
{
    ?>
    <div class="mdl-card__supporting-text">
        That’s an error, That’s all we know.
    </div>
    <?php
}
?>

<!-- Dynamic Modal  -->
<!--
<button class="mdl-button mdl-button--raised mdl-js-button dialog-button" data-actor-id="123" data-service-name="youtube" data-actor-name="Full Name">Show Dialog</button>
<button class="mdl-button mdl-button--raised mdl-js-button dialog-button" data-actor-id="222" data-service-name="youtube222" data-actor-name="Full Name222">Show Dialog2</button>
-->

<dialog id="dialog" class="mdl-dialog">
    <h1 class="mdl-dialog__title mdl-typography--font-light mdl-color-text--grey-600">Unlink Account</h1>
    <div class="mdl-dialog__content">
        <p>
            Are you sure, you want to unlink the following account?<br>
            <strong></strong>
        </p>
    </div>
    <div class="mdl-dialog__actions">
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent close">Cancel</button>
        <a class="unlink mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" href="#">
            <i class="material-icons">delete</i>
        </a>
    </div>
</dialog>

<script type="text/javascript">
    (function() {
        'use strict';
        var dialogButtons = document.querySelectorAll('.dialog-button');
        var dialog = document.querySelector('#dialog');
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }

        dialogButtons.forEach(function(dialogButton) {
            // console.log(dialogButton);
            dialogButton.addEventListener('click', function() {

                var jq_dialogButton = $(this)

                var actor_id = jq_dialogButton.data('actor-id') // Extract info from data-* attributes
                var actor_name = jq_dialogButton.data('actor-name') // Extract info from data-* attributes
                var service_name = jq_dialogButton.data('service-name') // Extract info from data-* attributes

                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var jq_dialog = $(dialog)
                jq_dialog.find('p strong').text(service_name.toUpperCase() + ': ' + actor_name)
                jq_dialog.find('a.unlink').attr("href", '{{ site.baseurl }}/'action/actor/remove' + '/' + actor_id + '?redirect=' + 'service/add/' + service_name)

                dialog.showModal();
            });
        });
        
        dialog.querySelector('button.close')
            .addEventListener('click', function() {
                dialog.close();
        });
    }());
</script>