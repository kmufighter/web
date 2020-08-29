<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:14
         compiled from db:system_block_user.html */ ?>
<div id="usermenu">
  <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<a class="menuTop" href="<?php echo 'http://dlearn2.kmu.edu.tw/admin.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
"><?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
</a>
	<a href="<?php echo 'http://dlearn2.kmu.edu.tw/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
  <?php else: ?>
	<a class="menuTop" href="<?php echo 'http://dlearn2.kmu.edu.tw/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
  <?php endif; ?>
  <a href="<?php echo 'http://dlearn2.kmu.edu.tw/edituser.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
"><?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
</a>
  <a href="<?php echo 'http://dlearn2.kmu.edu.tw/notifications.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
"><?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
</a>
  <?php if ($this->_tpl_vars['block']['new_messages'] > 0): ?>
	<a class="highlight" href="<?php echo 'http://dlearn2.kmu.edu.tw/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
 (<strong><?php echo $this->_tpl_vars['block']['new_messages']; ?>
</strong>)</a>
  <?php else: ?>
	<a href="<?php echo 'http://dlearn2.kmu.edu.tw/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
</a>
  <?php endif; ?>
  <a href="<?php echo 'http://dlearn2.kmu.edu.tw/user.php?op=logout'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_logout']; ?>
"><?php echo $this->_tpl_vars['block']['lang_logout']; ?>
</a>
</div>