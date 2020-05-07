
<style type="text/css">
    .demo-card-square > .mdl-card__title {
        background:
            url('{{site.baseurl}}/assets/images/intro-0'.($stage + 1).'.png') center / cover;
    }
</style>

<div class="mdl-card__supporting-text">
    <p style="min-height: 50px;">
        <!-- <?php echo $messages[ $stage ]; ?> -->
        Arya: <span id="typed-element"></span>
    </p>
</div>

<div class="mdl-card__actions mdl-card--border-">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{site.baseurl}}/$button_link">
        <?php echo $button_text[ $stage ]; ?>
    </a>

    <?php
    if ($stage == 2)
    {
        echo mailto('founders@rime.co', 'Request a Demo', ['subject' => 'Request a Demo'], 'class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored pull-right"');
    }
    ?>
</div>

<script src="{{site.baseurl}}/assets/third-party/mattboldt-typed.js-1.1.4/dist/typed.min.js"></script>
<script>
  $(function(){
      $("#typed-element").typed({
        strings: ["<?php echo $messages[ $stage ]; ?>"],
        typeSpeed:  20,
        backSpeed:  25,
        backDelay:  5000,
        loop:       true,
      });
  });
</script>