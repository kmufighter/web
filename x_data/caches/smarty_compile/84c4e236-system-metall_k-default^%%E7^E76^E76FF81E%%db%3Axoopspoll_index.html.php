<?php /* Smarty version 2.6.26, created on 2013-01-16 16:51:19
         compiled from db:xoopspoll_index.html */ ?>
<h4><?php echo $this->_tpl_vars['lang_pollslist']; ?>
</h4>

<table width="100%" class="outer" cellspacing='1'>
  <tr>
    <th><?php echo $this->_tpl_vars['lang_pollquestion']; ?>
</th>
    <th align='center'><?php echo $this->_tpl_vars['lang_pollvoters']; ?>
</th>
    <th align='center'><?php echo $this->_tpl_vars['lang_votes']; ?>
</th>
    <th align='center'><?php echo $this->_tpl_vars['lang_expiration']; ?>
</th>
    <th>&nbsp;</th>
  </tr>

<!-- start polls item loop -->
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['polls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr>
    <td class="even"><?php echo $this->_tpl_vars['polls'][$this->_sections['i']['index']]['pollQuestion']; ?>
</td>
    <td align="center" class="odd"><?php echo $this->_tpl_vars['polls'][$this->_sections['i']['index']]['pollVoters']; ?>
</td>
    <td align="center" class="even"><?php echo $this->_tpl_vars['polls'][$this->_sections['i']['index']]['pollVotes']; ?>
</td>
    <td align="center" class="odd"><?php echo $this->_tpl_vars['polls'][$this->_sections['i']['index']]['pollEnd']; ?>
</td>
    <td align="right" class="even"><a href="pollresults.php?poll_id=<?php echo $this->_tpl_vars['polls'][$this->_sections['i']['index']]['pollId']; ?>
"><?php echo $this->_tpl_vars['lang_results']; ?>
</a></td>
  </tr>
<?php endfor; endif; ?>
<!-- end polls item loop -->

</table>