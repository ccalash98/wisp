<?php
/* Smarty version 3.1.39, created on 2024-02-25 11:03:24
  from '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/app-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65db64cc6e1e30_96600041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a1842b358b403d290baa64e514354597c32b5f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wisp/ui/ui/app-settings.tpl',
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
function content_65db64cc6e1e30_96600041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post" >
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default panel-hovered panel-stacked mb30">
                <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" id="company" name="company" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
">
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name_Help_Text'];?>
</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="address" name="address" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
</textarea>
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
">
                        </div>
                    </div>
                    <div class="form-group hidden">
                        <label class="col-md-2 control-label">Radius Mode?</label>
                        <div class="col-md-6">
                            <select name="radius_mode" id="radius_mode" class="form-control">
                                <option value="0">No</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_mode']) {?>selected="selected" <?php }?>>Yes</option>
                            </select>
                            <p class="help-block">Still on Testing.</p>
                            <p class="help-block">Changing from Radius will not add existing user to Mikrotik Hotspot.</p>
                            <p class="help-block">With Radius user can use Hotspot or PPOE.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">APP URL</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">
                            <p class="help-block">system/config.php</p>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">Telegram Notification</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Telegram Bot Token</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="telegram_bot" name="telegram_bot" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['telegram_bot'];?>
" placeholder="123456:asdasgdkuasghddlashdashldhalskdklasd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Telegram Target ID</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="telegram_target_id" name="telegram_target_id" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['telegram_target_id'];?>
" placeholder="12345678">
                        </div>
                    </div>
                </div>
                <div class="panel-heading">SMS OTP Registration</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMS Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="sms_url" name="sms_url" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['sms_url'];?>
" placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                            <p class="help-block">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be replaced.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">Whatsapp Notification</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Whatsapp Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="wa_url" name="wa_url" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['wa_url'];?>
" placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                            <p class="help-block">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be replaced.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">Tawk.to Chat Widget</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">https://tawk.to/chat/</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tawkto" name="tawkto" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['tawkto'];?>
" placeholder="62f1ca7037898912e961f5/1ga07df">
                            <p class="help-block">From Direct Chat Link.</p>
                            <pre>/ip hotspot walled-garden
add dst-host=tawk.to
add dst-host=*.tawk.to</pre>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">Invoice</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Note Invoice</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="note" name="note" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</textarea>
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </div>
                </div>
                            <pre>/ip hotspot walled-garden
add dst-host=<?php echo $_smarty_tpl->tpl_vars['_domain']->value;?>

add dst-host=*.<?php echo $_smarty_tpl->tpl_vars['_domain']->value;?>
</pre>
            </div>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
