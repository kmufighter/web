<?php /* Smarty version 2.6.26, created on 2013-01-17 21:23:16
         compiled from db:profile_editprofile.html */ ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.html", 'smarty_include_vars' => array()));
 ?>


<?php if ($this->_tpl_vars['stop']): ?>
    <div class='errorMsg txtleft'><?php echo $this->_tpl_vars['stop']; ?>
</div>
    <br class='clear'/>
<?php endif; ?>

<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.html", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['userinfo'])));
 ?>