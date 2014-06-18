<form id="admin_login_form" action="" method="post" class="ui-dialog-content">
    <p class="ui-button-text"><?php echo __('Password:') ?></p>
    <p class="err <?php echo (!empty($errors['messageText'])) ? '' : 'hidden'; ?>">
        <?php echo isset($errors) ? $errors : ''; ?>
    </p>
    <input type="password" name="password" class="admImp textbox"/> 
    <input type="submit" value="<?php echo __('Login') ?>" class="lnk-btn admImp" />
</form>
