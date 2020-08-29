<?php /* Smarty version 2.6.19, created on 2008-12-23 21:47:22
         compiled from zetagenesis/xotpl/xometas.html */ ?>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="XOOPS" />
<?php if ($this->_tpl_vars['url']): ?>
	<meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
" />
<?php endif; ?>

<?php if ($this->_tpl_vars['isMsie']): ?>
	<noscript>
	<meta http-equiv="refresh" content="0; url=<?php echo htmlspecialchars( $GLOBALS['xoops']->buildUrl( $_SERVER['REQUEST_URI'], array(
'xoops_theme_select' => 'default',
) ) ); ?>" />
	</noscript>
<?php endif; ?>

<link rel="alternate" type="application/rss+xml" title="<?php echo @THEME_RSS; ?>
" href="<?php echo 'http://kmc.club.kmu.edu.tw/backend.php'; ?>" />

<link rel="shortcut icon" type="image/ico" href="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/favicon.ico'; ?>" />
<link rel="icon" type="image/png" href="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/icons/icon.png'; ?>" />


<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://kmc.club.kmu.edu.tw/xoops.css'; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/css/layout-soup.css'; ?>" />
<link rel="stylesheet" type="text/css" media="all" title="Color" href="<?php 
echo 'http://kmc.club.kmu.edu.tw/themes/zetagenesis/css/style.css'; ?>" />

<?php echo $this->_tpl_vars['xoops_module_header']; ?>