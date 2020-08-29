<?php /* Smarty version 2.6.19, created on 2008-12-23 22:13:26
         compiled from db:xoopspoll_block_poll.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:xoopspoll_block_poll.html', 9, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['block']['polls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['poll']):
?>
<form style="margin-top: 1px;" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopspoll/index.php" method="post">
<table class="outer" cellspacing="1">
  <tr>
    <th align="center" colspan="2"><input type="hidden" name="poll_id" value="<?php echo $this->_tpl_vars['poll']['id']; ?>
" /><?php echo $this->_tpl_vars['poll']['question']; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['poll']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td align="center"><input type="<?php echo $this->_tpl_vars['poll']['option_type']; ?>
" name="<?php echo $this->_tpl_vars['poll']['option_name']; ?>
" value="<?php echo $this->_tpl_vars['option']['id']; ?>
" /></td>
    <td align="left"><?php echo $this->_tpl_vars['option']['text']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <tr>
    <td class="foot" align="center" colspan="2"><input type="submit" value="<?php echo $this->_tpl_vars['block']['lang_vote']; ?>
" /> <input type="button" value="<?php echo $this->_tpl_vars['block']['lang_results']; ?>
" onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/xoopspoll/pollresults.php?poll_id=<?php echo $this->_tpl_vars['poll']['id']; ?>
'" /></td>
  </tr>
</table>
</form>
<?php endforeach; endif; unset($_from); ?>