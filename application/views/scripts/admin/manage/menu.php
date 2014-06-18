
<article>
    <div class="menu__manage_block">
        <div class="create_submenuDiv">
            <p>
                <span class="float_header_menu">Подменю</span>
                <input type="text" id="newsubMenu">
            </p>
            <p>
                <span>Выбрать страницу</span>
                <?php
                if (count($posts->as_array()) != 0) {
                    ?>
                    <select class="post_for_submenu">
                        <?php
                        foreach ($posts as $key => $value) {
                            ?>
                            <option value="<?php echo $value->id_post ?>">
                                <?php echo $value->title ?>
                            </option>             
                        <?php } ?>
                    </select>
                <?php } ?>
            </p>
            <p>
                <span>Родительское меню</span>
                <?php
                if (count($existMenus->as_array()) != 0) {
                    ?>
                    <select class="post_for_parentmenu">
                        <?php
                        foreach ($existMenus as $key => $value) {
                            ?>
                            <option value="<?php echo $value->id_menu ?>">
                                <?php echo $value->title ?>
                            </option>             
                        <?php } ?>
                    </select>
                <?php } ?>
            </p>
            <p>
                <a href="javascript:void(0)" class="lnk-btn js__create_submenu">
                    Создать
                </a>
            </p>
        </div>
    </div>
    <div class="menu_draggable_wrap">

        <ul id="sortable">
            <?php
            foreach ($menu as $key => $value) {
                ?>
                <li id="<?php echo $value['main']->id_menu ?>">
                    <?php echo $value['main']->title; ?>
                    <?php
                    if (!empty($value['sub'])) {
                        ?>
                        <ul id="submenu">
                            <?php
                            foreach ($value['sub'] as $k => $val) {
                                ?>
                                <li>
                                    <?php echo $val->title ?>

<!--                                    <a href="javascript:void(0)" class="edit-subs edit_sub" data-editsub="<?php echo $val->id_menu ?>">
                                        <img src="<?php //echo url::base()?>images/edit_sub.png">
                                    </a>-->
                                    <a href="javascript:void(0)" class="edit-subs del_sub" data-delsub ="<?php echo $val->id_menu ?>">
                                        <img src="<?php echo url::base()?>images/del_sub.png">
                                    </a>
<!--                                    <a href="javascript:void(0)" class="edit-subs save_sub" data-savesub ="<?php echo $val->id_menu ?>">
                                        <img src="<?php //echo url::base()?>images/save_sub.png">
                                    </a>-->
                                </li>
                            <?php } ?>
                        </ul>

                    <?php }
                    ?>
                </li>
            <?php }
            ?>
        </ul>

    </div>
    <a href="javascript:void(0)" class="lnk-btn js__save_position">
        Сохранить
    </a>
</article>

