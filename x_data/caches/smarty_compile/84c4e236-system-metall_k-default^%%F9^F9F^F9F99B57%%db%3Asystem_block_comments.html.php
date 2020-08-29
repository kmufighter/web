<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:15
         compiled from db:system_block_comments.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_block_comments.html', 3, false),)), $this); ?>
<table cellspacing="1" class="outer width100">
  <?php $_from = $this->_tpl_vars['block']['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'even,odd'), $this);?>
">
    <td class="txtcenter"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/subject/<?php echo $this->_tpl_vars['comment']['icon']; ?>
" alt="" /></td>
    <td><?php echo $this->_tpl_vars['comment']['title']; ?>
</td>
    <td class="txtcenter"><?php echo $this->_tpl_vars['comment']['module']; ?>
</td>
    <td class="txtcenter"><?php echo $this->_tpl_vars['comment']['poster']; ?>
</td>
    <td class="txtright"><?php echo $this->_tpl_vars['comment']['time']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>