---
layout: customize
---

<?php
switch ($type)
{
    case 'logo':
        $src = $weblog['logo'];
        // $style = 'max-height: 24px; max-width: 350;';
        $style = 'max-height: 50px; max-width: 100%;';

        if (!empty($src))
        {
            $show_delete_button = TRUE;
            $src = s3_bucket_url($src);
        }

        $text = 'This logo appears at the top of all your publication’s stories. It should have a transparent background, and be at least 50px tall.';
        break;

    case 'icon':
        $src = $weblog['icon'];
        // $style = 'max-height: 32px; max-width: 32px;';
        $style = 'max-height: 40px; max-width: 100%;';

        if (empty($src))
        {
            $style = 'height: 40px;';
            $src = asset_url('weblog/images/glyph.svg');
        }
        else
        {
            $src = s3_bucket_url($src);
            $show_delete_button = TRUE;
        }

        $text = 'This works like a user icon and appears in previews of your publication content throughout Rime. It is square and should be at least 64 × 64px in size.';
        break;

    case 'title':
        $src = $weblog['title'];
        // $style = 'max-height: 18px; max-width: 250px;';
        $style = 'max-height: 40px; max-width: 100%;';

        if (empty($src))
        {
            $style = 'height: 40px;';
            $src = asset_url('weblog/images/weblog-logo.svg');
        }
        else
        {
            $src = s3_bucket_url($src);
            $show_delete_button = TRUE;
        }

        $text = 'This title appears at the top of all your publication’s stories. It should have a transparent background, and be at least 40px tall.';
        break;
}
?>

<?php if (!empty($show_delete_button)): ?>
    <!-- Icon button -->
    <a href="{{ site.baseurl }}/customize/remove-image/'.$type" class="mdl-button mdl-js-button mdl-button--icon pull-right">
        <i class="material-icons">delete_forever</i>
    </a>
<?php endif }}

<?php if (!empty($src)): ?>
    <img src="{{ src }}" style="{{ style }} padding-bottom: 20px; padding-top: 5px;" />
<?php endif }}


<p>{{ text }}</p>

form_open_multipart uri_string

<?php
$this->view('form/upload',    array('id' => 'userfile'));
?>

<br>
<br>
<br>

<!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
    Upload
</button>

form_close