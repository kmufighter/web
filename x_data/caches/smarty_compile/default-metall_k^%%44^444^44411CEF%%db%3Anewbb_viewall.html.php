<?php /* Smarty version 2.6.19, created on 2009-04-23 04:30:20
         compiled from db:newbb_viewall.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:newbb_viewall.html', 140, false),)), $this); ?>

<div id="forum_header">
<div><?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/index.php"><?php echo $this->_tpl_vars['forum_index_title']; ?>
</a></div>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
<a href="<?php echo $this->_tpl_vars['current_link']; ?>
"><?php echo $this->_tpl_vars['current_type']; ?>
</a></div>
</div>


<?php if ($this->_tpl_vars['mode'] > 1): ?>
<form name="form_topics_admin" action="action.topic.php" method="POST" onsubmit="javascript: if(window.document.form_topics_admin.op.value &lt; 1){return false;}">
<?php endif; ?>

<?php if ($this->_tpl_vars['viewer_level'] > 1): ?>
<div style="padding: 5px;float: right; text-align:right;" id="admin">
<?php if ($this->_tpl_vars['mode'] > 1): ?>
<?php echo @_ALL; ?>
: <input type="checkbox" name="topic_check1" id="topic_check1" value="1" onclick="xoopsCheckAll('form_topics_admin', 'topic_check1');" /> 
<select name="op">
	<option value="0"><?php echo @_SELECT; ?>
</option>
	<option value="delete"><?php echo @_DELETE; ?>
</option>
	<?php if ($this->_tpl_vars['type'] == 'pending'): ?>
		<option value="approve"><?php echo @_MD_APPROVE; ?>
</option>
		<option value="move"><?php echo @_MD_MOVE; ?>
</option>
	<?php elseif ($this->_tpl_vars['type'] == 'deleted'): ?>
		<option value="restore"><?php echo @_MD_RESTORE; ?>
</option>
	<?php else: ?>
		<option value="move"><?php echo @_MD_MOVE; ?>
</option>
	<?php endif; ?>
</select>  
<input type="hidden" name="forum_id" value="<?php echo $this->_tpl_vars['forum_id']; ?>
" />
<input type="submit" name="submit" value="<?php echo @_SUBMIT; ?>
" /> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?mode=1#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a>
<?php elseif ($this->_tpl_vars['mode'] == 1): ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?type=active#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?type=pending#admin" target="_self" title="<?php echo @_MD_TYPE_PENDING; ?>
"><?php echo @_MD_TYPE_PENDING; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?type=deleted#admin" target="_self" title="<?php echo @_MD_TYPE_DELETED; ?>
"><?php echo @_MD_TYPE_DELETED; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/moderate.php" target="_self" title="<?php echo @_MD_TYPE_SUSPEND; ?>
"><?php echo @_MD_TYPE_SUSPEND; ?>
</a>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?mode=0" target="_self" title="<?php echo @_MD_TYPE_VIEW; ?>
"><?php echo @_MD_TYPE_VIEW; ?>
</a> 
<?php else: ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewall.php?mode=1#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a>
<?php endif; ?>
</div>
<br />
<?php else: ?>
<br />
<?php endif; ?>
<div class="clear"></div>

<div>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="topicoption" id="topicoption"
		class="menu"
		onchange="javascript: if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_TOPICOPTION; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</option>
		<option value="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
</option>
		<option value="">--------</option>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<option value="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>

<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>
	<div id="topicoption" class="menu">
	<table><tr><td>
		<a class="item" href="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</a>
		<a class="item" href="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
</a>
		<div class="separator"></div>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("topicoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'topicoption');return false;"><?php echo @_MD_TOPICOPTION; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_TOPICOPTION; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['post_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALLPOSTS; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['newpost_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_NEWPOSTS; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['all_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_ALL; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['digest_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_DIGEST; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['unreplied_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREPLIED; ?>
</a></div>
	                <div class="item"><a href="<?php echo $this->_tpl_vars['unread_link']; ?>
"><?php echo @_MD_VIEW; ?>
&nbsp;<?php echo @_MD_UNREAD; ?>
</a></div>
					<div class="separator"></div>
					<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>

<?php endif; ?>
</div>
<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_pagenav']; ?>

</div>
</div>
<div class="clear"></div>
<br />
<br />

<table class="outer" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">

    <tr class="head" align="left">
	      <td  width="5%" colspan="2">
	      <?php if ($this->_tpl_vars['mode'] > 1): ?>
			<?php echo @_ALL; ?>
: <input type="checkbox" name="topic_check" id="topic_check" value="1" onclick="xoopsCheckAll('form_topics_admin', 'topic_check');" /> 
	      <?php else: ?>
	      &nbsp;
	      <?php endif; ?>
	      </td>
		<td>&nbsp;<strong><a href="<?php echo $this->_tpl_vars['h_topic_link']; ?>
"><?php echo @_MD_TOPICS; ?>
</a></strong></td>
		<td width="15%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_forum_link']; ?>
"><?php echo @_MD_FORUM; ?>
</a></strong></td>
		<td width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_reply_link']; ?>
"><?php echo @_MD_REPLIES; ?>
</a></strong></td>
		<td width="10%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_poster_link']; ?>
"><?php echo @_MD_POSTER; ?>
</a></strong></td>
		<td width="5%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_views_link']; ?>
"><?php echo @_MD_VIEWS; ?>
</a></strong></td>
		<td width="15%" align="center" nowrap="nowrap"><strong><a href="<?php echo $this->_tpl_vars['h_date_link']; ?>
"><?php echo @_MD_DATE; ?>
</a></strong></td>
	</tr>

  <!-- start forum topic -->
<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['topic']):
        $this->_foreach['loop']['iteration']++;
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td width="4%" align="center">
	      <?php if ($this->_tpl_vars['mode'] > 1): ?>
			<input type="checkbox" name="topic_id[]" id="topic_id[<?php echo $this->_tpl_vars['topic']['topic_id']; ?>
]" value="<?php echo $this->_tpl_vars['topic']['topic_id']; ?>
" />
	      <?php else: ?>
			<?php echo $this->_tpl_vars['topic']['topic_folder']; ?>

	      <?php endif; ?>
    </td>
    <td width="4%" align="center"><?php echo $this->_tpl_vars['topic']['topic_icon']; ?>
</td>
    <td>&nbsp;<a href="<?php echo $this->_tpl_vars['topic']['topic_link']; ?>
">
		<?php if ($this->_tpl_vars['topic']['allow_prefix'] && $this->_tpl_vars['topic']['topic_subject']): ?>
		<?php echo $this->_tpl_vars['topic']['topic_subject']; ?>

		<?php endif; ?>
		<?php echo $this->_tpl_vars['topic']['topic_title']; ?>
</a><?php echo $this->_tpl_vars['topic']['attachment']; ?>
 <?php echo $this->_tpl_vars['topic']['topic_page_jump']; ?>

	</td>
    <td align="left" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_forum_link']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_replies']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_poster']; ?>
</td>
    <td align="center" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_views']; ?>
</td>
    <td align="right" valign="middle"><?php echo $this->_tpl_vars['topic']['topic_last_posttime']; ?>
<br />
		<?php echo @_MD_BY; ?>
 <?php echo $this->_tpl_vars['topic']['topic_last_poster']; ?>

	</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
  <!-- end forum topic -->
	
	<?php if ($this->_tpl_vars['mode'] > 1): ?>
	</form>
	<?php endif; ?>

  <tr class="foot">
    <td colspan="8" align="center"> <?php echo '<form method="get" action="viewall.php"><strong>'; ?><?php echo @_MD_SORTEDBY; ?><?php echo '</strong>&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_sort']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_order']; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['forum_selection_since']; ?><?php echo '&nbsp;<input type="hidden" name="forum" value="'; ?><?php echo $this->_tpl_vars['forum_id']; ?><?php echo '" /><input type="hidden" name="type" value="'; ?><?php echo $this->_tpl_vars['type']; ?><?php echo '" /><input type="submit" name="refresh" value="'; ?><?php echo @_MD_GO; ?><?php echo '" /></form>'; ?>

	</td>
  </tr>
</table>
<!-- end forum main table -->

<?php if ($this->_tpl_vars['forum_pagenav']): ?>
<div style="float: right; text-align:right; padding: 5px;"><?php echo $this->_tpl_vars['forum_pagenav']; ?>
</div>
<br />
<?php endif; ?>
<div class="clear"></div>

<div>
<div style="float: left; text-align: left;">
	<?php echo $this->_tpl_vars['img_newposts']; ?>
 = <?php echo @_MD_NEWPOSTS; ?>
 (<?php echo $this->_tpl_vars['img_hotnewposts']; ?>
 = <?php echo @_MD_MORETHAN; ?>
) <br />
	<?php echo $this->_tpl_vars['img_folder']; ?>
 = <?php echo @_MD_NONEWPOSTS; ?>
 (<?php echo $this->_tpl_vars['img_hotfolder']; ?>
 = <?php echo @_MD_MORETHAN2; ?>
) <br />
	<?php echo $this->_tpl_vars['img_locked']; ?>
 = <?php echo @_MD_TOPICLOCKED; ?>
 <br />
	<?php echo $this->_tpl_vars['img_sticky']; ?>
 = <?php echo @_MD_TOPICSTICKY; ?>
 <br />
	<?php echo $this->_tpl_vars['img_digest']; ?>
 = <?php echo @_MD_TOPICDIGEST; ?>
 <br />
	<?php echo $this->_tpl_vars['img_poll']; ?>
 = <?php echo @_MD_TOPICHASPOLL; ?>

</div>
<div style="float: right; text-align: right;">
<form action="search.php" method="get">
<input name="term" id="term" type="text" size="15" />
<input type="hidden" name="forum" id="forum" value="<?php echo $this->_tpl_vars['forum_id']; ?>
" />
<input type="hidden" name="sortby" id="sortby" value="p.post_time desc" />
<input type="hidden" name="since" id="since" value="<?php echo $this->_tpl_vars['forum_since']; ?>
" />
<input type="hidden" name="action" id="action" value="yes" />
<input type="hidden" name="searchin" id="searchin" value="both" />
<input type="submit" class="formButton" value="<?php echo @_MD_SEARCH; ?>
" /><br />
[<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/search.php"><?php echo @_MD_ADVSEARCH; ?>
</a>]
</form><br />
<?php echo $this->_tpl_vars['forum_jumpbox']; ?>

</div>
</div>
<div class="clear"></div>
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