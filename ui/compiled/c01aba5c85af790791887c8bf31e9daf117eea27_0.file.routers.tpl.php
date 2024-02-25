<?php
/* Smarty version 3.1.39, created on 2024-02-25 10:49:02
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/routers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65db616ec7f131_45471494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01aba5c85af790791887c8bf31e9daf117eea27' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/routers.tpl',
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
function content_65db616ec7f131_45471494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">

											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Name'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Router'];?>
</a>
										</div>&nbsp;
									</div>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP_Address'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                                <th><?php echo Lang::T('Status');?>
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
                                            <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] != 1) {?>class="danger" title="disabled"<?php }?>>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip_address'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] == 1) {?>Enabled<?php } else { ?>Disabled<?php }?></td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-info btn-sm btn-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
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
