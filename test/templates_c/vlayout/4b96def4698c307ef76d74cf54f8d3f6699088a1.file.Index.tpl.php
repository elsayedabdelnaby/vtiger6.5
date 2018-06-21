<?php /* Smarty version Smarty-3.1.7, created on 2017-04-19 13:35:06
         compiled from "C:\xampp\htdocs\crm6.5\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3130858f74b6ada3928-37702277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b96def4698c307ef76d74cf54f8d3f6699088a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm6.5\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\Index.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3130858f74b6ada3928-37702277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'USERS_COUNT' => 0,
    'ACTIVE_WORKFLOWS' => 0,
    'ACTIVE_MODULES' => 0,
    'SETTINGS_SHORTCUTS' => 0,
    'SPAN_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f74b6adde18',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f74b6adde18')) {function content_58f74b6adde18($_smarty_tpl) {?>
<div class="container-fluid settingsIndexPage"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><hr><div class="row-fluid"><span class="span4 settingsSummary"><a href="index.php?module=Users&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="span4 settingsSummary"><a href="index.php?module=Workflows&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_WORKFLOWS']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="span4 settingsSummary"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span></div><br><br><h3><?php echo vtranslate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><hr><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><div class="row-fluid"><div class="span1">&nbsp;</div><div id="settingsShortCutsContainer" class="span11"><div  class="row-fluid"><?php  $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->key => $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value){
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = true;
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration++;
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->last = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration === $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['shortcuts']['last'] = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->last;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['SPAN_COUNT']->value==3){?></div><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['shortcuts']['last']){?><div class="row-fluid"><?php }?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['SPAN_COUNT']->value+1, null, 0);?><?php } ?></div></div></div>
<?php }} ?>