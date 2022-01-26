<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:41
  from 'C:\xampp\htdocs\prestashop\modules\bluepayment\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f5339db1_67239737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ccba703fd70b11259d1a269406c48400f95b16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\bluepayment\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1643149126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:bluepayment/views/templates/admin/_configure/helpers/form/benefits.tpl' => 1,
    'module:bluepayment/views/templates/admin/_configure/helpers/form/configure_fields.tpl' => 2,
  ),
),false)) {
function content_61f077f5339db1_67239737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="bm-menu">
	<ul class="nav nav-pills">
        <?php $_smarty_tpl->_assignInScope('tabk', 0);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fvalue', false, 'fkey');
$_smarty_tpl->tpl_vars['fvalue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fkey']->value => $_smarty_tpl->tpl_vars['fvalue']->value) {
$_smarty_tpl->tpl_vars['fvalue']->do_else = false;
?>

            <?php if ($_smarty_tpl->tpl_vars['fkey']->value === 0) {?>
				<li class="nav-item">
					<a href="tab_rule_<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
" class="nav-link tab " id="tab_rule_link_<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
"
					   href="javascript:displaythemeeditorTab('<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
');">
                        <?php echo $_smarty_tpl->tpl_vars['fvalue']->value['form']['section']['title'];?>

					</a>
				</li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['fkey']->value === 2) {?>
				<li class="nav-item">
					<a href="tab_rule_<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
" class="nav-link tab " id="tab_rule_link_<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
"
					   href="javascript:displaythemeeditorTab('<?php echo $_smarty_tpl->tpl_vars['tabk']->value;?>
');">
                        <?php echo $_smarty_tpl->tpl_vars['fvalue']->value['form']['section']['title'];?>

					</a>
				</li>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('tabk', $_smarty_tpl->tpl_vars['tabk']->value+1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<div class="bm-configure">

	<div class="col-md-9">

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['title']))) {?>
			<h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3>
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150078813861f077f530c397_20817062', "defaultForm");
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194128309261f077f5334ad4_87215779', "after");
?>



	</div>


	<?php echo '<script'; ?>
 type="text/javascript">
		$('.tab_rule_tab').hide();

		$('#tab_rule_link_0').addClass('active');
		$('#tab_rule_0').show();


		$('.bm-menu li').on('click', function (e) {

			e.preventDefault();

			var target = $(e.target).attr("href");

			$('.bm-menu li a').removeClass('active');
			$(this).find('a').addClass('active');

			$('.tab_rule_tab').hide();
			$('#' + target).show();
		});

	<?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
			var module_dir = '<?php echo (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null);?>
';
			var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
			var languages = new Array();

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
			displayFlags(languages, id_language, allowEmployeeFormLang);


			function initChangesTable() {
				$('.blue_gateway_channels').find('th, td').filter(':nth-child(2)').append(function () {
					return $(this).next().html();
				}).next().remove();
			}

			$(document).ready(function () {

				const payTest = $("input[name=BLUEPAYMENT_TEST_ENV]:checked").val();
				const showPayWay = $("input[name=BLUEPAYMENT_SHOW_PAYWAY]:checked").val();

				$("input[name=BLUEPAYMENT_SHOW_PAYWAY]").click(function (e) {
					checkShowPayway($(this).val());
				})

				$("input[name=BLUEPAYMENT_TEST_ENV]").click(function (e) {
					checkPayTest($(this).val());
				})

				function checkShowPayway(state) {
					if (state == 1) {
						$('.bluepayment_payment_group_name').show();
						$('.bluepayment_payment_name').hide();
						$('.paymentList').show();

					} else {
						$('.bluepayment_payment_group_name').hide();
						$('.bluepayment_payment_name').show();
						$('.paymentList').hide();
					}
				}

				function checkPayTest(state) {
					if (state == 1) {
						$('.bm-info--small').show();

					} else {
						$('.bm-info--small').hide();
					}
				}

				checkPayTest(payTest);
				checkShowPayway(showPayWay);

				initChangesTable();

                <?php if ((isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value))) {?>
				$(".textarea-autosize").autosize();
                <?php }?>
			});

			state_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStates'),$_smarty_tpl ) );?>
';
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214699758261f077f53381b7_75440620', "script");
?>

		<?php echo '</script'; ?>
>


		<?php echo '<script'; ?>
 type="text/javascript">
			let bm_ajax = "<?php echo $_smarty_tpl->tpl_vars['ajax_controller']->value;?>
"
			let bm_token = "<?php echo $_smarty_tpl->tpl_vars['ajax_token']->value;?>
";
			let bm_token2 = "<?php echo $_smarty_tpl->tpl_vars['ajax_payments_token']->value;?>
";

			let success_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration saved successfully','mod'=>'bluepayment'),$_smarty_tpl ) );?>
"
			let error_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error, configuration not saved','mod'=>'bluepayment'),$_smarty_tpl ) );?>
"

			$(document).ready(function () {
				$('form').on('submit', function (e) {
					e.preventDefault();

					var data = $(this).serialize() + '&ajax=true&action=SaveConfiguration&token=' + bm_token;

					$.ajax({
						type: 'POST',
						cache: false,
						dataType: 'json',
						url: bm_ajax,
						data: data,
						success: function (data) {
							if(data.success) {

								reloadPaymentGateway();
								showSuccessMessage(success_msg);

							} else {
								showErrorMessage(error_msg);
							}
						},
						error: function (data) {
							showErrorMessage(error_msg);
						}
					});
				});
			});

			var data2 = 'ajax=true&action=ReloadPaymentsGateway';

			function reloadPaymentGateway() {
				$.ajax({
					url: bm_ajax,
					type: 'GET',
					cache: false,
					dataType: 'html',
					data: data2,
					success: function (data2) {
						$('.paymentList').html($(data2).find('.paymentList').html());
						initChangesTable();
					},
					error: function (data2) {
						console.log(data2);
					}
				});
			}
		<?php echo '</script'; ?>
>
    <?php }?>

</div>
<?php }
/* {block "legend"} */
class Block_107531380161f077f531fbf6_65106301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="panel-heading">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image'])) && (isset($_smarty_tpl->tpl_vars['field']->value['title']))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
"
												                                                    alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>
" /><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

											</div>
                                        <?php
}
}
/* {/block "legend"} */
/* {block "footer"} */
class Block_16503664861f077f53257e5_97150877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
										<div class="panel-footer">

                                            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
												<button type="submit" value="1"
												        id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1));
}?>"
												        name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];
} else {
echo $_smarty_tpl->tpl_vars['submit_action']->value;
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>"
												        class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];
} else { ?>btn btn-primary pull-right<?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

												</button>
                                            <?php }?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'], 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href'])) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
"
                                                           <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?>
														   class="btn btn-primary<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?>
																<i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
"></i>
                                                            <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
                                                    <?php } else { ?>
														<button type="button"
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?>
														        class="btn btn-primary<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"
														        name="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['name']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?>
																<i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
"></i>
                                                            <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>

														</button>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>

										</div>
                                    <?php }?>
                                <?php
}
}
/* {/block "footer"} */
/* {block "fieldset"} */
class Block_15742234361f077f531cda8_52692640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'fieldset_name', null, null);
echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div class="panel"
							     id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count'));
}
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name')-1));
}?>">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form'], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'legend') {?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107531380161f077f531fbf6_65106301', "legend", $this->tplIndex);
?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'description' && $_smarty_tpl->tpl_vars['field']->value) {?>
										<!-- <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div> -->
                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'input') {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'input');
$_smarty_tpl->tpl_vars['input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->do_else = false;
?>
                                            <?php $_smarty_tpl->_subTemplateRender("module:bluepayment/views/templates/admin/_configure/helpers/form/configure_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_input'=>$_smarty_tpl->tpl_vars['input']->value), 0, true);
?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'form_group') {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['form_group']['fields'], 'fields_group_input', false, 'key2');
$_smarty_tpl->tpl_vars['fields_group_input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['fields_group_input']->value) {
$_smarty_tpl->tpl_vars['fields_group_input']->do_else = false;
?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_group_input']->value, 'fields_group_form', false, 'kkk');
$_smarty_tpl->tpl_vars['fields_group_form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kkk']->value => $_smarty_tpl->tpl_vars['fields_group_form']->value) {
$_smarty_tpl->tpl_vars['fields_group_form']->do_else = false;
?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_group_form']->value, 'form_subgroup_input', false, 'form_key');
$_smarty_tpl->tpl_vars['form_subgroup_input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form_key']->value => $_smarty_tpl->tpl_vars['form_subgroup_input']->value) {
$_smarty_tpl->tpl_vars['form_subgroup_input']->do_else = false;
?>

                                                    <?php if ($_smarty_tpl->tpl_vars['form_key']->value === 'legend') {?>
														<div class="section-heading">
                                                            <?php echo $_smarty_tpl->tpl_vars['form_subgroup_input']->value['title'];?>

														</div>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['form_key']->value === 'input') {?>

                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_subgroup_input']->value, 'form_subgroup_field');
$_smarty_tpl->tpl_vars['form_subgroup_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form_subgroup_field']->value) {
$_smarty_tpl->tpl_vars['form_subgroup_field']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_subTemplateRender("module:bluepayment/views/templates/admin/_configure/helpers/form/configure_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_input'=>$_smarty_tpl->tpl_vars['form_subgroup_field']->value), 0, true);
?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                    <?php }?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                    <?php }?>



                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16503664861f077f53257e5_97150877', "footer", $this->tplIndex);
?>

							</div>
                        <?php
}
}
/* {/block "fieldset"} */
/* {block "other_fieldsets"} */
class Block_100689909061f077f5331d56_60504889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "other_fieldsets"} */
/* {block "defaultForm"} */
class Block_150078813861f077f530c397_20817062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_150078813861f077f530c397_20817062',
  ),
  'fieldset' => 
  array (
    0 => 'Block_15742234361f077f531cda8_52692640',
  ),
  'legend' => 
  array (
    0 => 'Block_107531380161f077f531fbf6_65106301',
  ),
  'footer' => 
  array (
    0 => 'Block_16503664861f077f53257e5_97150877',
  ),
  'other_fieldsets' => 
  array (
    0 => 'Block_100689909061f077f5331d56_60504889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>


            <?php if ((isset($_smarty_tpl->tpl_vars['identifier_bk']->value)) && $_smarty_tpl->tpl_vars['identifier_bk']->value == $_smarty_tpl->tpl_vars['identifier']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'identifier_count', null, null);
echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('identifier_bk', $_smarty_tpl->tpl_vars['identifier']->value ,false ,2);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['table_bk']->value)) && $_smarty_tpl->tpl_vars['table_bk']->value == $_smarty_tpl->tpl_vars['table']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'table_count', null, null);
echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('table_bk', $_smarty_tpl->tpl_vars['table']->value ,false ,2);?>
			<form id="<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'],'html','UTF-8' ));
} else {
if ($_smarty_tpl->tpl_vars['table']->value == null) {?>configuration_form<?php } else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count'));
}
}?>"
			      class="defaultForm form-horizontal<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value)) && $_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['token']->value)) && $_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));
}?>"<?php }?>
			      method="post" enctype="multipart/form-data"<?php if ((isset($_smarty_tpl->tpl_vars['style']->value))) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
                <?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
"
					       id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count'));
}?>"
					       value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"/>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1"/>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('tabkey', 0);?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['section'], 'fieldset2');
$_smarty_tpl->tpl_vars['fieldset2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldset2']->value) {
$_smarty_tpl->tpl_vars['fieldset2']->do_else = false;
?>


                        <?php if ($_smarty_tpl->tpl_vars['f']->value == 0) {?>
							<div id="tab_rule_<?php echo $_smarty_tpl->tpl_vars['tabkey']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
 tab_rule_tab ">
                            <?php $_smarty_tpl->_subTemplateRender("module:bluepayment/views/templates/admin/_configure/helpers/form/benefits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['f']->value == 2) {?>
							<div id="tab_rule_<?php echo $_smarty_tpl->tpl_vars['tabkey']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
 tab_rule_tab ">
                        <?php }?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15742234361f077f531cda8_52692640', "fieldset", $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100689909061f077f5331d56_60504889', "other_fieldsets", $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['f']->value == 1) {?>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['f']->value == 2) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'adminPayments'),$_smarty_tpl ) );?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['f']->value == 3) {?>
							</div>
                        <?php }?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php $_smarty_tpl->_assignInScope('tabkey', $_smarty_tpl->tpl_vars['tabkey']->value+1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</form>
        <?php
}
}
/* {/block "defaultForm"} */
/* {block "after"} */
class Block_194128309261f077f5334ad4_87215779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_194128309261f077f5334ad4_87215779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
/* {block "script"} */
class Block_214699758261f077f53381b7_75440620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_214699758261f077f53381b7_75440620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
