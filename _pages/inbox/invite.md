---
layout: people
title: People
---
<?php
// var_dump($contact_email_list);

if (!empty($contact_email_list))
{
    if (empty($contact_email_list['items']))
    {
        ?>
        <h4>No contacts found</h4>
        <p>
            <i class="icon-help-with-circle"></i>
            <?php echo anchor('service', 'Add a Google, Live or Yahoo account'); ?> to invite your contacts.
        </p>
        <?php
    }
    else
    {
        ?>
        <div class="infinite-container">
            <div class="infinite-item">
                <?php
                foreach ($contact_email_list['items'] as $c)
                {
                    // var_dump($c);
                    ?>
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">
                                <span class="text-capitalize"><?php echo $c['name']; ?></span>
                                <span class="small"><?php echo $c['email_id']; ?></span>
                            </h4>
                        </div>
                        <div class="media-right">
                            <?php
                            if (!empty($c['invite']))
                            {
                                ?>
                                <span class="media-object small text-gray pull-right"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Resend invitation">
                                    <i class="icon-info-with-circle"></i>
                                </span>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="media-right" style="min-height: 28px;">
                            <a type="button" class="invite-btn media-object btn btn-sm btn-primary btn-75px"
                                data-loading-text="&lt;i class=&quot;icon-dots-three-horizontal&quot;&gt;&lt;/i&gt;"
                                data-complete-text="&lt;i class=&quot;icon-check&quot;&gt;&lt;/i&gt;"
                                autocomplete="off"
                                data-invite-email="<?php echo $c['email_id']; ?>"
                                data-invite-name="<?php echo $c['name']; ?>"
                            >
                                Invite
                            </a>

                            <!-- <div class="btn-75px text-center hidden"><i class="icon-check"></i></div> -->
                        </div>
                    </div>
                    <hr>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
}
?>

<script type="text/javascript">
    $(document).on('click', '.invite-btn', function (e) {
        var $this = $(this)
        if ($this.is('a')) e.preventDefault()
        var $btn = $this.button('loading')
        $btn.button('loading')

        // console.log($btn.data('inviteName'))
        $.ajax("<?php echo base_url(); ?>"+"action/people/invite/"+$btn.data('inviteEmail')+"?name="+$btn.data('inviteName')).success(function () {
            $btn.button('complete')

            // $this.removeClass('btn-primary')
            // $this.addClass('hidden')
        })
    });
</script>

<?php
if (!empty($contact_email_list['next_id']))
{
    $this->view('js/infinite_scroll', array('next_id' => $contact_email_list['next_id']));
}
?>