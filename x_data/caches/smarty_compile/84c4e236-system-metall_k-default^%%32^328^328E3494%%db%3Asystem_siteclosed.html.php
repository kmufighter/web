<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:09
         compiled from db:system_siteclosed.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
	<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
	<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_slogan']; ?>
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
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://dlearn2.kmu.edu.tw/browse.php?xoops.css'; ?>" />
	<link rel="shortcut icon" type="image/ico" href="<?php echo 'http://dlearn2.kmu.edu.tw/favicon.ico'; ?>" />
	
</head>
<body>
  <table class="collapse">
    <tr id="header">
      <td class="alignmiddle txtcenter" style="width: 150px; background-color: #2F5376;"><a href="<?php echo 'http://dlearn2.kmu.edu.tw/'; ?>" title=""><img src="<?php echo 'http://dlearn2.kmu.edu.tw/images/logo.gif'; ?>" alt="" /></a></td>
      <td class="width100 alignmiddle txtcenter" style="background-color: #2F5376;">&nbsp;</td>
    </tr>
    <tr>
      <td style="height: 8px; border-bottom: 1px solid silver; background-color: #ddd;" colspan="2">&nbsp;</td>
    </tr>
  </table>

  <table class="width80 txtcenter bnone" cellspacing="1" cellpadding="10">
    <tr>
      <td class="txtcenter"><div class="txtcenter bold" style="background-color: #DDFFDF; color: #136C99; border-top: 1px solid #DDDDFF; border-left: 1px solid #DDDDFF; border-right: 1px solid #aaa; border-bottom: 1px solid #aaa; padding: 10px;"><?php echo $this->_tpl_vars['lang_siteclosemsg']; ?>
</div></td>
    </tr>
  </table>
  
  <form action="<?php echo 'http://dlearn2.kmu.edu.tw/user.php'; ?>" method="post">
    <table class="collapse txtcenter solidsilver" style="width: 200px;">
      <tr>
        <th class="alignmiddle pad2 white" style="background-color: #2F5376;" colspan="2"><?php echo $this->_tpl_vars['lang_login']; ?>
</th>
      </tr>
      <tr>
        <td class="pad2"><?php echo $this->_tpl_vars['lang_username']; ?>
</td><td class="pad2"><input type="text" name="uname" size="12" value="" /></td>
      </tr>
      <tr>
        <td class="pad2"><?php echo $this->_tpl_vars['lang_password']; ?>
</td><td class="pad2"><input type="password" name="pass" size="12" /></td>
      </tr>
      <tr>
        <td class="pad2">&nbsp;</td>
        <td class="pad2">
        	<input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
        	<input type="hidden" name="xoops_login" value="1" />
        	<input type="submit" value="<?php echo $this->_tpl_vars['lang_login']; ?>
" /></td>
      </tr>
    </table>
  </form>

  <table class="collapse width100">
    <tr>
      <td style="height:8px; border-bottom: 1px solid silver; border-top: 1px solid silver; background-color: #ddd;" colspan="2">&nbsp;</td>
    </tr>
  </table>

  </body>
</html>