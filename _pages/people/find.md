---
layout: people
title: People
---
<?php // var_dump($actor_list); ?>

<p>
    <a href="<?php echo base_url('service'); ?>">Add a service</a> and help us find your friends and contacts.
</p>
<hr>

<?php if (!empty($people_list)) $this->view('user/list', array('user_list' => $people_list)); ?>