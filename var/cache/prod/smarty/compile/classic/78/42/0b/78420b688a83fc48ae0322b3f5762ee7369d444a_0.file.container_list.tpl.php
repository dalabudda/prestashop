<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:42
  from 'C:\xampp\htdocs\prestashop\modules\bluepayment\views\templates\admin\_configure\helpers\container_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f62c8351_59726673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78420b688a83fc48ae0322b3f5762ee7369d444a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\bluepayment\\views\\templates\\admin\\_configure\\helpers\\container_list.tpl',
      1 => 1643149126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f077f62c8351_59726673 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel paymentList">
	<div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment list','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['l']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>


    <?php if ((isset($_smarty_tpl->tpl_vars['transfer_payments']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfer_payments']->value, 'currency', false, 'key');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
			<div class="modal fade" id="Przelew_internetowy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" tabindex="-1" role="dialog"
			     aria-labelledby="Przelew_internetowy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h2>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of supported banks','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div id="blue_payway" class="bluepayment-gateways">
								<div class="bluepayment-gateways__wrap">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currency']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
										<div class="bluepayment-gateways__item">
											<label for="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<img class="bluepayment-gateways__img"
												     src="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_logo_url'];?>
"
												     alt="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
												<span class="bluepayment-gateways__name">
																<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>

															</span>
											</label>
										</div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>


    <?php if ((isset($_smarty_tpl->tpl_vars['wallets']->value)) && is_array($_smarty_tpl->tpl_vars['wallets']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallets']->value, 'currency', false, 'key');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>



			<div class="modal fade" id="Wirtualny_portfel_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" tabindex="-1" role="dialog"
			     aria-labelledby="Wirtualny_portfel_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h2>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of supported wallets','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="blue_payway" class="bluepayment-gateways">
								<div class="bluepayment-gateways__wrap">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currency']->value, 'card');
$_smarty_tpl->tpl_vars['card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->do_else = false;
?>
                                        <div class="bluepayment-gateways__item">
                                            <label for="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
                                                <img class="bluepayment-gateways__img"
                                                     src="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_logo_url'];?>
"
                                                     alt="<?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>
">
                                                <span class="bluepayment-gateways__name">
                                                    <?php echo $_smarty_tpl->tpl_vars['card']->value['gateway_name'];?>

                                                </span>
                                            </label>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>



</div>
<?php }
}
