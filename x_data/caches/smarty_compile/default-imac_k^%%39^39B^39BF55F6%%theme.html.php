<?php /* Smarty version 2.6.19, created on 2008-12-23 23:07:34
         compiled from /home/kmc/www/themes/imac_k/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<!-- Theme by aph3x http://www.aphexthemes.com -->
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

	<!-- Docking boxes (dbx) by Brothercake - http://www.brothercake.com/ -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/dbx.js"></script>

	<!-- dbx configuration script -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/dbx-key.js"></script>

<!-- RMV: added module header -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>

<script type="text/javascript">
<!--
<?php echo $this->_tpl_vars['xoops_js']; ?>

//-->
</script>
<!--[if lt IE 7]>
 <style type="text/css">
 img { behavior: url(<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/iepngfix.htc) }
 </style>
<![endif]-->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/interface.js"></script>

</head>
<body>

<table class="toptable" cellspacing="0">
<tr>
		<td>
	<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/imac_01.png" width="1000" height="255" alt="">
	</td>
	</tr>
  </table>
<tr>
<td>
<div style="width:1000px;margin-right: auto;margin-left: auto;margin-top: -3px;background-image: url(<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/imac_02.png);">	
<div>
  		<table class="maintable" cellspacing="0">
  <tr>
    <td id="leftcolumn">
 <div id="left-outer">
<div class="dbx-group" id="left">
       <!-- Start left blocks loop -->
 <br />
   <?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
 <div class="dbx-box">   
<h3 class="dbx-handle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h3>
<div class="dbx-content"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
  <br />  </div>
  <?php endforeach; endif; unset($_from); ?>
   </div>
   </div>
   <!-- End left blocks loop -->

      </td>

      <td id="centercolumn">
        <!-- Display center blocks if any -->
        <?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
        <table cellspacing="0" width="100%">
		<tr>
			<td id="centerCcolumn" colspan="2">
			<!-- Start center-center blocks loop -->
			<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
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
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
			<?php endforeach; endif; unset($_from); ?>
			<!-- End center-left blocks loop -->
			</td>
			<td id="centerRcolumn">		
			<!-- Start center-right blocks loop -->
			<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
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
?>
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
			<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['xoBlocks']['page_bottomleft'] || $this->_tpl_vars['xoBlocks']['page_bottomright']): ?>
		<tr>
			<td id="bottomLcolumn">
				<?php $_from = $this->_tpl_vars['xoBlocks']['page_bottomleft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
				<?php endforeach; endif; unset($_from); ?>
			</td>
			<td id="bottomRcolumn">
				<?php $_from = $this->_tpl_vars['xoBlocks']['page_bottomright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
    <div class="blockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</div>
    <div class="blockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
		<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
        <?php endif; ?>
        </table>
        <?php endif; ?>
      </td>
      <?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
      <td id="rightcolumn">
        <!-- Start right blocks loop -->
  <br />
 <div id="left-outer">
<div class="dbx-group" id="right">
        <?php $_from = $this->_tpl_vars['xoops_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
 <div class="dbx-box">   
<h3 class="dbx-handle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h3>
<div class="dbx-content"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
  <br />  </div>
   <?php endforeach; endif; unset($_from); ?>
</div>
</div>
     <!-- End right blocks loop -->
      </td>
      <?php endif; ?>
    </tr>
  </table>
</div>
</div>
</td>
</tr>
 <table class="footertable" cellspacing="0">
	<tr>

		<td>

	<div id="fisheye2" class="fisheye">
		<div class="fisheyeContainter">
  <a class="fisheyeItem2" href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/home.png" alt="home" /><span>Home</span></a> 
  <a class="fisheyeItem2" href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/forum.png" alt="forums" /><span>Forums</span></a> 
  <a class="fisheyeItem2" href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/news.png" alt="news" /><span>News</span></a> 
  <a class="fisheyeItem2" href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/link.png" alt="links" /><span>Links</span></a> 
  <a class="fisheyeItem2" href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/contact.png" alt="contact" /><span>Contact</span></a> 
  </div>
</div>
<!--dock menu JS options -->
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#fisheye2').Fisheye(
				{
					maxWidth: 60,
					items: 'a',
					itemsText: 'span',
					container: '.fisheyeContainter',
					itemWidth: 40,
					proximity: 80,
					alignment : 'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);

</script><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
visual/imac_03.png" width="1000" height="61" alt="">
</td></tr>
 </table>
 </body>
</html>