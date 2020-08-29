<?php /* Smarty version 2.6.19, created on 2008-12-23 21:47:22
         compiled from zetagenesis/xotpl/xobanner_commercial.html */ ?>
<div id="xo-banner" class="commercial">
    <a id="xo-main-logo" class="commercial" href="<?php echo 'http://kmc.club.kmu.edu.tw/'; ?>" title=""><img src="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/img/header-logo_big.png'; ?>" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" /></a>
	<?php if ($this->_tpl_vars['xoops_banner'] && $this->_tpl_vars['xoops_banner'] != '&nbsp;'): ?>
	<div id="xo-banner-ad"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</div>
	<?php endif; ?>
	<!-- include userbar -->
	<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/userbar.html", 'smarty_include_vars' => array()));
 ?>
</div>