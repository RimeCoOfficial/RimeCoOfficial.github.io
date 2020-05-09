---
---

<?php
if (empty($value)) $value = NULL;

$this->load->config('form_element', TRUE);
$element_config = $this->config->item($id, 'form_element');

$element = array(
    'name'          => $id,
    'id'            => $id,
    'value'         => set_value($id, html_entity_decode($value), FALSE),
    'maxlength'     => !empty($element_config['max_length']) ? $element_config['max_length'] : NULL,
    'style'         => 'resize: none',
    'rows'          => !empty($element_config['rows']) ? $element_config['rows'] : 5,

    'class'         => 'mdl-textfield__input',

    'id'            => $id,

    // html5 tag - not supported in Internet Explorer 9 and earlier versions.
    // 'placeholder'   => !empty($element_config['placeholder']) ? $element_config['placeholder'] : NULL,
    'autocomplete'  => 'off',
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

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php if ($is_invalid) echo 'is_invalid' }}">
    <!-- <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea> -->
    form_textarea($element

    <!-- <label class="mdl-textfield__label" for="sample5">Text lines...</label> -->
    form_label($element_config['label'], $element['id'], array('class' => 'mdl-textfield__label')

    <!-- <span class="mdl-textfield__error">Input is not a number!</span> -->
    <?php if (!empty($error[ $element['name'] ])): ?>
        <span class="mdl-textfield__error">{{ error.element.name }}</span>
    <?php endif }}
</div>