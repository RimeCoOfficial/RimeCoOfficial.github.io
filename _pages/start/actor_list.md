---
---

<?php
if ( ! empty($oauth_actor_list))
{
    // view/user/about_ext_link, view/apps/actor_list
    $sorted_oauth_actor_list = array();
    foreach ($oauth_actor_list as $a) $sorted_oauth_actor_list[  $a['service'].'.'.$a['oauth_id'].'.'.$a['kind'].'.'.$a['actor_id'] ] = $a;
    ksort($sorted_oauth_actor_list);

    ?>
    <ul class="demo-list-three mdl-list">
        <?php
        foreach ($sorted_oauth_actor_list as $actor)
        {
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
                    <img class="mdl-list__item-avatar bg-cover" style="background-image: url({{ site.url }}/assets/third-party/material.io/face.png)" width="40px" height="40px" src="{{ site.url }}/assets/images/blank.png">

                    <span>
                        {{ actor['full_name'] }}
                        <?php
                        if ($actor['verified'])
                        {
                            ?>
                            <i id="actor-id" class="material-icons md-text mdl-color-text--accent">star</i>
                            <div class="mdl-tooltip  mdl-tooltip--large" for="actor-id">Verified</div>
                            <?php
                        }
                        ?>
                    </span>

                    <!-- <span class="mdl-list__item-sub-title">{{ actor['username'] }}</span> -->

                    <span class="mdl-list__item-sub-title dont-break-out">
                        {{ sub_title }}
                    </span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <?php
                    if (is_null($actor['user_id']))
                    {
                        ?>
                        <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="{{ site.url }}/action/actor/add/'.$actor['actor_id'].'/'.$actor['oauth_id']).'?redirect=start/add/'.$actor['service'].'/'.$oauth_id }}">
                            Connect
                        </a>
                        <?php
                    }
                    else
                    {
                        ?>
                        <span class="mdl-list__item-secondary-action">
                            <i class="material-icons">done</i>
                        </span>
                        <?php
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