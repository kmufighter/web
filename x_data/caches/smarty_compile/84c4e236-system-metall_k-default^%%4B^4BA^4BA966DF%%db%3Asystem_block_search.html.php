<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:14
         compiled from db:system_block_search.html */ ?>
<div class="txtcenter">
<form style="margin-top: 0;" action="<?php echo 'http://dlearn2.kmu.edu.tw/search.php'; ?>" method="get">
  <input type="text" name="query" size="14" />
  <input type="hidden" name="action" value="results" /><br />
  <input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_search']; ?>
" />
</form>
<a href="<?php echo 'http://dlearn2.kmu.edu.tw/search.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_advsearch']; ?>
"><?php echo $this->_tpl_vars['block']['lang_advsearch']; ?>
</a>
</div>