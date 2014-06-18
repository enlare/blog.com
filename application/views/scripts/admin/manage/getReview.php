<?php
if (count($allreviews->as_array() != 0))
{
    ?>
    <?php
    foreach ($allreviews as $value)
    {
        ?>
        <div class="review_cell">
            <a href="javascript:void(0)" class="edit-btns del_review" data-del-review="<?php echo $value->id_review ?>"></a>
                <select class="statReviewSelect">
                    <option value="approved" <?php echo $value->status == 'approved' ? 'selected="selected"':''?>>Одобрен</option>
                        <option value="unapproved" <?php echo $value->status == 'unapproved' ? 'selected="selected"':''?>>Не одобрен</option>
                    </select>
            <div><?php echo date('d/m/Y', $value->datetime) ?>
                <?php echo ' от ' . $value->email_from ?>
            </div>
            <div><?php echo $value->text ?>
            </div>
            <button type="button" class="lnk-btn writeRe">ответить</button>
            <div class="answ hidden">
                <textarea class="textarea answrTextarea"></textarea>
                <p>
                    <button type="button" class="lnk-btn js__re_btn" data-id-review ="<?php echo $value->id_review ?>">
                        отправить
                    </button>
                </p>
            </div>
        </div>


    <?php } ?>

    <?php
}
else
{
    ?>
    <span>Ни одного отзыва не найдено</span>
<?php } ?>
