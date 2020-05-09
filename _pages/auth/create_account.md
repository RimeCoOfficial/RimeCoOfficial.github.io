---
---

<!-- <p>If you already have an account, use that account to <a href="anchor"></a>('auth/sign-in', 'sign in.</p> -->

<?php
$invited_by_username = get_cookie('invited_by_username');
if (!empty($invited_by_username))
{
    ?>
    <p><strong>You are invited by:</strong> <code>@{{ invited_by_username }}</code></p>
    <?php
}
?>

<?php
if (empty($username))
{
    $username = strtolower(valid_text($full_name));
    $username = str_replace(' ', '', $username);
}
else
{
    $username = str_replace('.', '', $username);
}
?>

<div class="mdl-card__supporting-text">

    form_open uri_string_q() 

    <?php
    $this->view('form/input',       array('id' => 'full_name',  'value' => $full_name));
    $this->view('form/input',       array('id' => 'user_email', 'value' => $email_id));
    
    // Bug: alpha_dash only allowed, dots are removed
    $this->view('form/input',       array('id' => 'username',   'value' => $username));?>

    <br>
    <br>
    <br>
    
    Click create account to agree to the <a href="{{ site.baseurl }}/legal/terms" target="_blank">services agreement</a> and <a href="{{ site.baseurl }}/legal/privacy" target="_blank">privacy</a><br>
    <br>

    <!-- Accent-colored raised button with ripple -->
    <button class="mdl-button mdl-button--raised mdl-button--accent mdl-js-button mdl-js-ripple-effect" type="submit">
      Create Account
    </button>

    form_close

</div>