<?php
/* Smarty version 3.1.39, created on 2022-01-25 23:21:41
  from 'module:bluepaymentviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f077f56d8e80_27032578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20d87eb11e5f4abb115ddac3a7109ec56fb76d9' => 
    array (
      0 => 'module:bluepaymentviewstemplates',
      1 => 1643149126,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/form/form_group.tpl' => 1,
  ),
),false)) {
function content_61f077f56d8e80_27032578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140796310961f077f5634ff7_19040842', "input_row");
?>

<?php }
/* {block "label"} */
class Block_133578883561f077f567f3d3_74187917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['label']))) {?>
					<label class="control-label text-left text-lg-right col-xs-12 col-lg-3<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['required'])) && $_smarty_tpl->tpl_vars['_input']->value['required']) {?> required<?php }?>">
                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['hint']))) {?>
						<span class="label-tooltip"
						      data-toggle="tooltip" data-html="true"
						      title="<?php if (is_array($_smarty_tpl->tpl_vars['_input']->value['hint'])) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8' ));?>

														<?php } else { ?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8' ));?>

														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php } else { ?>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['hint'],'html','UTF-8' ));?>

												<?php }?>">
										<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['_input']->value['label'];?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['doc']))) {?>
								<span class="doc_class">
													<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_input']->value['doc'];?>
">?</a>
												</span>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['hint']))) {?>
										</span>
                        <?php }?>
					</label>
                <?php }?>
            <?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_81940827261f077f5685090_38061609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'text') {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['lang'])) && $_smarty_tpl->tpl_vars['_input']->value['lang']) {?>
                                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
									<div class="form-group">
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
                                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
										<div class="col-lg-10">
                                    <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
									<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>">
                                <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar']))) {?>
										<span id="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"
										      class="input-group-addon">
													<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['_input']->value['maxchar'];?>
</span>
												</span>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['prefix']))) {?>
										<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['_input']->value['prefix'];?>

													</span>
                                    <?php }?>
									<input type="text"
									       id="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"
									       name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									       class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>"
									       value="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['string_format'])) && $_smarty_tpl->tpl_vars['_input']->value['string_format']) {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['_input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['_input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['_input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['_input']->value['string_format'],$_smarty_tpl->tpl_vars['_input']->value['default_val']),'html','UTF-8' ));
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['_input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['_input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['default_val'],'html','UTF-8' ));
}
}
}?>"
									       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['_input']->value['size'];?>
"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar']))) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['_input']->value['maxchar'];?>
"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['_input']->value['maxlength'];?>
"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['readonly'])) && $_smarty_tpl->tpl_vars['_input']->value['readonly']) {?> readonly="readonly"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['disabled'])) && $_smarty_tpl->tpl_vars['_input']->value['disabled']) {?> disabled="disabled"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['_input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['required'])) && $_smarty_tpl->tpl_vars['_input']->value['required']) {?> required="required" <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['_input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['_input']->value['placeholder'];?>
"<?php }?> />
                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
										<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['_input']->value['suffix'];?>

													</span>
                                    <?php }?>



                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
									</div>
                                <?php }?>

                                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
										</div>
										<div class="col-lg-2">
											<button type="button"
											        class="btn btn-default dropdown-toggle"
											        tabindex="-1"
											        data-toggle="dropdown">
                                                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

												<i class="icon-caret-down"></i>
											</button>
											<ul class="dropdown-menu">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
													<li>
														<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
														   tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
													</li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['help']))) {?>
											<div class="col-lg-12">
												<p class="help-text"><?php echo $_smarty_tpl->tpl_vars['_input']->value['help'];?>
</p>
											</div>
                                        <?php }?>
										</div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
									</div>
                                <?php }?>
                            <?php } else { ?>

                                <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']]);?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
									<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>">
                                <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['prefix']))) {?>
									<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['_input']->value['prefix'];?>

										</span>
                                <?php }?>
								<input type="text"
								       name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"
								       id="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['_input']->value['name'];
}?>"
								       value="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['string_format'])) && $_smarty_tpl->tpl_vars['_input']->value['string_format']) {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['_input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['_input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['_input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['_input']->value['string_format'],$_smarty_tpl->tpl_vars['_input']->value['default_val']),'html','UTF-8' ));
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['value_text']->value)) && !empty($_smarty_tpl->tpl_vars['value_text']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
} else {
if ((isset($_smarty_tpl->tpl_vars['_input']->value['default_val'])) && !empty($_smarty_tpl->tpl_vars['_input']->value['default_val'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['default_val'],'html','UTF-8' ));
}
}
}?>"
								       class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>"
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['_input']->value['size'];?>
"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar']))) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['_input']->value['maxchar'];?>
"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['_input']->value['maxlength'];?>
"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['readonly'])) && $_smarty_tpl->tpl_vars['_input']->value['readonly']) {?> readonly="readonly"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['disabled'])) && $_smarty_tpl->tpl_vars['_input']->value['disabled']) {?> disabled="disabled"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['_input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['required'])) && $_smarty_tpl->tpl_vars['_input']->value['required']) {?> required="required" <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['_input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['_input']->value['placeholder'];?>
"<?php }?>
								/>
                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
									<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['_input']->value['suffix'];?>

										</span>
                                <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['help']))) {?>
									<p class="help-text"><?php echo $_smarty_tpl->tpl_vars['_input']->value['help'];?>
</p>
                                <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['_input']->value['suffix']))) {?>
									</div>
                                <?php }?>

                            <?php }?>


                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'select') {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['options']['query'])) && !$_smarty_tpl->tpl_vars['_input']->value['options']['query'] && (isset($_smarty_tpl->tpl_vars['_input']->value['empty_message']))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['_input']->value['empty_message'];?>

                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['_input']) ? $_smarty_tpl->tpl_vars['_input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['required'] = false;
$_smarty_tpl->_assignInScope('_input', $_tmp_array);?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['_input']) ? $_smarty_tpl->tpl_vars['_input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['desc'] = null;
$_smarty_tpl->_assignInScope('_input', $_tmp_array);?>
                            <?php } else { ?>
								<select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['name'],'html','UTF-8' ));?>
"
								        class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['class'],'html','UTF-8' ));
}?> bm-select"
								        id="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['id'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['name'],'html','UTF-8' ));
}?>"
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['multiple']))) {?>multiple="multiple" <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['size']))) {?>size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['size'],'html','UTF-8' ));?>
"<?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['onchange']))) {?>onchange="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['onchange'],'html','UTF-8' ));?>
"<?php }?>>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['options']['default']))) {?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['options']['default']['value'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_input']->value['options']['default']['label'],'html','UTF-8' ));?>
</option>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['options']['optiongroup']))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['options']['optiongroup']['query'], 'optiongroup');
$_smarty_tpl->tpl_vars['optiongroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->do_else = false;
?>
											<optgroup
													label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['optiongroup']['label']];?>
">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['options']['query']], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['options']['id']];?>
"
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['multiple']))) {?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                                            <?php }?>
													><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['options']['name']];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</optgroup>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['_input']->value['options']['id']};?>
"
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['multiple']))) {?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['_input']->value['options']['id']}) {?>
																	selected="selected"
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['_input']->value['options']['id']}) {?>
																selected="selected"
                                                            <?php }?>
                                                        <?php }?>
												><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['_input']->value['options']['name']};?>
</option>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
												<option value="">-</option>
                                            <?php } else { ?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['id']];?>
"
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['multiple']))) {?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['id']]) {?>
																	selected="selected"
                                                                <?php }?>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['id']]) {?>
																selected="selected"
                                                            <?php }?>
                                                        <?php }?>
												><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['_input']->value['options']['name']];?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
								</select>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'radio') {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<div class="radio <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>">
                                    <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['_input']->value['disabled'])) && $_smarty_tpl->tpl_vars['_input']->value['disabled']) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
								</div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['p'])) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p
										class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'switch') {?>
							<span class="switch prestashop-switch fixed-width-lg">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
											<input type="radio"
											       name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['_input']->value['disabled'])) && $_smarty_tpl->tpl_vars['_input']->value['disabled']) {?> disabled="disabled"<?php }?>/>


<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'bluepayment'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'bluepayment'),$_smarty_tpl ) );
}?></label>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<a class="slide-button btn"></a>
									</span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['help']))) {?>
								<p class="help-text"><?php echo $_smarty_tpl->tpl_vars['_input']->value['help'];?>
</p>
                            <?php }?>


                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'textarea') {?>
                            <?php $_smarty_tpl->_assignInScope('use_textarea_autosize', true);?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['lang'])) && $_smarty_tpl->tpl_vars['_input']->value['lang']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
										<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
										<div class="col-lg-3">
                                    <?php }?>
									<textarea
											name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
											class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['_input']->value['autoload_rte']) {?>rte autoload_rte<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}
} else {
if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['class'];
} else { ?> textarea-autosize<?php }
}?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
</textarea>
                                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
										</div>
										<div class="col-lg-2">
											<button type="button"
											        class="btn btn-default dropdown-toggle"
											        tabindex="-1"
											        data-toggle="dropdown">
                                                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
													<li>
														<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
														   tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
													</li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>
										</div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php } else { ?>
								<textarea name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"
								          id="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['_input']->value['name'];
}?>"
                                          <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['cols']))) {?>cols="<?php echo $_smarty_tpl->tpl_vars['_input']->value['cols'];?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['rows']))) {?>rows="<?php echo $_smarty_tpl->tpl_vars['_input']->value['rows'];?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['_input']->value['autoload_rte']) {?>rte autoload_rte<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}
} else { ?> textarea-autosize<?php }?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']],'html','UTF-8' ));?>
</textarea>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'checkbox') {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['expand']))) {?>
								<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['_input']->value['expand']['default']) == 'hide') {?> hidden<?php }?>"
								   href="#">
									<i class="icon-<?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['show']['icon'];?>
"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['show']['text'];?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'] > 0) {?>
										<span class="badge"><?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'];?>
</span>
                                    <?php }?>
								</a>
								<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['_input']->value['expand']['default']) == 'show') {?> hidden<?php }?>"
								   href="#">
									<i class="icon-<?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['hide']['icon'];?>
"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['hide']['text'];?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'] > 0) {?>
										<span class="badge"><?php echo $_smarty_tpl->tpl_vars['_input']->value['expand']['print_total'];?>
</span>
                                    <?php }?>
								</a>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['_input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['_input']->value['values']['id']]));?>
								<div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['_input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"class="<?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['_input']->value['class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['val']))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['_input']->value['values']['name']];?>
</label>
								</div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'group') {?>
                            <?php $_smarty_tpl->_assignInScope('groups', $_smarty_tpl->tpl_vars['_input']->value['values']);?>
                            <?php $_smarty_tpl->_subTemplateRender('file:helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'html') {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['html_content']))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['_input']->value['html_content'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>

                            <?php }?>
                        <?php }?>
                    <?php
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_129948516861f077f56d5d75_67465326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['_input']->value['desc'])) {?>
							<p class="help-block">
                                <?php if (is_array($_smarty_tpl->tpl_vars['_input']->value['desc'])) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_input']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
											<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span>
											<br/>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['p']->value;?>

											<br/>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['_input']->value['desc'];?>

                                <?php }?>
							</p>
                        <?php }?>
                    <?php
}
}
/* {/block "description"} */
/* {block "field"} */
class Block_4099338261f077f5683e80_48018119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="col-xs-12 col-lg-5 <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['col']))) {
echo intval($_smarty_tpl->tpl_vars['_input']->value['col']);
} else { ?>5<?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['_input']->value['label']))) {?>col-lg-offset-3<?php }?>">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81940827261f077f5685090_38061609', "input", $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129948516861f077f56d5d75_67465326', "description", $this->tplIndex);
?>


				</div>
            <?php
}
}
/* {/block "field"} */
/* {block "input_row"} */
class Block_140796310961f077f5634ff7_19040842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_140796310961f077f5634ff7_19040842',
  ),
  'label' => 
  array (
    0 => 'Block_133578883561f077f567f3d3_74187917',
  ),
  'field' => 
  array (
    0 => 'Block_4099338261f077f5683e80_48018119',
  ),
  'input' => 
  array (
    0 => 'Block_81940827261f077f5685090_38061609',
  ),
  'description' => 
  array (
    0 => 'Block_129948516861f077f56d5d75_67465326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="form-group <?php echo mb_strtolower($_smarty_tpl->tpl_vars['_input']->value['name'], 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['_input']->value['form_group_class']))) {?> <?php echo $_smarty_tpl->tpl_vars['_input']->value['form_group_class'];
}?>"<?php if ($_smarty_tpl->tpl_vars['_input']->value['name'] == 'id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }
}
if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && (isset($_smarty_tpl->tpl_vars['_input']->value['tab']))) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['_input']->value['tab'];?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'hidden') {?>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"
			       value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['_input']->value['name']],'html','UTF-8' ));?>
"/>
        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'description') {?>
			<div class="infoheading_class col-sm-12">
                <?php $_smarty_tpl->_assignInScope('desc_template', $_smarty_tpl->tpl_vars['_input']->value['content']);?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['desc_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>
        <?php } elseif ($_smarty_tpl->tpl_vars['_input']->value['type'] == 'infoheading') {?>
			<div class="infoheading_class col-sm-12"
			     data-name="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['_input']->value['name'];?>
"
			     style=" background: #eee;">
				<h4 class="infoheading_label col-lg-offset-3"
				    style="font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['_input']->value['label'];?>
</h4>
                <?php if ((isset($_smarty_tpl->tpl_vars['_input']->value['sublabel']))) {?>
					<span class="infoheading_sublabel"><?php echo $_smarty_tpl->tpl_vars['_input']->value['sublabel'];?>
</span>
                <?php }?>
			</div>
        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133578883561f077f567f3d3_74187917', "label", $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4099338261f077f5683e80_48018119', "field", $this->tplIndex);
?>

        <?php }?>
	</div>
<?php
}
}
/* {/block "input_row"} */
}
