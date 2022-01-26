<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:41
  from 'C:\xampp\htdocs\prestashop\modules\bluepayment\views\templates\admin\_configure\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f5c3a900_76250275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e9d05169f18caa1db0f06a0e270c54fea230358' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\bluepayment\\views\\templates\\admin\\_configure\\helpers\\list\\list_header.tpl',
      1 => 1643149126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f077f5c3a900_76250275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function () {
			$(".ajax_table_link").click(function () {
				var link = $(this);
				$.post($(this).attr('href'), function (data) {
				  // If response comes from symfony controller
          // then data has "status" and "message" properties
          // otherwise if response comes from legacy controller
          // then data has "success" and "text" properties.

					if (data.success == 1 || data.status === true) {
						showSuccessMessage(data.text || data.message);
						if (link.hasClass('action-disabled')){
							link.removeClass('action-disabled').addClass('action-enabled');
						} else {
							link.removeClass('action-enabled').addClass('action-disabled');
						}
						link.children().each(function () {
							if ($(this).hasClass('hidden')) {
								$(this).removeClass('hidden');
							} else {
								$(this).addClass('hidden');
							}
						});
					} else {
						showErrorMessage(data.text || data.message);
					}
				}, 'json');
				return false;
			});
		});
	<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['is_order_position']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery/plugins/jquery.tablednd.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		var come_from = '<?php echo addslashes($_smarty_tpl->tpl_vars['list_id']->value);?>
';
		var alternate = <?php if ($_smarty_tpl->tpl_vars['order_way']->value == 'DESC') {?>'1'<?php } else { ?>'0'<?php }?>;
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/admin/dnd.js"><?php echo '</script'; ?>
>
<?php }
if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			$('table.<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
 .filter').keypress(function(e){
				var key = (e.keyCode ? e.keyCode : e.which);
				if (key == 13)
				{
					e.preventDefault();
					formSubmit(e, 'submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
');
				}
			})
			$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click(function() {
				$('#submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').val(1);
			});

			if ($("table .datepicker").length > 0) {
				$("table .datepicker").datepicker({
					prevText: '',
					nextText: '',
					altFormat: 'yy-mm-dd'
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<div class="leadin">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54640979561f077f5c0d3e7_65047630', "leadin");
?>

	</div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81382777461f077f5c0d9f8_75609256', "override_header");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminListBefore'),$_smarty_tpl ) );?>


<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_GET['controller']))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
ListBefore<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }?>


<div class="row">

	<div class="alert alert-warning" id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
-empty-filters-alert" style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill at least one field to perform a search in this list.','mod'=>'bluepayment'),$_smarty_tpl ) );?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['sql']->value)) && $_smarty_tpl->tpl_vars['sql']->value) {?>
	<form id="sql_form_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['list_id']->value,'html','UTF-8' ));?>
" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRequestSql',true,array(),array('addrequest_sql'=>1)) ));?>
" method="post" class="hide">
		<input type="hidden" id="sql_query_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['list_id']->value,'html','UTF-8' ));?>
" name="sql" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sql']->value ));?>
"/>
		<input type="hidden" id="sql_name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['list_id']->value,'html','UTF-8' ));?>
" name="name" value=""/>
	</form>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192763293661f077f5c12f66_87751606', "startForm");
?>


<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
	<input type="hidden" id="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" value="0"/>
	<input type="hidden" name="page" value="<?php echo intval($_smarty_tpl->tpl_vars['page']->value);?>
"/>
	<input type="hidden" name="selected_pagination" value="<?php echo intval($_smarty_tpl->tpl_vars['selected_pagination']->value);?>
"/>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82914193061f077f5c14673_59067197', "override_form_extra");
?>


	<div class="col-lg-12">
		<div class="panel-heading">

			<?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value),'html','UTF-8' ));?>

			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>

			<?php }?>


		</div>
		<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				//<![CDATA[
				var submited = false;
				$(function() {
					//get reference on save link
					btn_save = $('i[class~="process-icon-save"]').parent();
					//get reference on form submit button
					btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');
					if (btn_save.length > 0 && btn_submit.length > 0) {
						//get reference on save and stay link
						btn_save_and_stay = $('i[class~="process-icon-save-and-stay"]').parent();
						//get reference on current save link label
						lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save div');
						//override save link label with submit button value
						if (btn_submit.val().length > 0) {
							lbl_save.html(btn_submit.attr("value"));
						}
						if (btn_save_and_stay.length > 0) {
							//get reference on current save link label
							lbl_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay div');
							//override save and stay link label with submit button value
							if (btn_submit.val().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked')) {
								lbl_save_and_stay.html(btn_submit.val() + " <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and stay','mod'=>'bluepayment'),$_smarty_tpl ) );?>
 ");
							}
						}
						//hide standard submit button
						btn_submit.hide();
						//bind enter key press to validate form
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').keypress(function (e) {
							if (e.which == 13 && e.target.localName != 'textarea') {
								$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
							}
						});
						//submit the form
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181248808261f077f5c16c00_03309940', 'formSubmit');
?>

					}
				});
				//]]>
			<?php echo '</script'; ?>
>
		<?php }
} elseif ($_smarty_tpl->tpl_vars['simple_header']->value) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
			<div class="section-heading">
				<?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value),'html','UTF-8' ));?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>

				<?php }?>
			</div>
		<?php }
}?>


	<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
		<?php $_smarty_tpl->_assignInScope('y', 2);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('y', 1);?>
	<?php }?>
	<style>
	@media (max-width: 992px) {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'param', false, NULL, 'params', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index']++;
?>
			.table-responsive-row td:nth-of-type(<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_params']->value['index'] : null),'y'=>$_smarty_tpl->tpl_vars['y']->value),$_smarty_tpl);?>
):before {
				content: "<?php echo $_smarty_tpl->tpl_vars['param']->value['title'];?>
";
			}
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
	</style>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109393147661f077f5c1bf75_70084647', "preTable");
?>

	<div class="table-responsive-row clearfix<?php if ((isset($_smarty_tpl->tpl_vars['use_overflow']->value)) && $_smarty_tpl->tpl_vars['use_overflow']->value) {?> overflow-y<?php }?>">
		<table id="table-<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {
echo $_smarty_tpl->tpl_vars['table_id']->value;
} elseif ($_smarty_tpl->tpl_vars['table']->value) {
echo $_smarty_tpl->tpl_vars['table']->value;
}?>" class="table<?php if ($_smarty_tpl->tpl_vars['table_dnd']->value) {?> tableDnD<?php }?> <?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" >
			<thead>
				<tr class="nodrag nodrop">
					<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
						<th class="center fixed-width-xs"></th>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<th class="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {
echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>">
						<span class="title_box<?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value)) {?> active<?php }?>">
							<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['hint']))) {?>
								<span class="label-tooltip" data-toggle="tooltip"
									title="
										<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['hint'])) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
												<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>

												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>

												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['params']->value['hint'];?>

										<?php }?>
									">
									<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

								</span>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>

							<?php }?>
							<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['orderby'])) || $_smarty_tpl->tpl_vars['params']->value['orderby']) && !$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['show_filters']->value) {?>
								<a <?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value) && ($_smarty_tpl->tpl_vars['order_way']->value == 'DESC')) {?>class="active"<?php }?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=desc&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));
if ((isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value]))) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);
}?>">
									<i class="icon-caret-down"></i>
								</a>
								<a <?php if ((isset($_smarty_tpl->tpl_vars['order_by']->value)) && ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['order_by']->value) && ($_smarty_tpl->tpl_vars['order_way']->value == 'ASC')) {?>class="active"<?php }?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderby=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Orderway=asc&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));
if ((isset($_GET[$_smarty_tpl->tpl_vars['identifier']->value]))) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo intval($_GET[$_smarty_tpl->tpl_vars['identifier']->value]);
}?>">
									<i class="icon-caret-up"></i>
								</a>
							<?php }?>
						</span>
					</th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['multishop_active']->value && $_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
						<th>
							<span class="title_box">
							<?php if ($_smarty_tpl->tpl_vars['shop_link_type']->value == 'shop') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop group','mod'=>'bluepayment'),$_smarty_tpl ) );?>

							<?php }?>
							</span>
						</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['has_actions']->value || $_smarty_tpl->tpl_vars['show_filters']->value) {?>
						<th><?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {
}?></th>
					<?php }?>
				</tr>
			<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['show_filters']->value) {?>
				<tr class="nodrag nodrop filter <?php if ($_smarty_tpl->tpl_vars['row_hover']->value) {?>row_hover<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
						<th class="text-center">
							--
						</th>
					<?php }?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
						<th <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['params']->value['align'];?>
" <?php }?>>
							<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['search'])) && !$_smarty_tpl->tpl_vars['params']->value['search']) {?>
								--
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['params']->value['type'] == 'bool') {?>
									<select class="filter fixed-width-sm center"
                          onchange="$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').focus();$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click();"
                          name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>">
										<option value="">-</option>
										<option value="1" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == 1) {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
										<option value="0" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == 0 && $_smarty_tpl->tpl_vars['params']->value['value'] != '') {?> selected="selected" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
									</select>
								<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'date' || $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
									<div class="date_range row">
 										<div class="input-group fixed-width-md center">
											<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','mod'=>'bluepayment'),$_smarty_tpl ) );?>
" />
											<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[0]" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][0]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][0];
}?>">
											<span class="input-group-addon">
												<i class="icon-calendar"></i>
											</span>
										</div>
 										<div class="input-group fixed-width-md center">
											<input type="text" class="filter datepicker date-input form-control" id="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="local_<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','mod'=>'bluepayment'),$_smarty_tpl ) );?>
" />
											<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1" name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name_date'];?>
[1]" value="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['value'][1]))) {
echo $_smarty_tpl->tpl_vars['params']->value['value'][1];
}?>">
											<span class="input-group-addon">
												<i class="icon-calendar"></i>
											</span>
										</div>
										<?php echo '<script'; ?>
>
											$(function() {
												var dateStart = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").val());
												var dateEnd = parseDate($("#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").val());
												$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0");
												$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("option", "altField", "#<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1");
												if (dateStart !== null){
													$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_0").datepicker("setDate", dateStart);
												}
												if (dateEnd !== null){
													$("#local_<?php echo $_smarty_tpl->tpl_vars['params']->value['id_date'];?>
_1").datepicker("setDate", dateEnd);
												}
											});
										<?php echo '</script'; ?>
>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'select') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {?>
										<select class="filter<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['align'])) && $_smarty_tpl->tpl_vars['params']->value['align'] == 'center') {?>center<?php }?>" onchange="$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').focus();$('#submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
').click();" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['width']))) {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?>>
											<option value="" <?php if ($_smarty_tpl->tpl_vars['params']->value['value'] == '') {?> selected="selected" <?php }?>>-</option>
											<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['list'])) && is_array($_smarty_tpl->tpl_vars['params']->value['list'])) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['list'], 'option_display', false, 'option_value');
$_smarty_tpl->tpl_vars['option_display']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->value => $_smarty_tpl->tpl_vars['option_display']->value) {
$_smarty_tpl->tpl_vars['option_display']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['option_value']->value;?>
" <?php if ((string)$_smarty_tpl->tpl_vars['option_display']->value === (string)$_smarty_tpl->tpl_vars['params']->value['value'] || (string)$_smarty_tpl->tpl_vars['option_value']->value === (string)$_smarty_tpl->tpl_vars['params']->value['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option_display']->value;?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</select>
									<?php }?>
								<?php } else { ?>
									<input type="text" class="filter" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Filter_<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['filter_key']))) {
echo $_smarty_tpl->tpl_vars['params']->value['filter_key'];
} else {
echo $_smarty_tpl->tpl_vars['key']->value;
}?>" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['params']->value['value'],'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['width'])) && $_smarty_tpl->tpl_vars['params']->value['width'] != 'auto') {?> style="width:<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
px"<?php }?> />
								<?php }?>
							<?php }?>
						</th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php if ($_smarty_tpl->tpl_vars['multishop_active']->value && $_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
						<th>--</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['has_actions']->value || $_smarty_tpl->tpl_vars['show_filters']->value) {?>
						<th class="actions">
							<?php if ($_smarty_tpl->tpl_vars['show_filters']->value) {?>
							<span class="pull-right">
																<button type="submit" id="submitFilterButton<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" name="submitFilter" class="btn btn-default" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
									<i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

								</button>
								<?php if ($_smarty_tpl->tpl_vars['filters_has_value']->value) {?>
									<button type="submit" name="submitReset<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
" class="btn btn-warning">
										<i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'bluepayment'),$_smarty_tpl ) );?>

									</button>
								<?php }?>
							</span>
							<?php }?>
						</th>
					<?php }?>
				</tr>
			<?php }?>
			</thead>
<?php }
/* {block "leadin"} */
class Block_54640979561f077f5c0d3e7_65047630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_54640979561f077f5c0d3e7_65047630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "override_header"} */
class Block_81382777461f077f5c0d9f8_75609256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_81382777461f077f5c0d9f8_75609256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_header"} */
/* {block "startForm"} */
class Block_192763293661f077f5c12f66_87751606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'startForm' => 
  array (
    0 => 'Block_192763293661f077f5c12f66_87751606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
<?php
}
}
/* {/block "startForm"} */
/* {block "override_form_extra"} */
class Block_82914193061f077f5c14673_59067197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_form_extra' => 
  array (
    0 => 'Block_82914193061f077f5c14673_59067197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "override_form_extra"} */
/* {block 'formSubmit'} */
class Block_181248808261f077f5c16c00_03309940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formSubmit' => 
  array (
    0 => 'Block_181248808261f077f5c16c00_03309940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							btn_save.click(function() {
								// Avoid double click
								if (submited) {
									return false;
								}
								submited = true;
								//add hidden input to emulate submit button click when posting the form -> field name posted
								btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');
								$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
								return false;
							});
							if (btn_save_and_stay) {
								btn_save_and_stay.click(function() {
									//add hidden input to emulate submit button click when posting the form -> field name posted
									btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');
									$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
									return false;
								});
							}
						<?php
}
}
/* {/block 'formSubmit'} */
/* {block "preTable"} */
class Block_109393147661f077f5c1bf75_70084647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_109393147661f077f5c1bf75_70084647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "preTable"} */
}
