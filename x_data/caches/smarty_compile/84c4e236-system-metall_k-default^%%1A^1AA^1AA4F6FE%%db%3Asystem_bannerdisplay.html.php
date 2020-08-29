<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:10
         compiled from db:system_bannerdisplay.html */ ?>
<h1><?php echo @_BANNERS_MANAGEMENT; ?>
</h1>
<h5><?php echo $this->_tpl_vars['welcomeuser']; ?>
</h5>
<div class="txtcenter"><a href="banners.php?op=logout" title="<?php echo @_BANNERS_LOGOUT; ?>
"><?php echo @_BANNERS_LOGOUT; ?>
</a></div>
<div class="txtcenter"><a href="banners.php?op=list" title="<?php echo @_BANNERS_BACK; ?>
"><?php echo @_BANNERS_BACK; ?>
</a></div>
<div><?php echo $this->_tpl_vars['banneractive']; ?>
</div><br />
<?php if ($this->_tpl_vars['count']): ?>
	<?php $_from = $this->_tpl_vars['banners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
		<form action="banners.php" method="post">
			<table cellspacing="1" class="outer width100">
				<th colspan="2"><?php echo @_BANNERS_ID; ?>
 <?php echo $this->_tpl_vars['banner']['bid']; ?>
</th>
				<tr>
					<td class="head width50">
					<div><?php echo $this->_tpl_vars['banner']['sendstats']; ?>
</div>
					<div><?php echo $this->_tpl_vars['banner']['bannerpoints']; ?>
</div>
					<?php if (! $this->_tpl_vars['banner']['htmlbanner']): ?>
					<div></div>
					<div><?php echo @_BANNERS_URL; ?>

						<input type="text" name="url" size="50" maxlength="200" value="<?php echo $this->_tpl_vars['banner']['clickurl']; ?>
" />
						<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['banner']['bid']; ?>
" />
						<input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['banner']['cid']; ?>
" />
						<input type="submit" name="op" value="save" />
						<?php echo $this->_tpl_vars['TOKEN']; ?>

					</div>
					<?php endif; ?>
					</td>
					<td class="even txtcenter"><?php echo $this->_tpl_vars['banner']['banner_url']; ?>
</td>
				</tr>
				<tr>
					<td class="head" colspan="2">&nbsp;</td>
				</tr>
			</table>
			<br />
		</form>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>