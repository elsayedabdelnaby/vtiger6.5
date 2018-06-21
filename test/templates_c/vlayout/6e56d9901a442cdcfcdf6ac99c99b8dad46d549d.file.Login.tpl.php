<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:51
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59565b2ba3db949088-14900751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e56d9901a442cdcfcdf6ac99c99b8dad46d549d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\Login.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59565b2ba3db949088-14900751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3db95e9a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3db95e9a')) {function content_5b2ba3db95e9a($_smarty_tpl) {?><div class="modal-header contentsBackground">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_LOGIN_TO_VTE_STORE','VTEStore');?>
</h3>
</div>
<form class="form-horizontal loginForm">
    <input type="hidden" name="module" value="VTEStore"/>
    <input type="hidden" name="parent" value="Settings"/>
    <input type="hidden" name="action" value="ActionAjax"/>
    <input type="hidden" name="userAction" value="login"/>
    <input type="hidden" name="mode" value="registerAccount"/>
    <input type="hidden" name="vtiger_url" value="<?php echo $_smarty_tpl->tpl_vars['VTIGER_URL']->value;?>
"/>

    <div class="modal-body">
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_USERNAME','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="username" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PASSWORD','VTEStore');?>
</span>
            <div class="controls"><input type="password" name="password" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"></span>
            <div class="controls"><span><input type="checkbox" name="savePassword" value="1" checked> &nbsp; &nbsp;<?php echo vtranslate('LBL_REMEMBER_ME','VTEStore');?>
</span></div>
        </div>
        <div class="control-group">
            <span class="control-label"></span>
            <div class="controls"><a href="javascript:void(0);" style="text-decoration: underline;" id="forgotPassword" name="forgotPassword"><u><?php echo vtranslate('Forgot Password','VTEStore');?>
</u></a></div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row-fluid">
            <div class="span6"><div class="row-fluid"><a href="#" name="signUp"><?php echo vtranslate('LBL_CREATE_AN_ACCOUNT','VTEStore');?>
</a></div></div>
            <div class="span6">
                <div class="pull-right">
                    <div class="pull-right cancelLinkContainer" style="margin-top:0px;">
                        <a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','VTEStore');?>
</a>
                    </div>
                    <button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_LOGIN','VTEStore');?>
</strong></button>
                </div>
            </div>
        </div>
    </div>
</form><?php }} ?>