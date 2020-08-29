<?php /* Smarty version 2.6.26, created on 2013-01-16 17:41:41
         compiled from db:play_tpl.html */ ?>
<?php echo $this->_tpl_vars['css']; ?>

<link rel="stylesheet" href="menu_style.css" type="text/css" />
<div class="menu bubplastic horizontal lime">
	<ul>
	  <?php if ($this->_tpl_vars['op'] == 'playlist'): ?>
		<li>
		<?php else: ?>
    <li class="highlight">
    <?php endif; ?>
		<span class="menu_r"><a href="index.php" target="_self"><span class="menu_ar"><?php echo $this->_tpl_vars['lang']['home']; ?>
</span></a></span></li>
		<?php if ($this->_tpl_vars['pcsn'] != ""): ?>
		<?php if ($this->_tpl_vars['op'] == 'playlist'): ?>
		<li class="highlight">
		<?php else: ?>
    <li>
    <?php endif; ?>
		<span class="menu_r"><a href="index.php?op=playlist&pcsn=<?php echo $this->_tpl_vars['pcsn']; ?>
" target="_self"><span class="menu_ar"><?php echo $this->_tpl_vars['lang']['list']; ?>
</span></a></span></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['admin']): ?>
		<li><span class="menu_r"><a href="admin/upload.php?op=tad_player_form&psn=<?php echo $this->_tpl_vars['psn']; ?>
" target="_self"><span class="menu_ar"><?php echo $this->_tpl_vars['lang']['modify']; ?>
</span></a></span></li>
		<li><span class="menu_r"><a href="admin/<?php echo $this->_tpl_vars['admin_link']; ?>
" target="_self"><span class="menu_ar"><?php echo $this->_tpl_vars['lang']['admin']; ?>
</span></a></span></li>
		<?php endif; ?>
	</ul>

	<br class="clearit" />
</div>
<div class='media_title'><?php echo $this->_tpl_vars['title']; ?>
</div>
<table class="media">
<tr><td valign="top" class="media_menu"><?php echo $this->_tpl_vars['select']; ?>
</td>
<td valign="middle" class="media_file" style="width: <?php echo $this->_tpl_vars['width']; ?>
px"><?php echo $this->_tpl_vars['media']; ?>
</td></tr>
<tr><td colspan="2" class="set_code"><?php echo $this->_tpl_vars['code']; ?>
</td></tr>
<tr><td colspan="2"><div class="media_content"><?php echo $this->_tpl_vars['content']; ?>
</div></td></tr>
</table>




<!--Tad Player play_tpl.html-->

<p style="clear: both">
<div style="text-align: center; padding: 3px; margin: 3px;">
  <?php echo $this->_tpl_vars['commentsnav']; ?>

  <?php echo $this->_tpl_vars['lang_notice']; ?>

</div>

<div style="margin: 3px; padding: 3px;">
<!-- start comments loop -->
<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<!-- end comments loop -->
</div>
</p>