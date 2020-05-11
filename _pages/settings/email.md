---
layout: settings
---

<?php
// var_dump($user_email);
?>


Your email address <strong>{{ user_email['email_id'] }}</strong> will be used for account-related notifications (e.g. account changes, contacts joined)<br>

<?php
if ( ! $user_email['verified'])
{
    ?>
    <br>
    <i class="icon-warning"></i> Verify your email, <a href="anchor"></a>('settings/resend-verification', 'resend verification<br>
    <?php
}
?>

<br>
<i id="info_outline" class="material-icons md-24 pull-right">info_outline</i>
Looking for activity notification controls?<br>

<br>

<form>

<?php
$this->view('form/input', array('id' => 'user_email', 'value' => ( !empty($user_email['new_email']) ? $user_email['new_email'] : $user_email['email_id'] ) ));
?>

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

</form>