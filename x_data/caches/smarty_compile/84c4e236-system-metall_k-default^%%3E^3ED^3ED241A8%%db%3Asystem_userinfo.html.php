<?php /* Smarty version 2.6.26, created on 2013-01-16 16:50:08
         compiled from db:system_userinfo.html */ ?>
<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>

<form name="usernav" action="user.php" method="post">

<br /><br />

<table class="width70 aligncenter bnone">
  <tr class="txtcenter">
    <td><input type="button" value="<?php echo $this->_tpl_vars['lang_editprofile']; ?>
" onclick="location='edituser.php'" />
    <input type="button" value="<?php echo $this->_tpl_vars['lang_avatar']; ?>
" onclick="location='edituser.php?op=avatarform'" />
    <input type="button" value="<?php echo $this->_tpl_vars['lang_inbox']; ?>
" onclick="location='viewpmsg.php'" />

    <?php if ($this->_tpl_vars['user_candelete'] == true): ?>
    <input type="button" value="<?php echo $this->_tpl_vars['lang_deleteaccount']; ?>
" onclick="location='user.php?op=delete'" />
    <?php endif; ?>

    <input type="button" value="<?php echo $this->_tpl_vars['lang_logout']; ?>
" onclick="location='user.php?op=logout'" /></td>
  </tr>
</table>
</form>

<br /><br />
<?php elseif ($this->_tpl_vars['xoops_isadmin'] != false): ?>

<br /><br />

<table class="width70 aligncenter bnone">
  <tr class="txtcenter">
    <td><input type="button" value="<?php echo $this->_tpl_vars['lang_editprofile']; ?>
" onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=users&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
&amp;op=modifyUser'" />
    <input type="button" value="<?php echo $this->_tpl_vars['lang_deleteaccount']; ?>
" onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/admin.php?fct=users&amp;op=delUser&amp;uid=<?php echo $this->_tpl_vars['user_uid']; ?>
'" />
  </tr>
</table>

<br /><br />
<?php endif; ?>

<table class="width100 bnone" cellspacing="5">
  <tr class="aligntop">
    <td class="width50">
      <table class="outer width100" cellpadding="4" cellspacing="1">
        <tr>
          <th colspan="2" class="txtcenter"><?php echo $this->_tpl_vars['lang_allaboutuser']; ?>
</th>
        </tr>
        <?php if ($this->_tpl_vars['user_avatarurl']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_avatar']; ?>
</td>
          <td class="even txt center"><img src="<?php echo $this->_tpl_vars['user_avatarurl']; ?>
" alt="Avatar" /></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_realname']): ?>
        <tr>
          <td class="head"><?php echo $this->_tpl_vars['lang_realname']; ?>
</td>
          <td class="odd center"><?php echo $this->_tpl_vars['user_realname']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_websiteurl']): ?>
        <tr>
          <td class="head"><?php echo $this->_tpl_vars['lang_website']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_websiteurl']; ?>
</td>
        </tr>

        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_email']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_email']; ?>
</td>
          <td class="odd"><?php echo $this->_tpl_vars['user_email']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['user_ownpage'] == true): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_privmsg']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_pmlink']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_icq']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_icq']; ?>
</td>
          <td class="odd"><?php echo $this->_tpl_vars['user_icq']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_aim']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_aim']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_aim']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_yim']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_yim']; ?>
</td>
          <td class="odd"><?php echo $this->_tpl_vars['user_yim']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_msnm']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_msnm']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_msnm']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_location']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_location']; ?>
</td>
          <td class="odd"><?php echo $this->_tpl_vars['user_location']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_occupation']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_occupation']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_occupation']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_interest']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_interest']; ?>
</td>
          <td class="odd"><?php echo $this->_tpl_vars['user_interest']; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_extrainfo']): ?>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_extrainfo']; ?>
</td>
          <td class="even"><?php echo $this->_tpl_vars['user_extrainfo']; ?>
</td>
        </tr>
        <?php endif; ?>
      </table>
    </td>
    <td class="width50">
      <table class="outer width100" cellpadding="4" cellspacing="1">
        <tr class="aligntop">
          <th class="txtcenter" colspan="2"><?php echo $this->_tpl_vars['lang_statistics']; ?>
</th>
        </tr>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_membersince']; ?>
</td>
          <td class="even txtcenter"><?php echo $this->_tpl_vars['user_joindate']; ?>
</td>
        </tr>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_rank']; ?>
</td>
          <td class="odd txtcenter"><?php echo $this->_tpl_vars['user_rankimage']; ?>
<br /><?php echo $this->_tpl_vars['user_ranktitle']; ?>
</td>
        </tr>
        <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_posts']; ?>
</td>
          <td class="even txtcenter"><?php echo $this->_tpl_vars['user_posts']; ?>
</td>
        </tr>
    <tr class="aligntop">
          <td class="head"><?php echo $this->_tpl_vars['lang_lastlogin']; ?>
</td>
          <td class="odd center"><?php echo $this->_tpl_vars['user_lastlogin']; ?>
</td>
        </tr>
      </table>
      <?php if ($this->_tpl_vars['user_signature']): ?>
      <br />
      <table class="outer width100" cellpadding="4" cellspacing="1">
        <tr class="aligntop">
          <th colspan="2" class="txtcenter"><?php echo $this->_tpl_vars['lang_signature']; ?>
</th>
        </tr>
        <tr class="aligntop">
          <td class="even"><?php echo $this->_tpl_vars['user_signature']; ?>
</td>
        </tr>
      </table>
      <?php endif; ?>
    </td>
  </tr>
</table>

<!-- start module search results loop -->
<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>

<br class="clear" />
<h4><?php echo $this->_tpl_vars['module']['name']; ?>
</h4>

  <!-- start results item loop -->
  <?php $_from = $this->_tpl_vars['module']['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>

  <img src="<?php echo $this->_tpl_vars['result']['image']; ?>
" alt="<?php echo $this->_tpl_vars['module']['name']; ?>
" /><strong><a href="<?php echo $this->_tpl_vars['result']['link']; ?>
" title="<?php echo $this->_tpl_vars['result']['title']; ?>
"><?php echo $this->_tpl_vars['result']['title']; ?>
</a></strong><br /><span class="x-small">(<?php echo $this->_tpl_vars['result']['time']; ?>
)</span><br />

  <?php endforeach; endif; unset($_from); ?>
  <!-- end results item loop -->

<?php echo $this->_tpl_vars['module']['showall_link']; ?>



<?php endforeach; endif; unset($_from); ?>
<!-- end module search results loop -->