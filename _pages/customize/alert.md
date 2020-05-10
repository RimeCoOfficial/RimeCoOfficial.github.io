{% assign alert = "Connetion Established" %}

<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
    <div class="mdl-snackbar__text"></div>
    <button class="mdl-snackbar__action" type="button"></button>
</div>

<script>
    document.querySelector('#demo-toast-example').addEventListener('mdl-componentupgraded', function() {
        var data = {
            timeout: 2000,
            message: '{{ alert }}'
        };
        this.MaterialSnackbar.showSnackbar(data);
    });
</script>