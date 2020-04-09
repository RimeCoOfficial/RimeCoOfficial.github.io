<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="demo-layout-page mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-color--grey-200">
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--grey-200">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo asset_url('images/logotype.svg'); ?>" height=25 alt="Rime">
                </a>
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <?php
                if (!empty($logged_in_user))
                {
                    ?>
                    <a class="mdl-navigation__link" href="<?php echo base_url('@'.$logged_in_user['username']); ?>">
                        <img class="bg-cover img-circle"
                            style="background-image: url(<?php echo $logged_in_user['profile_image_url']; ?>)"
                            height="39px"
                            src="<?php echo asset_url('images/blank.png'); ?>"
                            alt="<?php echo $logged_in_user['username']; ?>">
                    </a>
                    <?php
                }
                else
                {
                    ?>
                    <a class="mdl-navigation__link" href="<?php echo base_url('auth/sign-in'); ?>">
                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Sign in
                        </span>
                    </a>
                    <?php
                }
                ?>
                
            </nav>
        </div>
    </header>
    
    <main class="mdl-layout__content">
        <div class="page-content">

            <!-- Your content goes here -->

            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-offset-desktop mdl-cell--7-col-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <?php echo $main_content; ?>
                </div>
            </div>
        </div>

        <?php $this->view('footer'); ?>
    </main>
</div>
