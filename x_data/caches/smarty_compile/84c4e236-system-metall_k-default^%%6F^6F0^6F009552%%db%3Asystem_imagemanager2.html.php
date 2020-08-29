<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:08
         compiled from db:system_imagemanager2.html */ ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 <?php echo $this->_tpl_vars['lang_imgmanager']; ?>
</title>
<?php echo $this->_tpl_vars['image_form']['javascript']; ?>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://dlearn2.kmu.edu.tw/xoops.css'; ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://dlearn2.kmu.edu.tw/modules/system/css/imagemanager.css'; ?>" />

<?php  
$language = $GLOBALS['xoopsConfig']['language'];
if(file_exists(XOOPS_ROOT_PATH.'/language/'.$language.'/style.css')){ 
echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"language/$language/style.css\" />";
}
 ?>

</head>

<body onload="window.resizeTo(<?php echo $this->_tpl_vars['xsize']; ?>
, <?php echo $this->_tpl_vars['ysize']; ?>
);">
   <table cellspacing="0" id="imagenav">
    <tr>
      <td id="addimage" class="txtleft"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/imagemanager.php?target=<?php echo $this->_tpl_vars['target']; ?>
&amp;cat_id=<?php echo $this->_tpl_vars['show_cat']; ?>
" title="<?php echo $this->_tpl_vars['lang_imgmanager']; ?>
"><?php echo $this->_tpl_vars['lang_imgmanager']; ?>
</a></td>
    </tr>
  </table>

  <form name="<?php echo $this->_tpl_vars['image_form']['name']; ?>
" id="<?php echo $this->_tpl_vars['image_form']['name']; ?>
" action="<?php echo $this->_tpl_vars['image_form']['action']; ?>
" method="<?php echo $this->_tpl_vars['image_form']['method']; ?>
" <?php echo $this->_tpl_vars['image_form']['extra']; ?>
>
    <table id="imageform" cellspacing="">
    <!-- start of form elements loop -->
    <?php $_from = $this->_tpl_vars['image_form']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
      <?php if ($this->_tpl_vars['element']['hidden'] != true): ?>
      <tr class="aligntop">
        <td class="caption"><?php echo $this->_tpl_vars['element']['caption']; ?>
</td>
        <td class="body"><?php echo $this->_tpl_vars['element']['body']; ?>
</td>
      </tr>
      <?php else: ?>
      <?php echo $this->_tpl_vars['element']['body']; ?>

      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <!-- end of form elements loop -->
    </table>
  </form>


  <div id="footer">
    <input value="<?php echo $this->_tpl_vars['lang_close']; ?>
" type="button" onclick="javascript:window.close();" />
  </div>

  </body>
</html>