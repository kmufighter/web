<?php /* Smarty version 2.6.26, created on 2013-01-16 16:54:21
         compiled from db:xpress_home.html */ ?>
<?php if ($this->_tpl_vars['moduleConfig']['use_wp_themes']): ?>
	<?php echo $this->_tpl_vars['wp_content']['theme_body']; ?>

<?php else: ?>
<table>

<tr>
	<td>
		<div id="wp-header">
			<div style="wp-hd-title">
					<h2><a href="<?php echo $this->_tpl_vars['authors']['home_url']; ?>
/"><?php echo $this->_tpl_vars['authors']['home_name']; ?>
</a></h2>
			</div>
			<div class="wp-description">
				<?php echo $this->_tpl_vars['authors']['home_description']; ?>

			</div>
		</div>
	</td>
</tr>

<tr>
	<td class="wp-delimiter-horizontal">
	&nbsp;
	</td>
</tr>

<tr>
	<td>
		<div id="wp-content">
			<div style="margin: 15px;"><h2><?php echo @_MD_XPRESS_RECENT_AUTHORS; ?>
</h2></div>
			<?php $_from = $this->_tpl_vars['authors']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
			<div style="margin: 10px 10px;">
				<?php if ($this->_tpl_vars['author']['image']): ?>
				<div style="float: left; font-size: small; margin: 0px 10px 10px 0px;">
					<a href="<?php echo $this->_tpl_vars['author']['link']; ?>
">
						<img src="<?php echo $this->_tpl_vars['author']['image']; ?>
" alt="<?php echo $this->_tpl_vars['author']['name']; ?>
" width="80px" />
					</a>
				</div>
				<?php endif; ?>
				<div style="margin-bottom:5px; font-weight: bold;">
					<h3><a href="<?php echo $this->_tpl_vars['author']['link']; ?>
"><?php echo $this->_tpl_vars['author']['name']; ?>
</a></h3>
				</div>
				<div><?php echo $this->_tpl_vars['author']['desc']; ?>
</div>
				<div style="margin: 5px 0;">
					<?php echo @_MD_XPRESS_COUNT_POSTS; ?>
<a href="<?php echo $this->_tpl_vars['author']['link']; ?>
"><?php echo $this->_tpl_vars['author']['count']; ?>
</a> | <?php echo @_MD_XPRESS_LASTPOST; ?>
<a href="<?php echo $this->_tpl_vars['author']['link']; ?>
"><?php echo $this->_tpl_vars['author']['last']; ?>
</a>
				</div>
				<br style="clear: both;" />
			</div>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			
			<div class="wp-page-nav">
				<?php echo $this->_tpl_vars['authors']['pagenav']; ?>

			</div>
			<HR>
			<div class="wp-credit"  style="text-align:center">
				<?php echo $this->_tpl_vars['authors']['credit']; ?>

			</div>
		</div>
	</td>
</tr>

</table>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>