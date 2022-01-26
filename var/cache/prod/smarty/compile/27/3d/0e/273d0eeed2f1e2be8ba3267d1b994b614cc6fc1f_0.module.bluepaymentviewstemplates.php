<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:41
  from 'module:bluepaymentviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f55fea95_74832665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '273d0eeed2f1e2be8ba3267d1b994b614cc6fc1f' => 
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
function content_61f077f55fea95_74832665 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">

	<div class="bm-info">

		<img class="bm-info__img" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src_img']->value,'html','UTF-8' ));?>
/blue-media.svg">
		<ul class="bm-info__list">
			<li class="bm-info__item">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commission only 1.19%','mod'=>'bluepayment'),$_smarty_tpl ) );?>

			</li>
			<li class="bm-info__item">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prepare shop regulations 10% cheaper.','mod'=>'bluepayment'),$_smarty_tpl ) );?>

				<a target="_blank" href="https://developers.bluemedia.pl/legal-geek?mtm_campaign=presta_shop_legalgeek&mtm_source=presta_shop_backoffice&mtm_medium=cta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find out more','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</a>
			</li>
		</ul>

	</div>


</div><?php }
}
