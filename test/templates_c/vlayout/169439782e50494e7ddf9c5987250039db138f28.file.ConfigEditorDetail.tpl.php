<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 06:57:33
         compiled from "C:\xampp\htdocs\crm6\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\ConfigEditorDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:852658ad365d4c6442-46096883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169439782e50494e7ddf9c5987250039db138f28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm6\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\ConfigEditorDetail.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852658ad365d4c6442-46096883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODEL' => 0,
    'WIDTHTYPE' => 0,
    'FIELD_DETAILS' => 0,
    'FIELD_NAME' => 0,
    'FIELD_DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ad365d6d5a3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad365d6d5a3')) {function content_58ad365d6d5a3($_smarty_tpl) {?>
<div class="container-fluid" id="ConfigEditorDetails"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate('LBL_CONFIG_EDITOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="span4"><div class="pull-right"><button class="btn editButton" data-url='<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getEditViewUrl();?>
' type="button" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><hr><div class="contents"><table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="alignMiddle"><?php echo vtranslate('LBL_CONFIG_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php $_smarty_tpl->tpl_vars['FIELD_DATA'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODEL']->value->getViewableData(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_DETAILS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_DETAILS']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODEL']->value->getEditableFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_DETAILS']->key => $_smarty_tpl->tpl_vars['FIELD_DETAILS']->value){
$_smarty_tpl->tpl_vars['FIELD_DETAILS']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_DETAILS']->key;
?><tr><td width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px pull-right"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td style="border-left: none;" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='default_module'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value],$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]);?>
<?php }elseif($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['fieldType']=='checkbox'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='upload_maxsize'){?>&nbsp;<?php echo vtranslate('LBL_MB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></span></td></tr><?php } ?></tbody></table></div></div><?php }} ?>