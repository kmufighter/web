<?php /* Smarty version 2.6.26, created on 2013-01-16 16:51:19
         compiled from db:xoopspoll_results.html */ ?>
<div style='text-align: center; margin: 3px;'>
<table width="60%" class="outer" cellspacing="1">
  <tr>
    <th colspan="2"><?php echo $this->_tpl_vars['poll']['question']; ?>
</th>
  </tr>
  <tr>
    <td class="head" align="right" colspan="2">
    <?php echo $this->_tpl_vars['poll']['end_text']; ?>

    </td>
  </tr>

  <?php $_from = $this->_tpl_vars['poll']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
  <tr>
    <td class="even" width="30%" align="left">
    <?php echo $this->_tpl_vars['option']['text']; ?>

    </td>
    <td class="odd" width="70%" align="left">
    <?php echo $this->_tpl_vars['option']['image']; ?>
 <?php echo $this->_tpl_vars['option']['percent']; ?>

    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td class="foot" colspan="2" align="center">
      <?php echo $this->_tpl_vars['poll']['totalVotes']; ?>
<br /><?php echo $this->_tpl_vars['poll']['totalVoters']; ?>
<br /><?php echo $this->_tpl_vars['poll']['vote']; ?>

    </td>
  </tr>
</table>
</div>
<br />

<div style="text-align:center; padding: 3px; margin:3px;">
  <?php echo $this->_tpl_vars['commentsnav']; ?>

  <?php echo $this->_tpl_vars['lang_notice']; ?>

</div>

<div style="margin:3px; padding: 3px;">
<!-- start comments loop -->
<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<!-- end comments loop -->
</div>