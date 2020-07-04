---
---

$people_item

<div class="media">

    <div class="media-left">
        <a href="{{ site.url }}/@'.$user['username']">
            <img class="bg-cover" style="background-image: url({{ user['avatar'] }})" width="60px" height="60px" src="{{ site.url }}/assets/images/blank.png">
        </a>
    </div>

    <div class="media-body">
        <h4 class="media-heading">
            <a type="button" class="pull-right follow-btn btn btn-sm btn-75px"
            data-user-isfollowing="{{ user.is_following }}"
            data-user-id="{{ user.user_id }}"
            data-loading-text="&lt;i class=&quot;icon-dots-three-horizontal&quot;&gt;&lt;/i&gt;"
            data-complete-text="Unfollow" style="display:none">Follow</a>
        
            <a href="{{ site.url }}/@'.$user['username']">
                {{ user['full_name'] }}
                <small>{{ user['username'] }}</small>    
            </a>

            <?php
            if ($user['verified'])
            {
                ?>
                <sup class="small" data-toggle="tooltip" data-placement="top" title="Verified">
                    <i class="text-primary icon-star"></i>
                </sup>
                <?php
            }
            ?>
        </h4>
        <div class="text-muted">
            {{ user['bio_html'] }}
        </div>
    </div>
</div>