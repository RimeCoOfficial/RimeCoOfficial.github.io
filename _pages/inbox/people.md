---
layout: people
title: People
---

<?php
// $invites_count = count($invites);
$min_invites = $this->config->item('min_invites', 'social');
?>

<?php
if (FALSE)
{
    if ($invites_count >= $min_invites)
    {
        ?>
        <p><strong><i class="icon-check"></i> Now you can add more services. <?php echo anchor($this->input->get('redirect'), 'Click here to continue'); ?></strong></p>
        <?php
    }
    else
    {
        ?>
        <p><strong><i class="icon-warning"></i> Invite <?php echo $min_invites;?> or more friends to add more services</strong></p>
        <?php
    }
}
?>

<strong>Share your invite Code</strong>
<p class="well well-sm"><?php echo base_url('?invited_by='.$user['username']); ?></p>

<hr>

<h2>
    Contacts
    <?php if (!empty($invites_count)): ?>
        <small class="pull-right2"><?php echo $invites_count; ?> invites sent</small>
    <?php endif; ?>
</h2>

<?php $this->view('search/form', array('class' => NULL)); ?>

<br>
<br>

<?php
if (!empty($contact_email_list))
{
    $this->view('people/invite_contact_list', array('contact_email_list' => $contact_email_list));
}
?>
