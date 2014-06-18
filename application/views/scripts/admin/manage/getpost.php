<?php
if (count($postsGet->as_array()) != 0) {
    foreach ($postsGet as $key => $value) {
        ?>
        <div class="post-cell" data-post-cell ="<?php echo $value->id_post ?>">
            <div class="titlePost" >
                <span class="clickPost" data-id-post ="<?php echo $value->id_post ?>">
                    <?php echo $value->title ?>
                </span>

                <a href="javascript:void(0)" class="edit-btns del_post" data-post ="<?php echo $value->id_post ?>"></a>
                <a href="javascript:void(0)" class="edit-btns edit" data-editpost ="<?php echo $value->id_post ?>"></a>
            </div>
            <div class="post hidden" id="post<?php echo $value->id_post ?>">
                <?php echo $value->textfield ?>
            </div>
            <div class="postedit hidden" id="edit<?php echo $value->id_post ?>">
                <p> 
                <h3>Заголовок</h3>
                <input type="text" name="title" id="titleNew" value="">
                </p>
                <p>
                <h3>Категория</h3>
                <div class="select"> 

                </div>
                <span class="float_header">Дата публикации</span>
                <input type="text" id ="datapickerEditPost<?php echo $value->id_post ?>" class="dataPicker">
                </p>
                <h3>
                    Содержимое записи
                </h3>
                <textarea name="content" id="editorEdit<?php echo $value->id_post ?>"></textarea>
                <div>
                    <h3>
                    Description(для оптимизации - рекомендуется не более 250 символов)
                        <span id="description_counter">0</span> введено
                    </h3>
                    <textarea  name="description" class="textarea_description" id="editDescription<?php echo $value->id_post ?>"></textarea>
                </div>
                <div>
                    <h3>Теги</h3>
                    <select type="text"  class="input_tags" id="input_tags<?php echo $value->id_post ?>"></select>
                </div>
                <br/><br/>
                <a href="javascript:void(0);" class="lnk-btn js__save_post" data-savepost="<?php echo $value->id_post ?>">
                    Сохранить
                </a>
            </div>
        </div>
        <?php
    }
}
?>