<?php /* Smarty version 2.6.19, created on 2008-12-23 21:30:21
         compiled from db:system_block_user.html */ ?>
<table cellspacing="0">
  <tr>
    <td id="usermenu">
      <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
        <a class="menuTop" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
</a>
	    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
      <?php else: ?>
		<a class="menuTop" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
      <?php endif; ?>
      <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php"><?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
</a>
      <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
</a>
      <?php if ($this->_tpl_vars['block']['new_messages'] > 0): ?>
        <a class="highlight" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
 (<span style="color:#ff0000; font-weight: bold;"><?php echo $this->_tpl_vars['block']['new_messages']; ?>
</span>)</a>
      <?php else: ?>
        <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php"><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
</a>
      <?php endif; ?>
      <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo $this->_tpl_vars['block']['lang_logout']; ?>
</a>
    </td>
  </tr>
</table>