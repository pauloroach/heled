<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 22:28:58
         compiled from "/Users/paulo/Documents/MyProjects/heled/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27351074058bf969a5a7e20-14997100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfaa87e9465bffc65910ddd83a39f0ea33348c2e' => 
    array (
      0 => '/Users/paulo/Documents/MyProjects/heled/admin/themes/default/template/content.tpl',
      1 => 1482185820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27351074058bf969a5a7e20-14997100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf969a61d571_85777091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf969a61d571_85777091')) {function content_58bf969a61d571_85777091($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
