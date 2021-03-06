<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:08
         compiled from db:system_imagemanager.html */ ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['sitename']; ?>
 <?php echo $this->_tpl_vars['lang_imgmanager']; ?>
</title>
<script type="text/javascript">
<!--//
function appendCode(addCode) {
	var targetDom = window.opener.xoopsGetElementById('<?php echo $this->_tpl_vars['target']; ?>
');
	if (targetDom.createTextRange && targetDom.caretPos){
  		var caretPos = targetDom.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? addCode + ' ' : addCode;  
	} else if (targetDom.getSelection && targetDom.caretPos) {
		var caretPos = targetDom.caretPos;
		caretPos.text = caretPos.text.charat(caretPos.text.length - 1) == ' ' ? addCode + ' ' : addCode;
	} else {
		targetDom.value = targetDom.value + addCode;
  	}
	window.close();
	return;
}
//-->
</script>
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
  <form action="imagemanager.php" method="get">
    <table cellspacing="0" id="imagenav">
      <tr>
        <td>
          <select name="cat_id" onchange="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/imagemanager.php?target=<?php echo $this->_tpl_vars['target']; ?>
&cat_id='+this.options[this.selectedIndex].value"><?php echo $this->_tpl_vars['cat_options']; ?>
</select> 
          <input type="hidden" name="target" value="<?php echo $this->_tpl_vars['target']; ?>
" />
          <input type="submit" value="<?php echo $this->_tpl_vars['lang_go']; ?>
" />
        </td>

        <?php if ($this->_tpl_vars['show_cat'] > 0): ?>
        <td id="addimage" class="txtright"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/imagemanager.php?target=<?php echo $this->_tpl_vars['target']; ?>
&op=upload&imgcat_id=<?php echo $this->_tpl_vars['show_cat']; ?>
" title="<?php echo $this->_tpl_vars['lang_addimage']; ?>
"><?php echo $this->_tpl_vars['lang_addimage']; ?>
</a></td>
        <?php endif; ?>
        
      </tr>
    </table>
  </form>
  <div id="pagenav"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>
  <?php if ($this->_tpl_vars['image_total'] > 0): ?>
  
  <table cellspacing="0" id="imagemain">
    <tr>
      <th><?php echo $this->_tpl_vars['lang_imagename']; ?>
</th>
      <th><?php echo $this->_tpl_vars['lang_image']; ?>
</th>
      <th><?php echo $this->_tpl_vars['lang_imagemime']; ?>
</th>
      <th><?php echo $this->_tpl_vars['lang_align']; ?>
</th>
    </tr>

    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['images']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <tr class="txtcenter">
      <td><input type="hidden" name="image_id[]" value="<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['id']; ?>
" /><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['nicename']; ?>
</td>
      <td><img style="max-width:200px;" src="<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['src']; ?>
" alt="" /></td>
      <td><?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['mimetype']; ?>
</td>
      <td><a href="#" title="" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['lxcode']; ?>
');" title=""><img src="<?php echo 'http://dlearn2.kmu.edu.tw/images/alignleft.gif'; ?>" alt="Left" /></a> <a href="#" title="" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['xcode']; ?>
');" title=""><img src="<?php echo 'http://dlearn2.kmu.edu.tw/images/aligncenter.gif'; ?>" alt="Center" /></a> <a href="#" title="" onclick="javascript:appendCode('<?php echo $this->_tpl_vars['images'][$this->_sections['i']['index']]['rxcode']; ?>
');" title=""><img src="<?php echo 'http://dlearn2.kmu.edu.tw/images/alignright.gif'; ?>" alt="Right" /></a></td>
    </tr>
    <?php endfor; endif; ?>
  </table>
  <?php else: ?>
  <div id="welcomenot"></div>
  <?php endif; ?>

  <div id="pagenav"><?php echo $this->_tpl_vars['pagenav']; ?>
</div>

  <div id="footer">
    <input value="<?php echo $this->_tpl_vars['lang_close']; ?>
" type="button" onclick="javascript:window.close();" />
  </div>

  </body>
</html>