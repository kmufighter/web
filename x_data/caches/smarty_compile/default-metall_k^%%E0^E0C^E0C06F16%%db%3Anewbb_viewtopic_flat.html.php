<?php /* Smarty version 2.6.19, created on 2009-01-20 14:22:16
         compiled from db:newbb_viewtopic_flat.html */ ?>

<div id="forum_header">
<div><?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/index.php"><?php echo $this->_tpl_vars['lang_forum_index']; ?>
</a> 
-
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/index.php?cat=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['title']; ?>
</a>
</div>


<?php if ($this->_tpl_vars['parent_forum']): ?>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['parent_forum']; ?>
"><?php echo $this->_tpl_vars['parent_name']; ?>
</a></div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum_name']; ?>
</a></div>
<?php else: ?>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['folder_topic']; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewforum.php?forum=<?php echo $this->_tpl_vars['forum_id']; ?>
"><?php echo $this->_tpl_vars['forum_name']; ?>
</a></div>
<?php endif; ?>
<div>&nbsp;&nbsp;<?php echo $this->_tpl_vars['post_content']; ?>
 <strong><?php echo $this->_tpl_vars['topic_title']; ?>
</strong> <?php if ($this->_tpl_vars['topictype']): ?><?php echo $this->_tpl_vars['topictype']; ?>
<?php endif; ?></div>
</div>
<div class="clear"></div>

<br />

<?php if ($this->_tpl_vars['online']): ?>
<div style="padding: 5px;">
<?php echo @_MD_BROWSING; ?>
&nbsp;
<?php $_from = $this->_tpl_vars['online']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
	<a href="<?php echo $this->_tpl_vars['user']['link']; ?>
">
		<?php if ($this->_tpl_vars['user']['level'] == 2): ?>
			<span class="online_admin"><?php echo $this->_tpl_vars['user']['uname']; ?>
</span>
		<?php elseif ($this->_tpl_vars['user']['level'] == 1): ?>
			<span class="online_moderator"><?php echo $this->_tpl_vars['user']['uname']; ?>
</span>
		<?php else: ?>
			<?php echo $this->_tpl_vars['user']['uname']; ?>

		<?php endif; ?>	
	</a>&nbsp;
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['online']['num_anonymous']): ?>&nbsp;<?php echo $this->_tpl_vars['online']['num_anonymous']; ?>
 <?php echo @_MD_ANONYMOUS_USERS; ?>

<?php endif; ?>
</div>
<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['topic_poll']): ?>
<?php if ($this->_tpl_vars['topic_pollresult']): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:newbb_poll_results.html", 'smarty_include_vars' => array('poll' => $this->_tpl_vars['poll'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:newbb_poll_view.html", 'smarty_include_vars' => array('poll' => $this->_tpl_vars['poll'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php endif; ?>
<?php endif; ?>
<div class="clear"></div>

<br />

<div style="padding: 5px;">
<span style="float: left; text-align:left;">
<a id="threadtop"></a><?php echo $this->_tpl_vars['down2']; ?>
&nbsp;<a href="#threadbottom"><?php echo @_MD_BOTTOM; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['left']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=prev"><?php echo @_MD_PREVTOPIC; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['right']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=next"><?php echo @_MD_NEXTTOPIC; ?>
</a>
</span>
<span style="float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_reply']; ?>
<?php echo $this->_tpl_vars['forum_addpoll']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</span>
</div>
<div class="clear"></div>

<br />

<div>
<div class="dropdown">
<?php if ($this->_tpl_vars['menumode'] == 0): ?>

	<select
		name="topicoption" id="topicoption"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_TOPICOPTION; ?>
</option>
		<?php if ($this->_tpl_vars['viewer_level'] > 1): ?>
		<?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<option value="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['name']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		<option value="">--------</option>
		<?php endif; ?>
		<?php if (count ( $this->_tpl_vars['adminpoll_actions'] ) > 0): ?>
		<option value=""><?php echo @_MD_POLLOPTIONADMIN; ?>
</option>
		<?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['actpoll']):
?>
		<option value="<?php echo $this->_tpl_vars['actpoll']['link']; ?>
"><?php echo $this->_tpl_vars['actpoll']['name']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		<option value="">--------</option>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<option value="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		<!--
		<option value="">--------</option>
		<option value="<?php echo $this->_tpl_vars['topic_print_link']; ?>
"><?php echo @_MD_PRINTTOPICS; ?>
</option>
		-->
	</select>

	<?php if ($this->_tpl_vars['rating_enable']): ?>
	<select
		name="rate" id="rate"
		class="menu"
		onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.document.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_RATE; ?>
</option>
		<option value="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=5"><?php echo @_MD_RATE5; ?>
</option>
		<option value="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=4"><?php echo @_MD_RATE4; ?>
</option>
		<option value="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=3"><?php echo @_MD_RATE3; ?>
</option>
		<option value="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=2"><?php echo @_MD_RATE2; ?>
</option>
		<option value="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=1"><?php echo @_MD_RATE1; ?>
</option>
	</select>
	<?php endif; ?>

	<select
		name="viewmode" id="viewmode"
		class="menu"	onchange="if(this.options[this.selectedIndex].value.length >0 )	{ window.location=this.options[this.selectedIndex].value;}"
	>
		<option value=""><?php echo @_MD_VIEWMODE; ?>
</option>
		<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<option value="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>

<?php elseif ($this->_tpl_vars['menumode'] == 1): ?>

	<div id="topicoption" class="menu">
	<table><tr><td>
		<?php if ($this->_tpl_vars['viewer_level'] > 1): ?>
		<?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['name']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<div class="separator"></div>
		<?php endif; ?>
		<?php if (count ( $this->_tpl_vars['adminpoll_actions'] ) > 0): ?>
		<?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['actpoll']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['actpoll']['link']; ?>
"><?php echo $this->_tpl_vars['actpoll']['name']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<div class="separator"></div>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<div class="separator"></div>
		<a class="item" href="<?php echo $this->_tpl_vars['topic_print_link']; ?>
"><?php echo @_MD_PRINTTOPICS; ?>
</a>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("topicoption").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'topicoption');return false;"><?php echo @_MD_TOPICOPTION; ?>
</a></div>

	<?php if ($this->_tpl_vars['rating_enable']): ?>
	<div id="rate" class="menu">
	<table><tr><td>
		<a class="item" href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=5"><?php echo @_MD_RATE5; ?>
</a>
		<a class="item" href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=4"><?php echo @_MD_RATE4; ?>
</a>
		<a class="item" href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=3"><?php echo @_MD_RATE3; ?>
</a>
		<a class="item" href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=2"><?php echo @_MD_RATE2; ?>
</a>
		<a class="item" href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=1"><?php echo @_MD_RATE1; ?>
</a>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("rate").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'rate');return false;"><?php echo @_MD_RATE; ?>
</a></div>
	<?php endif; ?>

	<div id="view_mode" class="menu">
	<table><tr><td>
		<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
		<a class="item" href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	</td></tr></table>
	</div>
	<script type="text/javascript">document.getElementById("view_mode").onmouseout = closeMenu;</script>
	<div class="menubar"><a href="" onclick="openMenu(event, 'view_mode');return false;"><?php echo @_MD_VIEWMODE; ?>
</a></div>

<?php elseif ($this->_tpl_vars['menumode'] == 2): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_VIEWMODE; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
					<?php $_from = $this->_tpl_vars['viewmode_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['title']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
	<?php if ($this->_tpl_vars['rating_enable']): ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_RATE; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
					<div class="item"><a href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=5"><?php echo @_MD_RATE5; ?>
</a></div>
					<div class="item"><a href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=4"><?php echo @_MD_RATE4; ?>
</a></div>
					<div class="item"><a href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=3"><?php echo @_MD_RATE3; ?>
</a></div>
					<div class="item"><a href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=2"><?php echo @_MD_RATE2; ?>
</a></div>
					<div class="item"><a href="ratethread.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;rate=1"><?php echo @_MD_RATE1; ?>
</a></div>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>
	<?php endif; ?>
	<div class="menu">
		<ul>
			<li>
				<div class="item"><strong><?php echo @_MD_TOPICOPTION; ?>
</strong></div>
				<ul>
				<li><table><tr><td>
					<?php if ($this->_tpl_vars['viewer_level'] > 1): ?>
					<?php $_from = $this->_tpl_vars['admin_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act']):
?>
                    <div class="item"><a href="<?php echo $this->_tpl_vars['act']['link']; ?>
"><?php echo $this->_tpl_vars['act']['image']; ?>
 <?php echo $this->_tpl_vars['act']['name']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
					<div class="separator"></div>
					<?php endif; ?>
					<?php if (count ( $this->_tpl_vars['adminpoll_actions'] ) > 0): ?>
					<?php $_from = $this->_tpl_vars['adminpoll_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['actpoll']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['actpoll']['link']; ?>
"><?php echo $this->_tpl_vars['actpoll']['image']; ?>
 <?php echo $this->_tpl_vars['actpoll']['name']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
					<div class="separator"></div>
					<?php endif; ?>
					<?php $_from = $this->_tpl_vars['menumode_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
					<div class="item"><a href="<?php echo $this->_tpl_vars['menu']['link']; ?>
"><?php echo $this->_tpl_vars['menu']['title']; ?>
</a></div>
					<?php endforeach; endif; unset($_from); ?>
					<div class="separator"></div>
					<div class="item"><a href="<?php echo $this->_tpl_vars['topic_print_link']; ?>
" target="_blank" ><?php echo @_MD_PRINTTOPICS; ?>
</a></div>
				</td></tr></table></li>
				</ul>
			</li>
		</ul>
	</div>

<?php endif; ?>
</div>
<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_page_nav']; ?>

</div>
</div>
<div class="clear"></div>
<br />
<br />

<?php if ($this->_tpl_vars['mode'] > 1): ?>
<form name="form_posts_admin" action="action.post.php" method="POST" onsubmit="javascript: if(window.document.forum_posts_admin.op.value &lt; 1){return false;}">
<?php endif; ?>

<?php $_from = $this->_tpl_vars['topic_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic_post']):
?>
<?php if ($this->_tpl_vars['viewmode_compact']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['newbb_template_path'])."/newbb_item.html", 'smarty_include_vars' => array('topic_post' => $this->_tpl_vars['topic_post'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['newbb_template_path'])."/newbb_thread.html", 'smarty_include_vars' => array('topic_post' => $this->_tpl_vars['topic_post'],'mode' => $this->_tpl_vars['mode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<br />
<br />
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['viewer_level'] > 1): ?>
<div style="float: right; text-align:right;" id="admin">
<?php if ($this->_tpl_vars['mode'] > 1): ?>
<?php echo @_ALL; ?>
: <input type="checkbox" name="post_check" id="post_check" value="1" onclick="xoopsCheckAll('form_posts_admin', 'post_check');" /> 
<select name="op">
	<option value="0"><?php echo @_SELECT; ?>
</option>
	<option value="delete"><?php echo @_DELETE; ?>
</option>
	<?php if ($this->_tpl_vars['type'] == 'pending'): ?>
		<option value="approve"><?php echo @_MD_APPROVE; ?>
</option>
	<?php elseif ($this->_tpl_vars['type'] == 'deleted'): ?>
		<option value="restore"><?php echo @_MD_RESTORE; ?>
</option>
	<?php endif; ?>
</select>
<input type="hidden" name="topic_id" value="<?php echo $this->_tpl_vars['topic_id']; ?>
" /> 
<input type="submit" name="submit" value="<?php echo @_SUBMIT; ?>
" /> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;mode=1#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a>
</form>
<?php elseif ($this->_tpl_vars['mode'] == 1): ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;type=active#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;type=pending#admin" target="_self" title="<?php echo @_MD_TYPE_PENDING; ?>
"><?php echo @_MD_TYPE_PENDING; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;type=deleted#admin" target="_self" title="<?php echo @_MD_TYPE_DELETED; ?>
"><?php echo @_MD_TYPE_DELETED; ?>
</a> | 
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
" target="_self" title="<?php echo @_MD_TYPE_VIEW; ?>
"><?php echo @_MD_TYPE_VIEW; ?>
</a>
<?php else: ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/viewtopic.php?topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;mode=1#admin" target="_self" title="<?php echo @_MD_TYPE_ADMIN; ?>
"><?php echo @_MD_TYPE_ADMIN; ?>
</a>
<?php endif; ?>
</div>
<br />
<?php endif; ?>
<div class="clear"></div>

<br />
<div>
<div style="float: left; text-align:left;">
	<a id="threadbottom"></a><?php echo $this->_tpl_vars['up']; ?>
&nbsp;<a href="#threadtop"><?php echo @_MD_TOP; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['left']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=prev"><?php echo @_MD_PREVTOPIC; ?>
</a>&nbsp;&nbsp;<?php echo $this->_tpl_vars['right']; ?>
&nbsp;<a href="viewtopic.php?viewmode=flat&amp;order=<?php echo $this->_tpl_vars['order_current']; ?>
&amp;topic_id=<?php echo $this->_tpl_vars['topic_id']; ?>
&amp;forum=<?php echo $this->_tpl_vars['forum_id']; ?>
&amp;move=next"><?php echo @_MD_NEXTTOPIC; ?>
</a>
</div>
<div style="float: right; text-align:right;">
<?php echo $this->_tpl_vars['forum_page_nav']; ?>

</div>
</div>
<div class="clear"></div>

<br />

<div style="padding: 5px; float: left; text-align:left;">
<?php echo $this->_tpl_vars['forum_addpoll']; ?>
<?php echo $this->_tpl_vars['forum_reply']; ?>
&nbsp;<?php echo $this->_tpl_vars['forum_post_or_register']; ?>

</div>
<div class="clear"></div>

<br />
<br />

<?php if ($this->_tpl_vars['quickreply']['show']): ?>
<div>
<a href="#threadbottom" onclick="ToggleBlock('qr', this)"> <?php echo $this->_tpl_vars['quickreply']['icon']; ?>
</a>
</div>
<br />
<div id="qr" style="display: <?php echo $this->_tpl_vars['quickreply']['display']; ?>
">
<div><?php echo $this->_tpl_vars['quickreply']['form']; ?>
</div>
</div>
<br />
<br />
<?php endif; ?>

<div>
<div style="float: left; text-align: left;">
<?php $_from = $this->_tpl_vars['permission_table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
<div><?php echo $this->_tpl_vars['perm']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>