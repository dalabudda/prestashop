<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:41
  from 'module:bluepaymentviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f5bc2fa7_93692553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc767ba73bf6f49775810cef29f00e21fca16360' => 
    array (
      0 => 'module:bluepaymentviewstemplates',
      1 => 1643149126,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f077f5bc2fa7_93692553 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bm-info--small">
	<img width="22" class="bm-info--small__icon img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/info.svg" alt="Info" />

	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The service ID and shared key for the test environment are different from the production data.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

		<br />
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To obtain data for the test environment,','mod'=>'bluepayment'),$_smarty_tpl ) );?>

	<a target="_blank" href="https://developers.bluemedia.pl/kontakt?mtm_campaign=presta_shop_developers_formularz&mtm_source=presta_shop_backoffice&mtm_medium=hiperlink">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'please contact us.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a>
	</p>
</div><?php }
}
