<?php
/* Smarty version 3.1.39, created on 2024-02-25 10:49:09
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/a404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65db617506ee68_85291778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0df5fb3696c4eb81232de8a4dd68422bf97392' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/a404.tpl',
      1 => 1708842240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_65db617506ee68_85291778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="ion ion-forward" title="go to dashboard"></a></h1>
				</div>
			</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
