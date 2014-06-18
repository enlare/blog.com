<article>
    <p class="msg"></p>
<!--    <a href="javascript:void(0)" class="lnk-btn add__cat">
        Создать категорию
    </a>-->
<!--    <div class="create___cat hidden">
        <p>
            <span>Название раздела</span>
            <input type="text" value="" class="textbox" id="cat_title">
        </p>
        <p>
            <label for="new"> 
                <input type="checkbox" class="checkbox" id="new">
                Разрешить комментарии для данного раздела
            </label>
        </p>
        <p>
            <span>Из этого поля будет создан url раздела</span>
            <input type="text" value="" class="textbox" id="cat_url">
        </p>
        <p>
            <a href="javascript:void(0)" class="lnk-btn add__new_cat">
                Сохранить
            </a>
        </p>
    </div>-->

    <?php
    if (count($allCategories->as_array()) != 0)
    {
        ?>
        <ul id="category_ul">
            <?php
            foreach ($allCategories as $key => $value)
            {
                ?>
                <li data-cat-cell ="<?php echo $value->id_category ?>" class="cat-cell titlePost">
                    <div class="textCat_wrap" id="text_cat<?php echo $value->id_category ?>">
                        <span class="clickPost">
                            <?php echo $value->title ?>
                        </span>
                        <span class="isComment <?php echo ($value->is_comment == 'yes') ? '' : 'hidden' ?>">Раздел разрешен для комментирования</span>    
                        <?php
                        if (($value->non_edit != "1"))
                        {
                            ?>
                  
        <?php } ?>
                        <a href="javascript:void(0)" class="edit-btns edit_cat" data-editcat ="<?php echo $value->id_category ?>"></a>

                    </div>
                    <div class="inputCat_wrap hidden" id="edit_cat<?php echo $value->id_category ?>">
                        <span class="clickPost">
                            <?php echo $value->title ?>
                        </span>
                        <!--<input type="text" value="" class="textbox">-->
                        <label for="check<?php echo $value->id_category ?>"> 
                            <input type="checkbox" class="checkbox">
                            Разрешить комментарии для данного раздела
                        </label>
                        <a href="javascript:void(0)" class="edit-btns save_cat" data-save-cat ="<?php echo $value->id_category ?>"></a>
                    </div>
                </li>



            <?php }
            ?>
        </ul>
        <?php
    }
    else
    {
        ?>
        <p>Созданные категории отсутствуют</p>
    <?php }
    ?>
</article>
<div id="delCat" class="hidden">
    <p>Действительно хотите удалить категорию?</p>
    <p>
        <span style="font-size:12px">Все записи данного раздела будут сохранены</span>
    </p>
</div>
