<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:12:48
         compiled from "/home/gamerammo/public_html/wiki/templates/object_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14371933565a7f7c70195206-45420574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2039fcd124d5fb97affbc3b523a093bc306232cc' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/object_selector.tpl',
      1 => 1416611536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14371933565a7f7c70195206-45420574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_selector' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7c701b1a20_65597156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7c701b1a20_65597156')) {function content_5a7f7c701b1a20_65597156($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.jq.php';
?><div class="object-selector">
<input
	type="text"
	id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['simpleid']);?>
"
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simpleclass']) {?>class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['simpleclass']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simplename']) {?>name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['simplename']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['simplevalue']) {?>value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['id']);?>
"<?php }?>
>
<input
	type="text"
	id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['id']);?>
"
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['name']) {?>name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['name']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['class']) {?>class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['class']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
		value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']);?>
"
		data-label="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title']);?>
"
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['parent']) {?>data-parent="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['parent']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['parentkey']) {?>data-parentkey="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['parentkey']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['format']) {?>data-format="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['format']);?>
"<?php }?>
	data-filters="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['filter']);?>
"
	data-threshold="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['object_selector']->value['threshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prefs']->value['tiki_object_selector_threshold'] : $tmp));?>
"
>
	<div class="basic-selector hidden">
		<select class="form-control">
			<option value="" class="protected">&mdash;</option>
			<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']);?>
" selected="selected"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title']);?>
</option>
			<?php }?>
		</select>
	</div>

	<div class="panel panel-default hidden">
		<div class="panel-heading">
			<div class="input-group">
				<span class="input-group-addon">
					<?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>

				</span>
				<input type="text" placeholder="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['placeholder']);?>
..." value="" class="filter form-control" autocomplete="off">
				<div class="input-group-btn">
					<button class="btn btn-default search">Find</button>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="results">
				<p class="too-many">Search and select what you are looking for from the options that appear.</p>
				<div class="radio">
					<label>
						<input type="radio" <?php if (!$_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?> checked="checked" <?php }?> value="" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['id']);?>
_sel" class="protected">
						&mdash;
					</label>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']) {?>
					<div class="radio">
						<label>
							<input type="radio" checked="checked" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']);?>
" data-label="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title']);?>
" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['id']);?>
_sel">
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['current_selection']['title']);?>

						</label>
					</div>
				<?php }?>
			</div>
			<p class="no-results hidden">
				No matching results.
			</p>
		</div>
	</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector']->value['id']);?>
')
	.object_selector();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
