<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:10
         compiled from db:system_bannerlogin.html */ ?>
<div id="login_window">
<h2 class='content_title'><?php echo @_BANNERS_LOGIN_TITLE; ?>
</h2>
<form method='post' action='banners.php' class='login_form'>
 <div class='credentials'>
  <label for='login_form-login'><?php echo @_BANNERS_LOGIN_LOGIN; ?>
</label>
  <input type='text' name='login' id='login_form-login' value='' /><br />
  <label for='login_form-password'><?php echo @_BANNERS_LOGIN_PASS; ?>
</label>
  <input type='password' name='pass' id='login_form-password' value='' /><br />
 </div>
 <div class='actions'>
 	<input type='hidden' name='op' value='list' />
	<button type='submit'><?php echo @_BANNERS_LOGIN_OK; ?>
</button></div>
 <div class='login_info'><?php echo @_BANNERS_LOGIN_INFO; ?>
</div>
 <?php echo $this->_tpl_vars['TOKEN']; ?>

</form>
</div>