<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:51
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\SignUp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205255b2ba3db9ee021-91438081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549e025ed5b47e89bf998dec7759af79cadb74a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\SignUp.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205255b2ba3db9ee021-91438081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_URL' => 0,
    'HATCHBUCK_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3dba11af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3dba11af')) {function content_5b2ba3dba11af($_smarty_tpl) {?><div class="modal-header contentsBackground">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo vtranslate('LBL_SIGN_UP_TO_VTE_STORE','VTEStore');?>
</h3>
</div>
<form class="form-horizontal signUpForm">
    <input type="hidden" name="module" value="VTEStore"/>
    <input type="hidden" name="parent" value="Settings"/>
    <input type="hidden" name="action" value="ActionAjax"/>
    <input type="hidden" name="userAction" value="signup"/>
    <input type="hidden" name="mode" value="registerAccount"/>
    <input type="hidden" name="vtiger_url" value="<?php echo $_smarty_tpl->tpl_vars['VTIGER_URL']->value;?>
"/>

    <div class="modal-body">
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EMAIL_ADDRESS','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="emailAddress" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_FIRST_NAME','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="firstName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LAST_NAME','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="lastName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PHONE','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="phone" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_COMPANY_NAME','VTEStore');?>
</span>
            <div class="controls"><input type="text" name="companyName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
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
            <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_CONFIRM_PASSWORD','VTEStore');?>
</span>
            <div class="controls"><input type="password" name="confirmPassword" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
        </div>
        <div class="control-group">
            <span class="control-label"></span>
            <div class="controls"><span><input type="checkbox" name="savePassword" value="1" checked> &nbsp; &nbsp;<?php echo vtranslate('LBL_REMEMBER_ME','VTEStore');?>
</span></div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row-fluid">
            <div class="pull-left" style="width: 350px; color: red"><?php echo vtranslate('Once you click Register','VTEStore');?>
</div>
            <div class="pull-right">
                <div class="pull-right cancelLinkContainer" style="margin-top:0px;">
                    <a class="cancelLink" type="reset"data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','VTEStore');?>
</a>
                </div>
                <button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_REGISTER','VTEStore');?>
</strong></button>
            </div>
        </div>
    </div>
</form>
<div style="display: none"><iframe src="<?php echo $_smarty_tpl->tpl_vars['HATCHBUCK_URL']->value;?>
/modules/VTEStore/hatchbuck.form.html" width="99%" height="600px" id="hatchbuckForm" style="display: none"></iframe></div><?php }} ?>