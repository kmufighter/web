<?php /* Smarty version 2.6.26, created on 2013-01-16 16:55:25
         compiled from db:main_tpl.html */ ?>
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
		<li><span class="menu_r"><a href="admin/<?php echo $this->_tpl_vars['admin_link']; ?>
" target="_self"><span class="menu_ar"><?php echo $this->_tpl_vars['lang']['admin']; ?>
</span></a></span></li>
		<?php endif; ?>
		<li><span class="menu_r"><?php echo $this->_tpl_vars['select']; ?>
</span></li>
	</ul>

	<br class="clearit" />
</div>

<table>
<tr><td><?php echo $this->_tpl_vars['content']; ?>
</td></tr>
</table>