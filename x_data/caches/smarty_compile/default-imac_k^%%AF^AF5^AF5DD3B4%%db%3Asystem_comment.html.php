<?php /* Smarty version 2.6.19, created on 2009-01-13 05:26:17
         compiled from db:system_comment.html */ ?>
<!-- start comment post -->
        <tr>
          <td class="head"><a id="comment<?php echo $this->_tpl_vars['comment']['id']; ?>
"></a> <?php echo $this->_tpl_vars['comment']['poster']['uname']; ?>
</td>
          <td class="head"><div class="comDate"><span class="comDateCaption"><?php echo $this->_tpl_vars['lang_posted']; ?>
:</span> <?php echo $this->_tpl_vars['comment']['date_posted']; ?>
&nbsp;&nbsp;<span class="comDateCaption"><?php echo $this->_tpl_vars['lang_updated']; ?>
:</span> <?php echo $this->_tpl_vars['comment']['date_modified']; ?>
</div></td>
        </tr>
        <tr>

          <?php if ($this->_tpl_vars['comment']['poster']['id'] != 0): ?>

          <td class="odd"><div class="comUserRank"><div class="comUserRankText"><?php echo $this->_tpl_vars['comment']['poster']['rank_title']; ?>
</div><img class="comUserRankImg" src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['comment']['poster']['rank_image']; ?>
" alt="" /></div><img class="comUserImg" src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['comment']['poster']['avatar']; ?>
" alt="" /><div class="comUserStat"><span class="comUserStatCaption"><?php echo $this->_tpl_vars['lang_joined']; ?>
:</span> <?php echo $this->_tpl_vars['comment']['poster']['regdate']; ?>
</div><div class="comUserStat"><span class="comUserStatCaption"><?php echo $this->_tpl_vars['lang_from']; ?>
:</span> <?php echo $this->_tpl_vars['comment']['poster']['from']; ?>
</div><div class="comUserStat"><span class="comUserStatCaption"><?php echo $this->_tpl_vars['lang_posts']; ?>
:</span> <?php echo $this->_tpl_vars['comment']['poster']['postnum']; ?>
</div><div class="comUserStatus"><?php echo $this->_tpl_vars['comment']['poster']['status']; ?>
</div></td>

          <?php else: ?>

          <td class="odd"> </td>

          <?php endif; ?>

          <td class="odd">
            <div class="comTitle"><?php echo $this->_tpl_vars['comment']['image']; ?>
<?php echo $this->_tpl_vars['comment']['title']; ?>
</div><div class="comText"><?php echo $this->_tpl_vars['comment']['text']; ?>
</div>
          </td>
        </tr>
        <tr>
          <td class="even"></td>

          <?php if ($this->_tpl_vars['xoops_iscommentadmin'] == true): ?>

          <td class="even" align="right">
            <a href="<?php echo $this->_tpl_vars['editcomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/edit.gif" alt="<?php echo $this->_tpl_vars['lang_edit']; ?>
" /></a><a href="<?php echo $this->_tpl_vars['deletecomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/delete.gif" alt="<?php echo $this->_tpl_vars['lang_delete']; ?>
" /></a><a href="<?php echo $this->_tpl_vars['replycomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/reply.gif" alt="<?php echo $this->_tpl_vars['lang_reply']; ?>
" /></a>
          </td>

          <?php elseif ($this->_tpl_vars['xoops_isuser'] == true && $this->_tpl_vars['xoops_userid'] == $this->_tpl_vars['comment']['poster']['id']): ?>

          <td class="even" align="right">
            <a href="<?php echo $this->_tpl_vars['editcomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/edit.gif" alt="<?php echo $this->_tpl_vars['lang_edit']; ?>
" /></a><a href="<?php echo $this->_tpl_vars['replycomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/reply.gif" alt="<?php echo $this->_tpl_vars['lang_reply']; ?>
" /></a>
          </td>

          <?php elseif ($this->_tpl_vars['xoops_isuser'] == true || $this->_tpl_vars['anon_canpost'] == true): ?>

          <td class="even" align="right">
            <a href="<?php echo $this->_tpl_vars['replycomment_link']; ?>
&amp;com_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/icons/reply.gif" alt="<?php echo $this->_tpl_vars['lang_reply']; ?>
" /></a>
          </td>

          <?php else: ?>

          <td class="even"> </td>

          <?php endif; ?>

        </tr>
<!-- end comment post -->