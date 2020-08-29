<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:10
         compiled from db:system_banner.html */ ?>
<h1><?php echo @_BANNERS_MANAGEMENT; ?>
</h1>
<h5><?php echo $this->_tpl_vars['welcomeuser']; ?>
</h5>
<div class="txtcenter"><a href="banners.php?op=logout" title="<?php echo @_BANNERS_LOGOUT; ?>
"><?php echo @_BANNERS_LOGOUT; ?>
</a></div>
<h4 class="content_title"><?php echo @_BANNERS_TITLE; ?>
</h4>
<table cellpadding="2" cellspacing="1" summary="" class="outer">
	<tr class="txtcenter">
		<th><?php echo @_BANNERS_NO; ?>
</th>
		<th><?php echo @_BANNERS_IMP_MADE; ?>
</th>
		<th><?php echo @_BANNERS_IMP_TOTAL; ?>
</th>
		<th><?php echo @_BANNERS_IMP_LEFT; ?>
</th>
		<th><?php echo @_BANNERS_CLICKS; ?>
</th>
		<th><?php echo @_BANNERS_PER_CLICKS; ?>
</th>
		<th><?php echo @_BANNERS_FUNCTIONS; ?>
</th>
	</tr>
	<?php if ($this->_tpl_vars['bcount']): ?>
		<?php $_from = $this->_tpl_vars['banners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
			<tr class="even txtcenter">
				<td><?php echo $this->_tpl_vars['banner']['bid']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['banner']['impmade']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['banner']['imptotal']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['banner']['left']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['banner']['clicks']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['banner']['percent']; ?>
%</td>
			    <td>
					<a href="banners.php?op=banner_email&amp;cid=<?php echo $this->_tpl_vars['banner']['cid']; ?>
&amp;bid=<?php echo $this->_tpl_vars['banner']['bid']; ?>
" title="<?php echo @_BANNERS_STATS; ?>
"><?php echo @_BANNERS_STATS; ?>
</a>
			        <a href="banners.php?op=banner_display&amp;cid=<?php echo $this->_tpl_vars['banner']['cid']; ?>
" title="<?php echo $this->_tpl_vars['banner']['bid']; ?>
"><?php echo @_BANNERS_SHOWBANNER; ?>
</a>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<tr>
			<td class="even txtcenter" colspan="7"><?php echo @_BANNERS_NOTHINGFOUND; ?>
</td>
		</tr>
	<?php endif; ?>
	<tr>
		<td class="head" colspan="7">&nbsp;</td>
	</tr>
</table><br /><br />

<h4 class="content_title"><?php echo @_BANNERS_FINISHED; ?>
</h4>

<table cellpadding="2" cellspacing="1" summary="" class="outer">
	<tr class="txtcenter">
		<th><?php echo @_BANNERS_NO; ?>
</th>
		<th><?php echo @_BANNERS_IMP_MADE; ?>
</th>
		<th><?php echo @_BANNERS_CLICKS; ?>
</th>
		<th><?php echo @_BANNERS_PER_CLICKS; ?>
</th>
		<th><?php echo @_BANNERS_STARTED; ?>
</th>
		<th><?php echo @_BANNERS_ENDED; ?>
</th>
	</tr>
	<?php if ($this->_tpl_vars['bcount']): ?>
		<?php $_from = $this->_tpl_vars['ebanners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ebanner']):
?>
			<tr class="even txtcenter">
				<td><?php echo $this->_tpl_vars['ebanner']['bid']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['ebanner']['impressions']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['ebanner']['clicks']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['ebanner']['percent']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['ebanner']['datestart']; ?>
</td>
			    <td><?php echo $this->_tpl_vars['ebanner']['dateend']; ?>
%</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<tr>
			<td class="even txtcenter" colspan="7"><?php echo @_BANNERS_NOTHINGFOUND; ?>
</td>
		</tr>
	<?php endif; ?>
	<tr>
		<td class="head" colspan="7">&nbsp;</td>
	</tr>
</table><br />