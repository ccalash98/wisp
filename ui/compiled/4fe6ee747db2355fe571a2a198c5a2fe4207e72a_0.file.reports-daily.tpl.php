<?php
/* Smarty version 3.1.39, created on 2024-02-25 10:50:12
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/reports-daily.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65db61b4b503d0_35581648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe6ee747db2355fe571a2a198c5a2fe4207e72a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/reports-daily.tpl',
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
function content_65db61b4b503d0_35581648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-md-12">
							<div class="invoice-wrap">
								<div class="clearfix invoice-head">
									<h3 class="brand-logo text-uppercase text-bold left mt15">
										<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily_Report'];?>
</span>
									</h3>
								</div>
								<div class="clearfix invoice-subhead mb20">
									<div class="group clearfix left">
										<p class="text-bold mb5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions_at_Date'];?>
:</p>
										<p class="small"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
 <?php echo $_smarty_tpl->tpl_vars['mtime']->value;?>
</p>
									</div>
									<div class="group clearfix right">
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/print-by-date" class="btn btn-default" target="_blank"><i class="ion ion-printer"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_for_Print'];?>
</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/pdf-by-date" class="btn btn-default"><i class="fa fa-file-pdf-o"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export_to_PDF'];?>
</a>
									</div>
								</div>
                                <div class="table-responsive">
                                    <table class="table table-bordered invoice-table mb10">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
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
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_name'];?>
</td>
                                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
                                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['ds']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
								</div>
								<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


								<div class="clearfix text-right total-sum mb10">
									<h4 class="text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Income'];?>
:</h4>
									<h3 class="sum"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['dr']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
								</div>
								<p class="text-center small text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions_at_Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['mdate']->value));?>
 <?php echo $_smarty_tpl->tpl_vars['mtime']->value;?>
</p>
							</div>
						</div>
					</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
