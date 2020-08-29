<?php /* Smarty version 2.6.26, created on 2013-01-16 16:54:39
         compiled from db:newbb_block.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:newbb_block.html', 13, false),)), $this); ?>
<table class="outer" cellspacing="1">

  <?php if ($this->_tpl_vars['block']['disp_mode'] == 0): ?>
  <tr>
    <th class="head" nowrap="nowrap"><?php echo @_MB_NEWBB_FORUM; ?>
</th>
    <th class="head" nowrap="nowrap"><?php echo @_MB_NEWBB_TOPIC; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_NEWBB_RPLS; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_NEWBB_VIEWS; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_NEWBB_LPOST; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewforum.php?forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
"><?php echo $this->_tpl_vars['topic']['forum_name']; ?>
</a></td>
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
">
		<?php if ($this->_tpl_vars['topic']['topic_subject']): ?>
		<?php echo $this->_tpl_vars['topic']['topic_subject']; ?>

		<?php endif; ?>
		<?php echo $this->_tpl_vars['topic']['title']; ?>
</a><?php echo $this->_tpl_vars['topic']['topic_page_jump']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['topic']['replies']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['topic']['views']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['topic']['time']; ?>
<br /><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php elseif ($this->_tpl_vars['block']['disp_mode'] == 1): ?>

  <tr>
    <th class="head" nowrap="nowrap"><?php echo @_MB_NEWBB_TOPIC; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_NEWBB_RPLS; ?>
</th>
    <th class="head" align="center" nowrap="nowrap"><?php echo @_MB_NEWBB_LPOST; ?>
</th>
  </tr>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></td>
    <td align="center"><?php echo $this->_tpl_vars['topic']['replies']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['topic']['time']; ?>
<br /><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php elseif ($this->_tpl_vars['block']['disp_mode'] == 2): ?>

  <?php $_from = $this->_tpl_vars['block']['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['topic']['forum_id']; ?>
&amp;post_id=<?php echo $this->_tpl_vars['topic']['post_id']; ?>
#forumpost<?php echo $this->_tpl_vars['topic']['post_id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>

  <?php endif; ?>

</table>

<?php if ($this->_tpl_vars['block']['indexNav']): ?>
<div style="text-align:right; padding: 5px;">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewpost.php"><?php echo @_MB_NEWBB_ALLPOSTS; ?>
</a> |
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/viewall.php"><?php echo @_MB_NEWBB_ALLTOPICS; ?>
</a> |
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb/"><?php echo @_MB_NEWBB_VSTFRMS; ?>
</a>
</div>
<?php endif; ?>