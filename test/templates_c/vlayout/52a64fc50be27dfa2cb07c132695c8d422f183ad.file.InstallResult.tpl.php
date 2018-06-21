<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:37
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\InstallResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316895b2ba3cd7a5234-79669219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a64fc50be27dfa2cb07c132695c8d422f183ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\InstallResult.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316895b2ba3cd7a5234-79669219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'EXTENSION_NAME' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3cd8229d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3cd8229d')) {function content_5b2ba3cd8229d($_smarty_tpl) {?>
<div class='modelContainer'><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='0'){?>Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT'));location.reload();<?php }?>">&times;</button><h3 style="color:green;"><?php echo $_smarty_tpl->tpl_vars['EXTENSION_NAME']->value;?>
</h3></div><div class="modal-body" id="installationLog"><div class="row-fluid" <?php if ($_smarty_tpl->tpl_vars['ERROR']->value!='0'){?>style="color:red;"<?php }?>><span class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span><br><br><div align="center"> <?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='0'){?><img src="layouts/vlayout/modules/VTEStore/resources/images/VTEStoreSetting.jpg" align="center"><?php }?></div></div></div><div class="modal-footer"><span class="pull-right"><button class="btn btn-success" id="importCompleted" onclick="app.hideModalWindow();<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='0'||$_smarty_tpl->tpl_vars['ERROR']->value=='2'){?>Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT'));location.reload();<?php }?>"><?php echo vtranslate('LBL_OK','VTEStore');?>
</button></span></div></div><?php }} ?>