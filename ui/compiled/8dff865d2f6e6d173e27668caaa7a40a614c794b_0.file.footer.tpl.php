<?php
/* Smarty version 3.1.39, created on 2024-02-25 01:26:58
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/sections/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65daddb268d068_38934452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dff865d2f6e6d173e27668caaa7a40a614c794b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/sections/footer.tpl',
      1 => 1708842241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65daddb268d068_38934452 (Smarty_Internal_Template $_smarty_tpl) {
?>			</div>
		</div>
	</div>

	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="fixedHeader">
								<span>&nbsp;</span>
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navFull">
								<span>&nbsp;</span>
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="ui/ui/scripts/vendors.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/screenfull.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/waves.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-slider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/summernote.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/lib/js/bootbox.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/app.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/form-elements.init.js"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

</body>
</html><?php }
}
