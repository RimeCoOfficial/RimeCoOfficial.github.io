---
---

{{ site.baseurl }}/).'<strong>'.'@'.$logged_in_user['username'].'</strong>' }}</p>

form_open uri_string_q() 

<?php
$this->view('form/input', array('id' => 'username', 'value' => $logged_in_user['username']));
?>

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Change
</button>

form_close
