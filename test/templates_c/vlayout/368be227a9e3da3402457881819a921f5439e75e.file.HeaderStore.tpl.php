<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:51
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\HeaderStore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179055b2ba3db32e0e6-43195298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368be227a9e3da3402457881819a921f5439e75e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\HeaderStore.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179055b2ba3db32e0e6-43195298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CUSTOMERLOGINED' => 0,
    'CUSTOMER_STATUS' => 0,
    'CUSTOMER_DATA' => 0,
    'CUSTOMERDATA' => 0,
    'WARNINGS' => 0,
    'ERROR_NUM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3db3794e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3db3794e')) {function content_5b2ba3db3794e($_smarty_tpl) {?>
<div class="span9">
    <span class="pull-right">
    <table>
        <tr>
    <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>
        <td>
        <input type="hidden" id="customer_status" name="customer_status" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value;?>
">
        <input type="hidden" id="customer_data" name="customer_data" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_DATA']->value;?>
">
        <input type="hidden" id="getChargifyInfo" name="getChargifyInfo" value="">
        <?php if ($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='trial_expired'){?>
            <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('TRIAL_EXPIRED','VTEStore');?>
</strong></font></a>
        <?php }elseif($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='no_subscription'){?>
            <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('NO_SUBSCRIPTION','VTEStore');?>
 <?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['remain_date'];?>
 <?php echo vtranslate('days','VTEStore');?>
.<br><?php echo vtranslate('Please click here to sign up','VTEStore');?>
</strong></font> </a>
        <?php }elseif($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='subscription_expired'){?>
            <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('SUBSCRIPTION_EXPIRED','VTEStore');?>
</strong></font></a>
        <?php }?>
        </td>
    <?php }?>
        <td style="padding-top: 10px"><a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/vlayout/modules/VTEStore/resources/images/livechat.png" style="height: 28px"/></a></td>
        <?php if ($_smarty_tpl->tpl_vars['WARNINGS']->value>0&&$_smarty_tpl->tpl_vars['ERROR_NUM']->value==0){?>
            <td><button id="phpiniWarnings" name="phpiniWarnings" class="btn btn-danger" style="margin-right:5px;"><?php echo vtranslate('Warnings','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['WARNINGS']->value;?>
)</button></td>
        <?php }elseif($_smarty_tpl->tpl_vars['WARNINGS']->value==0&&$_smarty_tpl->tpl_vars['ERROR_NUM']->value>0){?>
            <td><button id="phpiniWarnings" name="phpiniWarnings" class="btn btn-danger" style="margin-right:5px;"><?php echo vtranslate('Errors','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['ERROR_NUM']->value;?>
)</button></td>
        <?php }elseif($_smarty_tpl->tpl_vars['WARNINGS']->value>0&&$_smarty_tpl->tpl_vars['ERROR_NUM']->value>0){?>
            <td><button id="phpiniWarnings" name="phpiniWarnings" class="btn btn-danger" style="margin-right:5px;"><?php echo vtranslate('Warnings','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['WARNINGS']->value;?>
) <?php echo vtranslate('Errors','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['ERROR_NUM']->value;?>
)</button></td>
        <?php }?>
        <td><button id="FaqLink" name="FaqLink" class="btn btn-warning VTEStoreFAQ" style="margin-right:5px;"><?php echo vtranslate('FAQ','VTEStore');?>
</button></td>
        <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>
            <td><button id="MyAccountLink" name="MyAccountLink" class="btn btn-success" ><?php echo vtranslate('LBL_MY_ACCOUNT','VTEStore');?>
</button></td>
            <td><button id="logoutVTEStore" class="btn btn-primary pull-right"><?php echo vtranslate('LBL_LOGOUT','VTEStore');?>
</button></td>
        <?php }else{ ?>
            <td><button id="logintoVTEStore" class="btn btn-primary"><?php echo vtranslate('LBL_LOGIN_TO_VTE_STORE','VTEStore');?>
</button></td>
        <?php }?>
        </tr>
    </table>
    </span>
</div><?php }} ?>