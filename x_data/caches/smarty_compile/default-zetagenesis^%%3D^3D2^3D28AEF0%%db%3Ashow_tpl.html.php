<?php /* Smarty version 2.6.19, created on 2008-12-23 21:31:46
         compiled from db:show_tpl.html */ ?>
<?php echo $this->_tpl_vars['toolbar']; ?>

<?php echo $this->_tpl_vars['css']; ?>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/tadgallery/bubble.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/tadgallery/class/bubble-tooltip.js"></script>
<div id="bubble_tooltip">
<div class="bubble_top"><span></span></div>
<div class="bubble_middle"><span id="bubble_tooltip_content"></span></div>
<div class="bubble_bottom"></div>
</div>
<div style="width:100%;">
	<dl class="bot_rgt">
		<dt><div><?php echo $this->_tpl_vars['author_option']; ?>
<?php echo $this->_tpl_vars['cate_option']; ?>
 <?php echo $this->_tpl_vars['show_3d_button']; ?>
<?php echo $this->_tpl_vars['show_shadowbox_button']; ?>
<?php echo $this->_tpl_vars['slideshow_button']; ?>
<?php echo $this->_tpl_vars['PicLens_button']; ?>
</div></dt>
		<dd>
		<p><?php echo $this->_tpl_vars['data']; ?>
</p>
		<p align="center" style="color:white;background-color:#AAAAAA;clear:both;"><?php echo $this->_tpl_vars['bar']; ?>
</p>
		</dd>
	</dl>
</div>
<p style="clear:both;"></p>