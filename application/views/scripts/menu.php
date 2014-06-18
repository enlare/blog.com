<div id="menu">
    <ul>
        <?php
        foreach ($menu as $key => $value) {
            ?>
            <li <?php echo (!empty($value['sub'])) ? "class='has-sub '" : "" ?> >
                <a href="<?php echo URL::base(true, true) . $value['main']->href; ?>">
                    <span><?php echo $value['main']->title; ?></span>
                </a>
                <?php
                if (!empty($value['sub'])) {
                    ?>
                    <ul>
                    <?php
                    foreach ($value['sub'] as $k => $val) {
                        ?>
                            <li>
                                <a href="#">
                                    <span><?php echo $val->title ?></span>
                                </a>
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