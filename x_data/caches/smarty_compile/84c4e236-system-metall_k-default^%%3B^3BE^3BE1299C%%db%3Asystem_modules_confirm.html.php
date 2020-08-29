<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:11
         compiled from db:system_modules_confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_modules_confirm.html', 14, false),)), $this); ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:system_header.html", 'smarty_include_vars' => array()));
 ?>
<?php if ($this->_tpl_vars['modifs_mods']): ?>
<form action="admin.php" method="post">
  <table class="outer" cellspacing="1">
    <thead>
      <tr class="txtcenter">
        <th><?php echo @_AM_SYSTEM_MODULES_MODULE; ?>
</th>
        <th><?php echo @_AM_SYSTEM_MODULES_ACTION; ?>
</th>
        <th><?php echo @_AM_SYSTEM_MODULES_ORDER; ?>
</th>
      </tr>
    </thead>
    <tbody>
      <?php $_from = $this->_tpl_vars['modifs_mods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
      <tr class="txtcenter <?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
        <td>
          <?php echo $this->_tpl_vars['row']['oldname']; ?>

          <?php if ($this->_tpl_vars['row']['oldname'] != $this->_tpl_vars['row']['newname']): ?>
          <span class="bold red">&nbsp;&raquo;&raquo;&nbsp;<?php echo $this->_tpl_vars['row']['newname']; ?>
</span>
          <?php endif; ?>
        </td>
        <td>
          <?php if ($this->_tpl_vars['row']['oldstatus'] != $this->_tpl_vars['row']['newstatus']): ?>
          <?php if ($this->_tpl_vars['row']['newstatus'] == 1): ?>
          <div class="bold red"><?php echo @_AM_SYSTEM_MODULES_ACTIVATE; ?>
</div>
          <?php else: ?>
          <div class="bold red"><?php echo @_AM_SYSTEM_MODULES_DEACTIVATE; ?>
</div>
          <?php endif; ?>
          <?php else: ?>
          <?php echo @_AM_SYSTEM_MODULES_NOCHANGE; ?>

          <?php endif; ?>
        </td>
        <td>
          <?php if ($this->_tpl_vars['row']['oldweight'] != $this->_tpl_vars['row']['weight']): ?>
          <div class="bold red"><?php echo $this->_tpl_vars['row']['weight']; ?>
</div>
          <?php else: ?>
          <?php echo $this->_tpl_vars['row']['weight']; ?>

          <?php endif; ?>
          <input type="hidden" name="module[]" value="<?php echo $this->_tpl_vars['row']['mid']; ?>
" />
          <input type="hidden" name="oldname[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['oldname']; ?>
" />
          <input type="hidden" name="newname[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['newname']; ?>
" />
          <input type="hidden" name="oldstatus[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['oldstatus']; ?>
" />
          <input type="hidden" name="newstatus[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['newstatus']; ?>
" />
          <input type="hidden" name="oldweight[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['oldweight']; ?>
" />
          <input type="hidden" name="weight[<?php echo $this->_tpl_vars['row']['mid']; ?>
]" value="<?php echo $this->_tpl_vars['row']['weight']; ?>
" />
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </tbody>
    <tfoot>
      <tr class="txtcenter foot">
        <td colspan="3">
          <input class="formButton" type="submit" value="<?php echo @_AM_SYSTEM_MODULES_SUBMIT; ?>
" />&nbsp;
          <input class="formButton" type="button" value="<?php echo @_AM_SYSTEM_MODULES_CANCEL; ?>
" onclick="location='admin.php?fct=modulesadmin'" />
          <input type="hidden" name="fct" value="modulesadmin" />
          <input type="hidden" name="op" value="submit" />
          <?php echo $this->_tpl_vars['input_security']; ?>

        </td>
      </tr>
    </tfoot>
  </table>
</form>
<?php else: ?>
<div id="xo-module-log">
    <?php if ($this->_tpl_vars['result']): ?>
    <div class="logger">
        <?php $_from = $this->_tpl_vars['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <div class="spacer"><?php echo $this->_tpl_vars['row']; ?>
</div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?>
    <a href="admin.php?fct=modulesadmin"><?php echo @_AM_SYSTEM_MODULES_BTOMADMIN; ?>
</a>
</div>
<?php endif; ?>