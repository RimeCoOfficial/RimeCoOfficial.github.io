---
---

<?php
$this->config->load('service', TRUE);
$service_order = $this->config->item('info', 'service');
?>

<?php
$this->config->load('social', TRUE);
$min_invites = $this->config->item('min_invites', 'social');
?>


<?php
if (FALSE) // ($invites_count < $min_invites)
{
    ?>
    <div class="mdl-card__supporting-text">
        <strong><a href="anchor"></a>('people/invite', 'Invite {{ min_invites }} or more to add more than one service</strong><br>
        Add Facebook, Google or Microsoft account to sync contacts
    </div>
    <?php
}
else
{
    ?>
    <ul class="demo-list-two mdl-list">
        <?php
        foreach ($service_order as $s_class => $s)
        {
            if (empty($service_status_list[ $s_class ]))
            {
                // no account connected
                $icon_color = 'mdl-button--accent';
                $icon = 'add';
            }
            else if ($service_status_list[ $s_class ] < 400)
            {
                // all sytem OK
                $icon_color = 'mdl-button--colored';
                $icon = 'arrow_forward';
            }
            else
            {
                // warning: required attention
                $icon_color = '';
                $icon = 'error_outline';
            }
            ?>
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <i class="mdl-list__item-icon reset($s['kind'])['icon']"></i>
                    <span>{{ s['name'] }}</span>
                    <span class="mdl-list__item-sub-title">{{ s['detials'] }}</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button {{ icon_color }} mdl-button--icon" href="{{ site.baseurl }}/service/add/'.$s_class">
                        <i class="material-icons">{{ icon }}</i>
                    </a>
                </span>
            </li>
            <?php
        }
        ?>
    </ul>
    <?php
}
?>