<?php /* Smarty version 2.6.19, created on 2008-12-23 22:13:26
         compiled from db:xoopspoll_view.html */ ?>
<form action="<?php echo $this->_tpl_vars['poll']['action']; ?>
" method="post">
  <table width="100%" class="outer" cellspacing="1">
    <tr>
      <th align="center" colspan="2"><input type="hidden" name="poll_id" value="<?php echo $this->_tpl_vars['poll']['pollId']; ?>
" /><?php echo $this->_tpl_vars['poll']['question']; ?>
</th>
    </tr>

    <?php $_from = $this->_tpl_vars['poll']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
	<tr>
      <td class="even" align="left" width="2%"><?php echo $this->_tpl_vars['option']['input']; ?>
</td>
      <td class="odd" align="left" width="98%"><?php echo $this->_tpl_vars['option']['text']; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>

	<tr>
      <td align="center" colspan="2" class="foot"><input type="submit" value="<?php echo $this->_tpl_vars['lang_vote']; ?>
" />&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['lang_results']; ?>
" onclick="location='<?php echo $this->_tpl_vars['poll']['viewresults']; ?>
'" /></td>
    </tr>
  </table>
</form>