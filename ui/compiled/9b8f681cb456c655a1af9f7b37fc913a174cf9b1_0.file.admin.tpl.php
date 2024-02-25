<?php
/* Smarty version 3.1.39, created on 2024-02-25 01:28:26
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65dade0a9d0169_21596041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8f681cb456c655a1af9f7b37fc913a174cf9b1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/admin.tpl',
      1 => 1708842240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dade0a9d0169_21596041 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
	<link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="ui/ui/styles/plugins/waves.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/perfect-scrollbar.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">
	<link rel="stylesheet" href="ui/ui/styles/main.min.css">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <?php echo '<script'; ?>
 src="ui/ui/scripts/ie/matchMedia.js"><?php echo '</script'; ?>
>  <![endif]-->

</head>
<body id="app" class="app off-canvas body-full">
	<div class="main-container clearfix">
		<div class="content-container" id="content">
			<div class="page page-auth">
				<div class="auth-container">
					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</h1>
						<h5 class="text-normal h5 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Admin'];?>
</h5>
					</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
					<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				<?php }?>
					<div class="form-container">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/post" method="post">
							<div class="md-input-container md-float-label">
								<input type="text" name="username" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
							</div>

							<div class="md-input-container md-float-label">
								<input type="password" name="password" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
							</div>

							<div class="clearfix">
								<div class="ui-checkbox ui-checkbox-primary right">
									<label>
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
							</div>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button type="submit" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="scripts/vendors.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
