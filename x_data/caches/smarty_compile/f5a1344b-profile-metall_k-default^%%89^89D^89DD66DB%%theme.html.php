<?php /* Smarty version 2.6.26, created on 2013-01-16 20:10:32
         compiled from /home/kmc/www/themes/metall_k/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
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
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="SHORTCUT ICON" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />
<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
</head>
<body>
<br />
  		<table class="toptable" cellspacing="0">
    		<tr>
      		<td id="headerleft"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/header_01.gif" width="59" height="135" alt="" /></td>
      		<td id="headerbanner">
                      <div>
				<div class="styleSite"> <?php echo $this->_tpl_vars['xoops_sitename']; ?>
</div>
                        <div class="styleTitle"><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</div>
			    </div>
		</td>
    		<td id="headerright" align="right"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/header_05.gif" width="75" height="135" alt="" /></td>
		</tr>
  		</table>
 <br /> 
<table class="maintable" cellspacing="0">
    <tr>
      <td id="leftcolumn">
        <!-- Start left blocks loop -->
        <?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockleft.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; endif; unset($_from); ?>
<!-- End left blocks loop -->

      </td>

      <td id="centercolumn">
        <!-- Display center blocks if any -->
        <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
        <table cellspacing="0">
		<tr>
			<td id="centerCcolumn" colspan="2">
			<!-- Start center-center blocks loop -->
			<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
			<!-- End center-center blocks loop -->
			</td>
		</tr>
		<tr>
			<td id="centerLcolumn">		
			<!-- Start center-left blocks loop -->
			<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
			<!-- End center-left blocks loop -->
			</td>
			<td id="centerRcolumn">		
			<!-- Start center-right blocks loop -->
			<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
			<!-- End center-right blocks loop -->
			</td>
		</tr>
        </table>
        <?php endif; ?>
        <!-- End display center blocks -->
        <div id="content">
          <?php echo $this->_tpl_vars['xoops_contents']; ?>

        </div>
        <?php if ($this->_tpl_vars['xoBlocks']['page_bottomleft'] || $this->_tpl_vars['xoBlocks']['page_bottomright'] || $this->_tpl_vars['xoBlocks']['page_bottomcenter']): ?>
        <table cellspacing="0">
        <?php if ($this->_tpl_vars['xoBlocks']['page_bottomcenter']): ?>
		<tr><td id="bottomCcolumn" colspan="2">
			<?php $_from = $this->_tpl_vars['xoBlocks']['page_bottomcenter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['xoBlocks']['page_bottomleft'] || $this->_tpl_vars['xoBlocks']['page_bottomright']): ?>
		<tr>
			<td id="bottomLcolumn">
				<?php $_from = $this->_tpl_vars['xoBlocks']['page_bottomleft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endforeach; endif; unset($_from); ?>
			</td>
			<td id="bottomRcolumn">
				<?php $_from = $this->_tpl_vars['xoBlocks']['page_bottomright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockcenter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
        <?php endif; ?>
        </table>
        <?php endif; ?>
      </td>
      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
      <td id="rightcolumn">
        <!-- Start right blocks loop -->
        <?php $_from = $this->_tpl_vars['xoops_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "metall_k/theme_blockleft.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endforeach; endif; unset($_from); ?>
        <!-- End right blocks loop -->
      </td>
      <?php endif; ?>
    </tr>
  </table>

  		<table class="footertable" cellspacing="0">
    		<tr>
          		<td id="footerbar">
					<?php echo $this->_tpl_vars['xoops_footer']; ?>

				</td>
    		</tr>
  		</table>
</body>
</html>