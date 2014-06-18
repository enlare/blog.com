<article>
    <div class="msg"></div>	
    <h2>Создать запись </h2>
    <form action="" method="POST" id="newPostForm" >
        <p> 
        <h3>Заголовок</h3>
        <input type="text" name="title" id="titleNew">
        </p>
        <p>
            <span class="float_header">Категория</span>
            <select name="categoryId" id="categoryId">
                <?php
                foreach ($allCategories as $key => $value)
                {
                    ?>
                    <option value="<?php echo $value->id_category; ?>">
                        <?php echo $value->title ?>
                    </option>
                <?php }
                ?>
            </select>
            <span class="float_header">Дата публикации</span>
            <input type="text" id ="datapickerNewPost">
        </p>
<!--        <p>
            <span class="float_header">URL записи</span>
            <input type="text" id="url">
        </p>-->
        <p>
        <h3>
            Содержимое записи
        </h3>
        </p>
        <p>
        <textarea name="content" id="editor"></textarea>
        </p>
        <div>
            <h3>
                Description(для оптимизации - рекомендуется не более 250 символов) <span id="description_counter">0</span> введено
            </h3>
            <textarea  name="description" class="textarea_description"></textarea>
        </div>
        <div>
            <h3>
                Теги
            </h3>
            <select type="text"  class="input_tags"></select>
        </div>
        <br/>
        <p>
            <input type="button" value="Сохранить" id="js__create_post">
        </p>    
    </form>




</article>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".input_tags").fcbkcomplete({json_url: baseurl+'ajax/gettags', newel: true, filter_case: false, width: "1000" });
    });
</script>