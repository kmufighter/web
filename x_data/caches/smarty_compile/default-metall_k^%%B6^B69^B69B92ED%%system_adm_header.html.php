<?php /* Smarty version 2.6.19, created on 2009-01-20 12:46:39
         compiled from /home/kmc/www/modules/system/class/gui/exm/templates/admin/system_adm_header.html */ ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
    <!-- Title and meta -->
    <meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
    <title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>

    <meta name="author" content="The XOOPS Project" />
    <meta name="copyright" content="Copyright &amp;copy; 2001-2008" />
    <meta name="generator" content="XOOPS" />
    <link rel="shortcut icon" type="image/ico" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" title="Style sheet" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
    <link rel="stylesheet" type="text/css" media="all" title="Style sheet" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" title="Style sheet" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/system/class/gui/exm/css/<?php echo $this->_tpl_vars['xoops_langcode']; ?>
.css" />
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/include/xoops.js"></script>
    <script type="text/javascript"><!--//--><![CDATA[//><!--
        startList = function() {
            if (document.all&&document.getElementById) {
                navRoot = document.getElementById("nav");
                for (i=0; i<navRoot.childNodes.length; i++) {
                    node = navRoot.childNodes[i];
                    if (node.nodeName=="LI") {
                        node.onmouseover=function() {
                            this.className+=" over";
                        }
                        node.onmouseout=function() {
                            this.className=this.className.replace(" over", "");
                        }
                    }
                }
            }
        }
        xoopsOnloadEvent(startList);
        //--><!]]>
    </script>

    <!-- customized header contents -->
    <?php echo $this->_tpl_vars['xoops_module_header']; ?>


</head>
<body>