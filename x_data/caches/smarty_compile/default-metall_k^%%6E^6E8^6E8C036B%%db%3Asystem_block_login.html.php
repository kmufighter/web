<?php /* Smarty version 2.6.19, created on 2013-01-16 15:31:48
         compiled from db:system_block_login.html */ ?>
<form style="margin-top: 0px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post">
    <?php echo $this->_tpl_vars['block']['lang_username']; ?>
<br />
    <input type="text" name="uname" size="12" value="<?php echo $this->_tpl_vars['block']['unamevalue']; ?>
" maxlength="25" /><br />
    <?php echo $this->_tpl_vars['block']['lang_password']; ?>
<br />
    <input type="password" name="pass" size="12" maxlength="32" /><br />
    <?php if (isset ( $this->_tpl_vars['block']['lang_rememberme'] )): ?>
        <input type="checkbox" name="rememberme" value="On" class ="formButton" checked /><?php echo $this->_tpl_vars['block']['lang_rememberme']; ?>
<br />
    <?php endif; ?>
    <br />
    <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
    <input type="hidden" name="op" value="login" />
    <input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_login']; ?>
" /><br />
    <?php echo $this->_tpl_vars['block']['sslloginlink']; ?>

</form>
<br />
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php#lost"><?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
</a>
<br /><br />
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
</a>