<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
if (empty($value)) $value = NULL;

$this->load->config('form_element', TRUE);
$element_config = $this->config->item($id, 'form_element');

$element = array(
    'name'          => $id,
    'id'            => $id,
    'value'         => set_value($id, $value, FALSE), // set_value($id, $value, FALSE),
    
    // 'maxlength'     => !empty($element_config['max_length']) ? $element_config['max_length'] : NULL,

    'class'         => 'mdl-textfield__input',

    'options'       => $element_config['options'],

    'selected'      => set_value($id, $value, FALSE), // set_value($id, $value, FALSE),

    // html5 tag - not supported in Internet Explorer 9 and earlier versions.
    // 'placeholder'   => !empty($element_config['placeholder']) ? $element_config['placeholder'] : NULL,
    // 'type'          => !empty($element_config['type']) ? $element_config['type'] : 'text',
    // 'autocomplete'  => 'off',
);

if (!empty($element_config['required'])) $element['required'] = NULL;

$form_error = form_error($element['name']);
if (empty($form_error) AND !empty($error) AND !empty($error[ $element['name'] ]))
{
    $form_error = $error[ $element['name'] ];
}

$is_invalid = FALSE;
if (!empty($form_error)) $is_invalid = TRUE;
?>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php if ($is_invalid) echo 'is-invalid'; ?>">
    <?php echo form_dropdown($element); ?>

    <!-- <span class="mdl-textfield__error">Input is not a number!</span> -->
    <?php if ($is_invalid): ?>
        <span class="mdl-textfield__error"><?php echo $form_error; ?></span>
    <?php endif; ?>
</div>