<?php /* Smarty version 2.6.19, created on 2008-12-23 21:46:50
         compiled from db:newbb_online.html */ ?>
<div>
<div class="even" style="padding: 5px; line-height: 150%;">
<span style="padding: 2px;"><?php echo $this->_tpl_vars['online']['image']; ?>
</span>
<strong><?php echo @_MD_USERS_ONLINE; ?>
 <?php echo $this->_tpl_vars['online']['num_total']; ?>
  <?php echo @_MD_BROWSING_FORUM; ?>
</strong>
</div>
<div class="odd" style="padding: 5px; line-height: 150%;">
	 [ <span class="online_admin"><?php echo @_MD_ADMINISTRATOR; ?>
</span> ] [ <span class="online_moderator"><?php echo @_MD_MODERATOR; ?>
</span> ]
	<br /><?php echo $this->_tpl_vars['online']['num_anonymous']; ?>
 <?php echo @_MD_ANONYMOUS_USERS; ?>

	<?php if ($this->_tpl_vars['online']['num_user']): ?>
	<br /><?php echo $this->_tpl_vars['online']['num_user']; ?>
 <?php echo @_MD_REGISTERED_USERS; ?>

	<?php $_from = $this->_tpl_vars['online']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
		<a href="<?php echo $this->_tpl_vars['user']['link']; ?>
">
			<?php if ($this->_tpl_vars['user']['level'] == 2): ?>
			<span class="online_admin"><?php echo $this->_tpl_vars['user']['uname']; ?>
</span>
			<?php elseif ($this->_tpl_vars['user']['level'] == 1): ?>
			<span class="online_moderator"><?php echo $this->_tpl_vars['user']['uname']; ?>
</span>
			<?php else: ?>
			<?php echo $this->_tpl_vars['user']['uname']; ?>

			<?php endif; ?>
		</a>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
</div>
</div>