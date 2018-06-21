<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:51
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\MyAccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164715b2ba3db798ab5-09460285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8550cff9414db8fa09cfee54bc9e1fa78f19781d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\MyAccount.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164715b2ba3db798ab5-09460285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CUSTOMERDATA' => 0,
    'CUSTOMER_STATUS' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3db7e943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3db7e943')) {function content_5b2ba3db7e943($_smarty_tpl) {?><div class="modal-header contentsBackground">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_MY_ACCOUNT','VTEStore');?>
</h3>
</div>
<form class="form-horizontal MyAccountForm">
    <input type="hidden" name="module" value="VTEStore"/>
    <input type="hidden" name="parent" value="Settings"/>
    <input type="hidden" name="action" value="ActionAjax"/>
    <input type="hidden" name="mode" value="updateMyAccount"/>
    <input type="hidden" name="customerid" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['id'];?>
"/>
    <div class="control-group">
        <span class="control-label">&nbsp;<strong><?php echo vtranslate('LBL_ACCOUNT_DETAILS','VTEStore');?>
</strong></span>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_USERNAME','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['username'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" disabled/></div>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EMAIL_ADDRESS','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="emailAddress" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['email'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_FIRST_NAME','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['firstname'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LAST_NAME','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['lastname'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PHONE','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['phone'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
    </div>
    <div class="control-group">
        <span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_COMPANY_NAME','VTEStore');?>
</span>
        <div class="controls"><input type="text" name="companyName" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['companyname'];?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></div>
    </div>
    <div class="control-group">
        <span class="control-label">&nbsp;<strong><?php echo vtranslate('LBL_SUBCRIPTION','VTEStore');?>
</strong></span>
    </div>
    <div class="control-group">
        <span class="control-label">&nbsp;<?php echo vtranslate('LBL_URL','VTEStore');?>
: </span>
        <div class="controls" style="padding-top: 5px;"><?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['vtiger_url'];?>
</div>
    </div>
    <div class="control-group">
        <span class="control-label">&nbsp;<?php echo vtranslate('LBL_STATUS','VTEStore');?>
: </span>
        <div class="controls" style="padding-top: 5px;">
            <?php if ($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='ok'){?>
                <a href="https://www.vtexperts.com/subscription-status/" target="_blank"> <?php echo vtranslate('LBL_ACTIVE','VTEStore');?>
 - <?php echo vtranslate('Expires in','VTEStore');?>
 <?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['remain_date'];?>
 <?php echo vtranslate('days','VTEStore');?>
 <img width="12" height="12" border="0" alt="<?php echo vtranslate('has_subscription_tooltip','VTEStore');?>
" title="<?php echo vtranslate('has_subscription_tooltip','VTEStore');?>
" src="layouts/vlayout/modules/VTEStore/resources/images/tooltip.png"></a>
            <?php }else{ ?>
                <a href="https://www.vtexperts.com/subscription-status/" target="_blank"><?php echo vtranslate('LBL_TRIAL','VTEStore');?>
 <img width="12" height="12" border="0" alt="<?php echo vtranslate('no_subscription_tooltip','VTEStore');?>
" title="<?php echo vtranslate('no_subscription_tooltip','VTEStore');?>
"src="layouts/vlayout/modules/VTEStore/resources/images/tooltip.png"></a>
            <?php }?>
            &nbsp;<button class="btn btn-success" type="button" id="btnRefresh" name="btnRefresh"><strong><?php echo vtranslate('LBL_REFRESH','VTEStore');?>
</strong></button>
        </div>
    </div>
    <div class="control-group">
        <div class="controls" style="padding-top: 5px;"><button id="ManageSubscription" name="ManageSubscription" class="btn btn-warning ManageSubscription" type="button"><?php echo vtranslate('LBL_MANAGE_SUBSCRIPTION','VTEStore');?>
</button> </div>
    </div>
    <div class="modal-footer">
        <div class="row-fluid">
            <div class="span6"></div>
            <div class="span6">
                <div class="pull-right">
                    <div class="pull-right cancelLinkContainer" style="margin-top:0px;">
                        <a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                    </div>
                    <button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE','VTEStore');?>
</strong></button>
                </div>
            </div>
        </div>
    </div>
</form><?php }} ?>