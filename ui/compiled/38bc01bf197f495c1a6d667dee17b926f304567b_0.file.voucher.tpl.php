<?php
/* Smarty version 3.1.39, created on 2024-02-25 01:27:08
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65daddbc1a2069_56272716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38bc01bf197f495c1a6d667dee17b926f304567b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/voucher.tpl',
      1 => 1708842241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_65daddbc1a2069_56272716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="code" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Code'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<div class="btn-group btn-group-justified" role="group">
												<div class="btn-group" role="group">
												<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/add-voucher" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</a>
												</div>
												<div class="btn-group" role="group">
												<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print-voucher" target="print_voucher" class="btn btn-info"><i class="ion ion-android-print"> </i> Print</a>
												</div>
											</div>
										</div>&nbsp;
									</div>
						<div class="table-responsive">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status_Voucher'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
								</tr>
							</thead>
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['code'];?>
</td>
									<td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == '0') {?> <label class="btn-tag btn-tag-success">Not Use</label> <?php } else { ?> <label class="btn-tag btn-tag-danger">Used</label> <?php }?></td>
									<td align="center"><?php if ($_smarty_tpl->tpl_vars['ds']->value['user'] == '0') {?> - <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['user'];?>
 <?php }?></td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
									</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
						</div>
						<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>


<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
