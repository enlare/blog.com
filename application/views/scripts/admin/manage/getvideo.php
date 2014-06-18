<?php
if (count($videoGet->as_array()) != 0)
{
    foreach ($videoGet as $key => $value)
    {
        ?>

        <div class="vid_cell">
            <a href="javascript:void(0)" class="edit-btns del_vid" data-del-vid="<?php echo $value->id_video ?>"></a>
            <?php echo $value->code; ?>            
        </div>


    <?php
    }
}
?>
