<?php /* Smarty version 2.6.19, created on 2009-01-20 15:43:59
         compiled from db:xpress_single.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'db:xpress_single.html', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['moduleConfig']['use_wp_themes']): ?>
	<?php echo $this->_tpl_vars['wp_content']['theme_body']; ?>

<?php else: ?>
<table>

<tr>

	<td>
		<div id="wp-header">
			<div style="wp-hd-title">
					<h2><a href="<?php echo $this->_tpl_vars['wp_content']['home_url']; ?>
/"><?php echo $this->_tpl_vars['wp_content']['home_name']; ?>
</a></h2>
			</div>
			<div class="wp-description">
				<?php echo $this->_tpl_vars['wp_content']['home_description']; ?>

			</div>
			<div class="wp-navigation">
					<a href="<?php echo $this->_tpl_vars['wp_content']['home_url']; ?>
/"><?php echo @_MD_XPRESS_HOMEPAGE; ?>
</a>
					<?php if ($this->_tpl_vars['wp_content']['author_id']): ?>
						| <a href="<?php echo $this->_tpl_vars['wp_content']['home_url']; ?>
/?author=<?php echo $this->_tpl_vars['wp_content']['author_id']; ?>
"><?php echo ((is_array($_tmp=@_MD_XPRESS_AUTHORPAGE)) ? $this->_run_mod_handler('replace', true, $_tmp, '%s', $this->_tpl_vars['wp_content']['author_name']) : smarty_modifier_replace($_tmp, '%s', $this->_tpl_vars['wp_content']['author_name'])); ?>
</a> |
					<?php endif; ?>
					<?php echo $this->_tpl_vars['wp_content']['post_new_url']; ?>

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
			<?php if ($this->_tpl_vars['wp_content']['title']): ?>
			<div style="padding: 0 5px; font-size: 90%;"><?php echo $this->_tpl_vars['wp_content']['title']; ?>
</div>
			<?php endif; ?>
			
			<div class="wp-page-nav" style="text-align:right">
				<?php echo $this->_tpl_vars['wp_content']['page_nav']; ?>

			</div>


			<?php $_from = $this->_tpl_vars['wp_content']['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
			<div class="wp-post">
			
				<?php if ($this->_tpl_vars['post']['right_post_link'] || $this->_tpl_vars['post']['left_post_link']): ?>
					<div class="wp-post-nav">
						<div class="alignleft"><?php echo $this->_tpl_vars['post']['left_post_link']; ?>
</div>
						<div class="alignright"><?php echo $this->_tpl_vars['post']['right_post_link']; ?>
</div>
					</div>
				<?php endif; ?>
			
				
				<div class="wp-post" id="post-<?php echo $this->_tpl_vars['post']['id']; ?>
">
					<div>
						<?php echo $this->_tpl_vars['post']['hotdate']; ?>

						<div class="wp-post-title">
							<a href="<?php echo $this->_tpl_vars['post']['link']; ?>
" rel="bookmark" title="Permanent Link to <?php echo $this->_tpl_vars['post']['title']; ?>
"><?php echo $this->_tpl_vars['post']['title']; ?>
</a>
						</div>
					</div>
					<div class="wp-post-entry">
						<?php echo $this->_tpl_vars['post']['content']; ?>

					</div>
					
					<div class="wp-post-meta"  style="text-align:right">
							<?php echo $this->_tpl_vars['post']['time']; ?>
 &#8212; <?php echo $this->_tpl_vars['post']['author']; ?>
 (<?php echo $this->_tpl_vars['post']['views']; ?>
) &nbsp
							<strong>|</strong><?php echo $this->_tpl_vars['wp_content']['lang_under']; ?>
 <?php echo $this->_tpl_vars['post']['category']; ?>
 
							<?php if ($this->_tpl_vars['post']['edit']): ?> <strong>|</strong> <?php echo $this->_tpl_vars['post']['edit']; ?>
 <?php endif; ?> 
							<?php if ($this->_tpl_vars['post']['posts_truckback']): ?> <strong>|</strong> <?php echo $this->_tpl_vars['post']['posts_truckback']; ?>
 <?php endif; ?>
							<strong>|</strong> <?php echo $this->_tpl_vars['post']['comment']; ?>

					</div>					
					
				</div>
				<?php echo $this->_tpl_vars['post']['truckbacks']; ?>

				<?php echo $this->_tpl_vars['post']['comments']; ?>


				<?php if ($this->_tpl_vars['post']['right_post_link'] || $this->_tpl_vars['post']['left_post_link']): ?>
					<div class="wp-post-nav">
						<div class="alignleft"><?php echo $this->_tpl_vars['post']['left_post_link']; ?>
</div>
						<div class="alignright"><?php echo $this->_tpl_vars['post']['right_post_link']; ?>
</div>
					</div>
				<?php endif; ?>
				
			</div>
			<?php endforeach; endif; unset($_from); ?>
			
		
			<div class="wp-page-nav"  style="text-align:right">
				<?php echo $this->_tpl_vars['wp_content']['page_nav']; ?>

			</div>
			
			<HR>
			<div class="blog-rss"  style="text-align:right">
				<?php echo $this->_tpl_vars['wp_content']['blog_post_rss2']; ?>

			</div>
			
			<div class="credit"  style="text-align:center">
				<?php echo $this->_tpl_vars['wp_content']['credit']; ?>
 (<?php echo $this->_tpl_vars['wp_content']['html_convert_time']; ?>
)
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