---
layout: settings
---

<?php // $this->view('settings/profile_image

<!-- <br> -->

form_open uri_string_q() 

<?php
$this->view('form/input',     array('id' => 'full_name',  'value' => $logged_in_user['full_name']));
$this->view('form/textarea',  array('id' => 'bio',        'value' => $logged_in_user['bio']));
$this->view('form/input',     array('id' => 'location',   'value' => $logged_in_user['location']));
?>

<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Update
</button>

form_close