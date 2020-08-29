<?php /* Smarty version 2.6.19, created on 2008-12-23 22:47:09
         compiled from /home/kmc/www/modules/system/class/gui/exm/templates/admin/system_indexcp.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/home/kmc/www/modules/system/class/gui/exm/templates/admin/system_indexcp.html', 43, false),)), $this); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="60%" class="CPindexOptions">
	<div class="CPbigTitle" style="background-image: url(<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
modules/system/class/gui/exm/images/cp.png); "><?php echo $this->_tpl_vars['lang_cp']; ?>
</div><br />
	<!-- <div class="CPmediumTitle"><?php echo $this->_tpl_vars['system_options']; ?>
</div><br /> -->
	<div class="cpicon">
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=banners"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/banners.png" />
		<span><?php echo $this->_tpl_vars['lang_banners']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=blocksadmin"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/blocks.png" />
		<span><?php echo $this->_tpl_vars['lang_blocks']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=groups"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/groups.png" />
		<span><?php echo $this->_tpl_vars['lang_groups']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=images"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/images.png" />
		<span><?php echo $this->_tpl_vars['lang_images']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=modulesadmin"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/modules.png" />
		<span><?php echo $this->_tpl_vars['lang_modules']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=preferences"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/prefs.png" />
		<span><?php echo $this->_tpl_vars['lang_preferences']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=smilies"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/smilie.png" />
		<span><?php echo $this->_tpl_vars['lang_smilies']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=userrank"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/ranks.png" />
		<span><?php echo $this->_tpl_vars['lang_ranks']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=users"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/edituser.png" />
		<span><?php echo $this->_tpl_vars['lang_edituser']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=findusers"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/finduser.png" />
		<span><?php echo $this->_tpl_vars['lang_finduser']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=mailusers"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/mailuser.png" />
		<span><?php echo $this->_tpl_vars['lang_mailuser']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=avatars"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/avatar.png" />
		<span><?php echo $this->_tpl_vars['lang_avatars']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=tplsets"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/tpls.png" />
		<span><?php echo $this->_tpl_vars['lang_tpls']; ?>
</span></a>
		<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=comments"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/comments.png" />
		<span><?php echo $this->_tpl_vars['lang_comments']; ?>
</span></a>
	</div>
	</td>
    <td width="20">&nbsp;</td>
    <td width="48%" class="CPindexOptions">
		<div class="CPbigTitle" style="background-image: url(<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
modules/system/class/gui/exm/images/modules.png)"><?php echo $this->_tpl_vars['lang_insmodules']; ?>
</div><br />
		<div class="cpicon">
			<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mod']):
?>
				<a href="<?php echo $this->_tpl_vars['mod']['link']; ?>
" title="<?php echo $this->_tpl_vars['mod']['title']; ?>
">
				    <img src='<?php echo ((is_array($_tmp=@$this->_tpl_vars['mod']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/modules.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/modules.png")); ?>
' alt="<?php echo $this->_tpl_vars['mod']['title']; ?>
" />
				    <span><?php echo $this->_tpl_vars['mod']['title']; ?>
</span>
		        </a>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</td>
  </tr>
</table>