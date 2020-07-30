---
layout: default
title: Start
---

<?php
$youtube_video_id = 'wZf8VZX8ZI8';
$youtube_video_id = 'https://www.youtube.com/embed/wZf8VZX8ZI8'.$youtube_video_id.'?vq=hd720&modestbranding=0&showinfo=0';
?>

<h4>Watch the video!</h4>
<div class="embed-responsive embed-responsive-16by9">
    <iframe src="<?php echo $youtube_video_id; ?>"></iframe>
</div>
<br>

<h4><?php echo $percent_progress; ?>% Complete</h4>

<div class="steps">
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percent_progress; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent_progress; ?>%;">
            <span class="hidden"><?php echo $percent_progress; ?>% Complete</span>
        </div>
    </div>
</div>

<div class="list-group">
                            
    <a href="<?php echo base_url('service'); ?>" class="list-group-item">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Add a service</h4>
                Add your services and get sync your collection
            </div>
            <div class="media-right">
                <?php echo ($service_added ? '<i class="icon-check"></i>' : '' ); ?>
            </div>
        </div>
    </a>

    <a href="<?php echo base_url('settings/account'); ?>" class="list-group-item">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Write a bio</h4>
                Something to describe yourself
            </div>
            <div class="media-right">
                <?php echo ($bio_written ? '<i class="icon-check"></i>' : '' ); ?>
            </div>
        </div>
    </a>

    <a href="<?php echo base_url('settings/email'); ?>" class="list-group-item">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Verify your email</h4>
                Check your inbox for the verification mail
            </div>
            <div class="media-right">
                <?php echo ($email_verified ? '<i class="icon-check"></i>' : '' ); ?>
            </div>
        </div>
    </a>

    <a href="<?php echo base_url('people/invite'); ?>" class="list-group-item">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Invite a friend</h4>
                Let your friends know what are you up to
            </div>
            <div class="media-right">
                <?php echo ($friends_invited ? '<i class="icon-check"></i>' : '' ); ?>
            </div>
        </div>
    </a>
    
    <a href="<?php echo base_url('search/people'); ?>" class="list-group-item">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">Follow 5 people</h4>
                Search your friends by email address or name
            </div>
            <div class="media-right">
                <?php echo ($following_people ? '<i class="icon-check"></i>' : '' ); ?>
            </div>
        </div>
    </a>

</div>

<!--
        <h3><?php // echo ($edu_added ? '<i class="icon-check"></i>' : '' ); ?> Add a school</h3>
        <p><?php echo base_url('edit_profile/edu'); ?></p>
        
        <h3><?php // echo ($work_added ? '<i class="icon-check"></i>' : '' ); ?> Add a work place</h3>
        <p><?php echo base_url('edit_profile/work'); ?></p>
-->