---
---

<?php
if (empty($user_list['items']))
{
    ?>
    <h4>No people found.</h4>
    <?php
}
else
{
    ?>
    <div class="posts infinite-container">
        <div class="infinite-item">
            <?php
            foreach ($user_list['items'] as $p)
            {
                $this->view('user/list_item', array('user' => $p['user']));
            }
            ?>
        </div>
    </div>
    <?php
}
?>

<?php
if (!empty($user_list['next_id']))
{
    $this->view('js/infinite_scroll', array('next_id' => $user_list['next_id']));
}
?>