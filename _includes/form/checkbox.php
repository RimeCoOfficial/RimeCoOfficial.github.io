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
    'value'         => '1',
    'checked'       => set_value($id, $value),
    'class'         => 'mdl-checkbox__input'
);
$element_empty = array(
    'name'          => $id,
    'id'            => $id.'-empty',
    'value'         => '0',
    'type'          => 'hidden',
);
?>

<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="<?php echo $element['id']; ?>">
    <!-- <input type="checkbox" id="<?php echo $element['id']; ?>" class="mdl-checkbox__input" checked> -->
    <?php echo form_checkbox($element_empty); ?>
    <?php echo form_checkbox($element); ?>
    <span class="mdl-checkbox__label"><?php echo $element_config['label']; ?></span>
</label>
