<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open(uri_string(), array('method' => 'get', 'role' => 'search')); ?>

<?php $this->view('form/input', array('id' => 'q', 'value' => $this->input->get('q'))); ?>

<div class="row">
    <div class="col-sm-5">
        <button type="submit" class="btn btn-primary btn-block">Search</button>
    </div>
</div>

<?php echo form_close(); ?>

<script type="text/javascript">
    $(function() {
        // $('#q').focus().select();
        // $('#q').focus();

        $('#q').on("click", function () {
             $(this).select();
        });
    });
</script>
