<?php
/* Smarty version 3.1.39, created on 2024-02-25 01:28:14
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65daddfe894793_71642153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ed99ba9bc65e934cd500099017d6b07b732f08' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/login.tpl',
      1 => 1708842241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65daddfe894793_71642153 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
	<link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">
	<link rel="stylesheet" href="ui/ui/styles/main.min.css">

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <?php echo '<script'; ?>
 src="ui/ui/scripts/ie/matchMedia.js"><?php echo '</script'; ?>
>  <![endif]-->

</head>
<body>
	<div class="container">
		<div class="hidden-xs" style="height:150px"></div>
		<div class="form-head mb20">
			<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold" style="text-shadow: 2px 2px 4px #757575;"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h1>
			<hr>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				</div>
			</div>
		<?php }?>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-default">
				<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
</div>
				<div class="panel-body" style="height:296px;max-height:296px;overflow:scroll;">
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Announcement.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Member'];?>
</div>
					<div class="panel-body" style="height:296px;max-height:296px;">
						<div class="form-container">
							<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
								<div class="md-input-container md-float-label">
									<input type="text" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
" class="md-input">
									<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
								</div>

								<div class="md-input-container md-float-label">
									<input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
" class="md-input">
									<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
								</div>

								<div class="clearfix hidden">
									<div class="ui-checkbox ui-checkbox-primary right">
										<label>
											<input type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
								</div>
								<div class="btn-group btn-group-justified mb15">
									<div class="btn-group">
										<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
									</div>
									<div class="btn-group">
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</a>
									</div>
								</div>
							</form>
						</div>
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
