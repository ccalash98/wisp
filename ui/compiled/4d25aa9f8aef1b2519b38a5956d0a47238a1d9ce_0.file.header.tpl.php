<?php
/* Smarty version 3.1.39, created on 2024-02-25 01:26:58
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65daddb2680731_44274252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d25aa9f8aef1b2519b38a5956d0a47238a1d9ce' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/sections/header.tpl',
      1 => 1708842241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65daddb2680731_44274252 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
	<link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="ui/ui/styles/plugins/waves.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/select2.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="ui/ui/styles/plugins/summernote.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">
	<link rel="stylesheet" href="ui/ui/styles/main.min.css">


	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <?php echo '<script'; ?>
 src="ui/ui/scripts/ie/matchMedia.js"><?php echo '</script'; ?>
>  <![endif]-->
<?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

<?php }?>

</head>

<body id="app" class="app off-canvas nav-expand">

	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<li>
				<a href="#" class="nav-trigger ion ion-drag"></a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
						<input type="search" class="form-control" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_Contact'];?>
">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>
			<?php }?>
			<li>
				<div class="site-logo visible-xs">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="text-uppercase h3">
						<span class="text"><?php echo Lang::T('Logo');?>
</span>
					</a>
				</div>
			</li>
			<li class="fullscreen hidden-xs">
				<a href="#"><i class="ion ion-qr-scanner"></i></a>
			</li>
			<!-- Notification on progress, hide it  -->
			<li class="notify-drop hidden-xs dropdown hidden">
				<a href="#" data-toggle="dropdown">
					<i class="ion ion-chatboxes"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>
				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new message
						<a href="#" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						Coming Soon!!! Next Version...
					</div>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled right-elems">
			<li class="logout hidden-xs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></a>
			</li>
		</ul>
	</header>

	<div class="main-container clearfix">
		<aside class="nav-wrap nav-expand" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="site-logo text-uppercase">
					<i class="ion ion-wifi"></i>
					<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</span>
				</a>
			</div>

			<nav class="site-nav clearfix" role="navigation">
			<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<span class="caret"></a></span>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
<div class="ripple-wrapper"></div></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password"><i class="ion ion-settings"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
							</ul>
						</div>
						<small class="desig"><?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 <?php }?></small>
					</div>
				</div>
			<?php } else { ?>
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/profile"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
<div class="ripple-wrapper"></div></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><i class="ion ion-settings"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
							</ul>
						</div>
						<small class="desig"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Member'];?>
</small>
					</div>
				</div>
			<?php }?>

				<ul id="leftMenu" class="list-unstyled clearfix nav-list mb15">
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard">
							<i class="ion ion-monitor"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
						</a>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_DASHBOARD']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-android-contacts"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'add') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Contact'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Contact'];?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_CUSTOMERS']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_CUSTOMERS']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-card"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_User'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'voucher') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'refill') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/refill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Refill_Account'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'recharge') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_PREPAID']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PREPAID']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-cube"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'pppoe') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_SERVICES']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SERVICES']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-clipboard"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'daily-report') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily_Report'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'by-period') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_REPORTS']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_REPORTS']->value;?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-network"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Network'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'routers' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'pool' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_NETWORK']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_NETWORKS']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-document"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Static_Pages'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Order_Voucher') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Order_Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Voucher') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher'];?>
 Template</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Announcement') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Announcement"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
 Editor</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'Registration_Info') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Registration_Info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration_Info'];?>
 Editor</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_PAGES']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PAGES']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="open"<?php }?>>
						<a href="#">
							<i class="ion ion-gear-a"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'app') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'localisation') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'users') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator_Users'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'dbstatus') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbstatus"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup_Restore'];?>
</a></li>
							<?php echo $_smarty_tpl->tpl_vars['_MENU_SETTINGS']->value;?>

						</ul>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SETTINGS']->value;?>

                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway">
							<i class="ion ion-cash"></i>
							<span class="text"><?php echo Lang::T('Payment Gateway');?>
</span>
						</a>
					</li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PAYMENTGATEWAY']->value;?>

					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'community') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
community">
							<i class="ion ion-chatboxes"></i>
							<span class="text"><?php echo Lang::T('Community');?>
</span>
						</a>
					</li>
				<?php }?>
				</ul>

			</nav>

			<footer class="nav-foot">
				<p><?php echo date('Y');?>
 &copy; <span><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</span></p>
			</footer>
		</aside>
		<div class="content-container" id="content">
			<div class="page <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>page-dashboard<?php }
if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>page-invoice<?php }?>">

			<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
				<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

			<?php }
}
}
