<style type="text/css">
    .item_gallery_wrapper
    {
        padding: 5px;
        border: 1px solid #ECECEC;
        float:left;
        margin: 10px;
        position: relative;
    }
    .item_gallery_wrapper:hover .item_gallery_close_btn
    {
        display: block;
    }
    .item_gallery_wrapper img
    {
        display: block;
        margin: auto auto;
    }
    .item_gallery_wrapper img:hover
    {
        cursor: pointer;
    }
    .item_gallery_close_btn
    {
        height: 32px;
        width: 32px;
        background: url('<?php echo URL::Base(true, true)?>images/btns.png') -64px 0px no-repeat;
        position: absolute;
        top:-16px;
        right:-16px;
        display: none;
    }
    .item_gallery_close_btn:hover
    {
        cursor: pointer;
    }
    .clear
    {
        clear:both;
    }
    
 
    
</style>


<?php
$counter = 0;
foreach($images as $image)
{
$counter++;?>
    <div class="item_gallery_wrapper">
        <a href="<?php echo URL::base(true, true) ?>image/full/<?php echo $image?>">
            <img src="<?php echo $uploadPathPreview. $image?>" alt="<?php echo $image?>"/>
        </a>
        <?php if($showclose){?>
        <div class="item_gallery_close_btn"></div>
        <?php }?>
     </div>
     <?php  if($counter == $inRow) { $counter = 0;?>
        <br class="clear"/>
     <?php }?>

<?php
}
?>
