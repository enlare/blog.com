<div class="page__wrap">    
    <?php
    if ($contactInfo->pk())
    {
        ?>
        <div class="post__wrap">
            <?php echo $contactInfo->textfield ?>
        </div>
    <?php } ?>

    <form action="" method="POST">
        <div class="form_wrap">
            <table width="100%" cellpadding="3" cellspacing="0">
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" id="email_sender" name="emailSender" class="textbox" value="<?php echo Arr::get($_POST, 'emailSender')?>">
                        <p class="err <?php echo (isset($errors['emailSender'])) ? '' : 'hidden'; ?>">
                            <?php echo isset($errors['emailSender']) ? $errors['emailSender'] : '';?>
                        </p>  
                    </td>
                </tr>
                <tr>
                    <td>Тема</td>
                    <td>
                        <input type="text" id="latter_title" name="messageTitle" class="textbox" value="<?php echo Arr::get($_POST, 'messageTitle')?>">
                        <p class="err <?php echo (!empty($errors['messageTitle'])) ? '' : 'hidden'; ?>">
                            <?php echo isset($errors['messageTitle']) ? $errors['messageTitle'] : '';?>
                        </p>  
                    </td>
                </tr>
                <tr>
                    <td>Сообщение</td>
                    <td>
                        <textarea name="messageText"><?php echo Arr::get($_POST, 'messageText')?></textarea>
                        <p class="err <?php echo (!empty($errors['messageText'])) ? '' : 'hidden'; ?>">
                            <?php echo isset($errors['messageText']) ? $errors['messageText'] : '';?>
                        </p>  
                    </td>
                </tr>
                <tr>
                    <td>Введите код с картинки</td>
                    <td><?php echo $captcha ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" id="captcha" name="captcha" class="textbox" value="<?php echo Arr::get($_POST, 'captcha')?>">
                        <p class="err <?php echo (!empty($errors['captcha'])) ? '' : 'hidden'; ?>">
                            <?php echo isset($errors['captcha']) ? $errors['captcha'] : '';?>
                        </p>  
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Отправить"></td>
                    <td></td>
                </tr>

            </table>
        </div>
    </form>
</div>