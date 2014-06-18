<?php
if (count($allreviews->as_array() != 0))
{
    ?>
    <?php
    foreach ($allreviews as $value)
    {
        ?>
        <div class="review_cell">
            <div class="header_gradient"><?php echo date('d/m/Y', $value->datetime) ?>
                <?php echo ' от ' . $value->email_from ?>
            </div>
            <div><?php echo $value->text ?>
            </div>
        </div>


    <?php } ?>

<?php } ?>
    
