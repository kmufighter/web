<?php /* Smarty version 2.6.19, created on 2013-01-16 15:34:06
         compiled from db:newbb_index.html */ ?>
<!-- start forum categories -->
<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
<table class="index_category" cellspacing="0" width="100%">
    <tr class="head">
		<td width="3%" valign="middle" align="center"><img onclick="ToggleBlock2('cat_<?php echo $this->_tpl_vars['category']['cat_id']; ?>
', this)" src="<?php echo $this->_tpl_vars['category']['cat_display_icon']; ?>
" alt="" /></td>
		<?php if ($this->_tpl_vars['category']['cat_image']): ?>
		<td width="8%"><img src="<?php echo $this->_tpl_vars['category']['cat_image']; ?>
" alt="<?php echo $this->_tpl_vars['category']['cat_title']; ?>
" /></td>
		<?php endif; ?>
		<td align="left">
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/index.php?cat=<?php echo $this->_tpl_vars['category']['cat_id']; ?>
"><?php echo $this->_tpl_vars['category']['cat_title']; ?>
</a>
			<?php if ($this->_tpl_vars['category']['cat_description']): ?><p class="desc"><?php echo $this->_tpl_vars['category']['cat_description']; ?>
</p><?php endif; ?>
		</td>
		<?php if ($this->_tpl_vars['category']['cat_sponsor']): ?>
		<td width="15%" nowrap="nowrap" align="right">
		<p class="desc"><a href="<?php echo $this->_tpl_vars['category']['cat_sponsor']['link']; ?>
" title="<?php echo $this->_tpl_vars['category']['cat_sponsor']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['category']['cat_sponsor']['title']; ?>
</a></p>
		</td>
		<?php endif; ?>
    </tr>
</table>

<div id="cat_<?php echo $this->_tpl_vars['category']['cat_id']; ?>
" style="display: <?php echo $this->_tpl_vars['category']['cat_display']; ?>
">
<table cellspacing="1" width="100%">
<?php if ($this->_tpl_vars['category']['forums']): ?>
    <tr class="head" align="center">
		<td width="5%">&nbsp;</td>
		<?php if ($this->_tpl_vars['subforum_display'] == 'expand'): ?>
		<td colspan="2" width="57%" nowrap="nowrap" align="left"><?php echo @_MD_FORUM; ?>
</td>
		<?php else: ?>
		<td width="57%" nowrap="nowrap" align="left"><?php echo @_MD_FORUM; ?>
</td>
		<?php endif; ?>
		<td width="9%" nowrap="nowrap"><?php echo @_MD_TOPICS; ?>
</td>
		<td width="9%" nowrap="nowrap"><?php echo @_MD_POSTS; ?>
</td>
		<td width="20%" nowrap="nowrap"><?php echo @_MD_LASTPOST; ?>
</td>
    </tr>
<?php endif; ?>

<!-- start forums -->

<?php if ($this->_tpl_vars['subforum_display'] == 'expand'): ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
    <tr>
      <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
      <td colspan="2" class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			(<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed">RSS</a>)
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
      </td>
      <td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      <td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      <td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
		<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
		<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>

	  </td>
    </tr>
<?php if ($this->_tpl_vars['forum']['subforum']): ?>
    <tr class="head" >
      <td width="5%">&nbsp;</td>
      <td width="5%" align="center"><?php echo $this->_tpl_vars['img_subforum']; ?>
&nbsp;</td>
      <td colspan="4" nowrap="nowrap" align="left"><?php echo @_MD_SUBFORUMS; ?>
</td>
    </tr>
<?php $_from = $this->_tpl_vars['forum']['subforum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subforum']):
?>
    <tr>
      <td class="odd" width="5%">&nbsp;</td>
      <td class="even" align="center" valign="middle" width="5%"><?php echo $this->_tpl_vars['subforum']['forum_folder']; ?>
</td>
      <td width="52%" class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
"><strong><?php echo $this->_tpl_vars['subforum']['forum_name']; ?>
</strong></a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			(<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/rss.php?f=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
" target="_blank" title="RSS feed">RSS</a>)
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['subforum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['subforum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['subforum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
	  </td>
      <td class="even" width="9%" align="center" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_topics']; ?>
 </td>
      <td class="odd" width="9%" align="center" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_posts']; ?>
 </td>
      <td class="even" width="20%" align="right" valign="middle"><?php echo $this->_tpl_vars['subforum']['forum_lastpost_time']; ?>
 <br />
		<?php echo $this->_tpl_vars['subforum']['forum_lastpost_icon']; ?>
 <br />
		<?php echo $this->_tpl_vars['subforum']['forum_lastpost_user']; ?>

	  </td>
   </tr>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php elseif ($this->_tpl_vars['subforum_display'] == 'collapse'): ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
	<tr>
		<?php if ($this->_tpl_vars['forum']['subforum']): ?>
      	<td class="even" rowspan="2" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
		<?php else: ?>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
		<?php endif; ?>
      	<td class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			(<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed">RSS</a>)
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
        </td>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      	<td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      	<td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>
  </td>
    </tr>
	<?php if ($this->_tpl_vars['forum']['subforum']): ?>
    <tr>
     	<td class="odd" colspan="4" align="left"><?php echo @_MD_SUBFORUMS; ?>
&nbsp;<?php echo $this->_tpl_vars['img_subforum']; ?>
&nbsp;
			<?php $_from = $this->_tpl_vars['forum']['subforum']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subforum']):
?>
			&nbsp;[<a href="viewforum.php?forum=<?php echo $this->_tpl_vars['subforum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['subforum']['forum_name']; ?>
</a>]
			<?php endforeach; endif; unset($_from); ?>
		</td>
	</tr>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php else: ?>

<?php $_from = $this->_tpl_vars['category']['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
	<tr>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_folder']; ?>
</td>
      	<td class="odd">
		<div id="index_forum">
	      	<span class="item"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum']['forum_name']; ?>
</a>
	      	<?php if ($this->_tpl_vars['rss_enable']): ?>
			(<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/rss.php?f=<?php echo $this->_tpl_vars['forum']['forum_id']; ?>
" target="_blank" title="RSS feed">RSS</a>)
			<?php endif; ?>
	      	<br /><?php echo $this->_tpl_vars['forum']['forum_desc']; ?>

	      	</span>
			<?php if ($this->_tpl_vars['forum']['forum_moderators']): ?>
			<span class="extra">
        	<?php echo @_MD_MODERATOR; ?>
: <?php echo $this->_tpl_vars['forum']['forum_moderators']; ?>

        	</span>
        	<?php endif; ?>
        </div>
        </td>
      	<td class="even" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_topics']; ?>
 </td>
      	<td class="odd" align="center" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_posts']; ?>
 </td>
      	<td class="even" align="right" valign="middle"><?php echo $this->_tpl_vars['forum']['forum_lastpost_time']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_icon']; ?>
 <br />
			<?php echo $this->_tpl_vars['forum']['forum_lastpost_user']; ?>

		</td>
    </tr>
<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>
  <!-- end forums -->
</table>
</div>
<?php endforeach; endif; unset($_from); ?>
<!-- end forum categories -->

<br />
<div>
<div style="float: left; text-align: left;">
	<?php echo $this->_tpl_vars['img_hotfolder']; ?>
 = <?php echo @_MD_NEWPOSTS; ?>
<br />
	<?php echo $this->_tpl_vars['img_folder']; ?>
 = <?php echo @_MD_NONEWPOSTS; ?>
<br />	
</div>
<div style="float: right; text-align: right;">
	<form action="search.php" method="post" name="search" id="search">
        <input name="term" id="term" type="text" size="20" />
        <input type="hidden" name="forum" id="forum" value="all" />
        <input type="hidden" name="sortby" id="sortby" value="p.post_time desc" />
        <input type="hidden" name="searchin" id="searchin" value="both" />
        <input type="submit" name="submit" id="submit" value="<?php echo @_MD_SEARCH; ?>
" />
        <br />
        [ <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/search.php"><?php echo @_MD_ADVSEARCH; ?>
</a> ]
	</form>
</div>
</div>

<div class="clear"></div>
<br style="clear: both;" />
<br />
<br />
<?php if ($this->_tpl_vars['online']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:newbb_online.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->