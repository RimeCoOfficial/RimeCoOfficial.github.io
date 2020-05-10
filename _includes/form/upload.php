<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$form_error = NULL;
if (!empty($error) OR !empty($error[ $id ])) $form_error = $error[ $id ];

$is_invalid = FALSE;
if (!empty($form_error)) $is_invalid = TRUE;
?>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php if ($is_invalid) echo 'is-invalid'; ?>">

    <input type="file" name="<?php echo $id; ?>" size="20" />
    <input type="hidden" name="validate" value="true">

    <?php if ($is_invalid): ?>
        <span class="mdl-textfield__error"><?php echo $form_error; ?></span>
    <?php endif; ?>

</div>