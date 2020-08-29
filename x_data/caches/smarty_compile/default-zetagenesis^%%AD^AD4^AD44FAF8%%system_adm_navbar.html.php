<?php /* Smarty version 2.6.19, created on 2008-12-23 21:31:13
         compiled from /home/kmc/www/modules/system/class/gui/exm/templates/admin/system_adm_navbar.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/home/kmc/www/modules/system/class/gui/exm/templates/admin/system_adm_navbar.html', 23, false),)), $this); ?>
<div id="logoHead">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td align="left">
        <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
" title="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/logo.jpg" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" /></a>
    </td>
    <td align="right">
        <a href="http://www.xoops.org" rel="external" title="Powered by XOOPS"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/poweredby.jpg" alt="Powered by XOOPS" /></a>
    </td>
</tr>
</table>
</div>

<!-- get the Menu Items with icons -->

<div id="navbarCP">
    <ul id="nav">
        <?php $_from = $this->_tpl_vars['navitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <li><a href="<?php echo $this->_tpl_vars['item']['link']; ?>
"><?php echo $this->_tpl_vars['item']['text']; ?>
</a>
                <ul>
                    <?php $_from = $this->_tpl_vars['item']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
                        <li>
                            <a href="<?php echo $this->_tpl_vars['sub']['link']; ?>
" style='background-image: url(<?php echo ((is_array($_tmp=@$this->_tpl_vars['sub']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/navIcons/item.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/navIcons/item.png")); ?>
);'>
                            <?php echo $this->_tpl_vars['sub']['title']; ?>

                            </a>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>

<!-- get the toolbar icons -->

<div id="navOptionsCP">
    <div class="modname">
        <?php echo $this->_tpl_vars['modname']; ?>

    </div>
    <?php $_from = $this->_tpl_vars['mod_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['op']):
?>
        <a href="<?php echo $this->_tpl_vars['op']['link']; ?>
" title="<?php echo $this->_tpl_vars['op']['title']; ?>
">
            <img src='<?php echo ((is_array($_tmp=@$this->_tpl_vars['op']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/icon_options.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['xoops_url'])."/modules/system/class/gui/exm/images/icon_options.png")); ?>
' alt="<?php echo $this->_tpl_vars['op']['title']; ?>
" />
        </a>
    <?php endforeach; endif; unset($_from); ?>
    
    <?php if ($this->_tpl_vars['moddir'] != 'system' && $this->_tpl_vars['mod_options']): ?>
        <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=<?php echo $this->_tpl_vars['modid']; ?>
" title="<?php echo $this->_tpl_vars['lang_preferences']; ?>
">
            <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/images/navIcons/prefs.png" alt="<?php echo $this->_tpl_vars['lang_preferences']; ?>
" />
        </a>
    <?php endif; ?>
    
</div>