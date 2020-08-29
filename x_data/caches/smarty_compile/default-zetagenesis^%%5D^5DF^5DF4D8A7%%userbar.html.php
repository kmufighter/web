<?php /* Smarty version 2.6.19, created on 2008-12-23 21:47:22
         compiled from zetagenesis/xotpl/userbar.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoInboxCount', 'zetagenesis/xotpl/userbar.html', 15, false),)), $this); ?>
<div id="xo-userbar">
	<?php if (! $this->_tpl_vars['xoops_isuser']): ?>
		<form method="post" action="<?php echo 'http://kmc.club.kmu.edu.tw/user.php?op=login'; ?>">
			<?php echo @_LOGIN; ?>
&nbsp;
		<input name="uname" type="text" />&nbsp;&nbsp;<input name="pass" type="password"/>
		<input type="hidden" name="xoops_redirect" value="<?php echo $_SERVER['REQUEST_URI']; ?>
" />
		
		<?php if ($this->_tpl_vars['lang_siteclosemsg']): ?>
		<input type="hidden" name="xoops_login" value="1" />
		<?php endif; ?>
		<button type="submit"><img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/home.png'; ?>" alt="<?php echo @_LOGIN; ?>
" /></button>
		</form>
		&nbsp;+&nbsp;<a href="<?php echo 'http://kmc.club.kmu.edu.tw/register.php'; ?>" class="register" title="">Register</a>
	<?php else: ?>
		<?php echo smarty_function_xoInboxCount(array('assign' => 'pmcount'), $this);?>

		<a href="<?php echo 'http://kmc.club.kmu.edu.tw/viewpmsg.php'; ?>" title="Show your inbox content">
		<?php if ($this->_tpl_vars['pmcount']): ?>
			<img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/inbox-full.png'; ?>" alt="Inbox (<?php echo $this->_tpl_vars['pmcount']; ?>
)"/>
		<?php else: ?>
			<img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/inbox.png'; ?>" alt="Show your inbox content"/>
		<?php endif; ?>
		</a>
		<a href="<?php echo 'http://kmc.club.kmu.edu.tw/user.php'; ?>" title="View your profile"><img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/profile.png'; ?>" alt="My profile"/></a>

		<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
			<a href="<?php echo 'http://kmc.club.kmu.edu.tw/admin.php'; ?>" title="Display site administration"><img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/configuration.png'; ?>" alt="Admin" /></a>
		<?php endif; ?>
		<a href="<?php echo 'http://kmc.club.kmu.edu.tw/user.php?op=logout'; ?>" title="Click to logout" ><img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/users/exit.png'; ?>" alt="Logout"/></a>
	<?php endif; ?>
</div>