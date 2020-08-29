<?php /* Smarty version 2.6.19, created on 2008-12-23 21:47:22
         compiled from zetagenesis/xotpl/blockszone.html */ ?>

<?php if ($this->_tpl_vars['blocks']): ?>
	<<?php echo $this->_tpl_vars['zoneTag']; ?>
 class="xo-blockszone x2-secondary<?php if ($this->_tpl_vars['zoneClass']): ?> <?php echo $this->_tpl_vars['zoneClass']; ?>
<?php endif; ?>"<?php if ($this->_tpl_vars['zoneId']): ?> id="<?php echo $this->_tpl_vars['zoneId']; ?>
"<?php endif; ?>>
	<?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
	<div class="xo-block <?php echo $this->_tpl_vars['block']['module']; ?>
">
		<?php if ($this->_tpl_vars['block']['title']): ?><div class="xo-blocktitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div><?php endif; ?>
		<div class="xo-blockcontent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	</<?php echo $this->_tpl_vars['zoneTag']; ?>
>
<?php endif; ?>