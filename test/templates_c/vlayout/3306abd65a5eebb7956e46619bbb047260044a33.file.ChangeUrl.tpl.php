<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:11:18
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\ChangeUrl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22535b2ba3f61fa598-12383796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3306abd65a5eebb7956e46619bbb047260044a33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\ChangeUrl.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22535b2ba3f61fa598-12383796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHOWHTML' => 0,
    'C_ID' => 0,
    'OLD_URL' => 0,
    'SITE_URL' => 0,
    'CAPTCHADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3f626773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3f626773')) {function content_5b2ba3f626773($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['SHOWHTML']->value){?>
<div id="globalmodal">
    <div id="massEditContainer" class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header contentsBackground">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4><?php echo vtranslate('LBL_LOGIN_TO_VTE_STORE','VTEStore');?>
</h4>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <form class="form-horizontal" id="frmChangeUrl">
                    <input type="hidden" name="module" value="VTEStore">
                    <input type="hidden" name="parent" value="Settings">
                    <input type="hidden" name="action" value="ActionAjax">
                    <input type="hidden" name="mode" value="changeUrl">
                    <input type="hidden" name="c_id" value="<?php echo $_smarty_tpl->tpl_vars['C_ID']->value;?>
">
                    <div name="massEditContent" style="overflow: hidden; width: auto; height: auto;">
                        <div class="modal-body">
                            <p><?php echo vtranslate('TXT_CHANGE_URL_OUR_RECORD_INDICATE','VTEStore');?>
</p>
                            <ul>
                                <li><?php echo vtranslate('TXT_CHANGE_URL_VTIGER_WAS_MOVED','VTEStore');?>
</li>
                                <li><?php echo vtranslate('TXT_CHANGE_URL_CHANGED_IN_CONFIG','VTEStore');?>
</li>
                                <li><?php echo vtranslate('TXT_CHANGE_URL_ACCOUNT_IS_BEING_TRANSFERRED','VTEStore');?>
</li>
                            </ul>
                            <p>
                                <?php echo vtranslate('TXT_CHANGE_URL_IN_ORDER_TO_LOGIN','VTEStore');?>

                                <br />
                                <ul>
                                    <li><?php echo vtranslate('TXT_CHANGE_URL_ACCOUNT_CURRENTLY_ASSOCIATED_WITH','VTEStore');?>
: <?php echo $_smarty_tpl->tpl_vars['OLD_URL']->value;?>
</li>
                                    <li><?php echo vtranslate('TXT_CHANGE_URL_ACCOUNT_WILL_BE_MOVED','VTEStore');?>
: <b><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
</b></li>
                                </ul>
                                <?php echo vtranslate('TXT_CHANGE_URL_PLEASE_AGREE','VTEStore');?>

                            </p>
                            
                            <div style="text-align: center">
                                <label>
                                    <span style="color: red">*&nbsp;</span>
                                    <input type="checkbox" name="confirm" id="chkConfirm" />
                                    <b><?php echo vtranslate('TXT_CHANGE_URL_PLEASE_MOVE_MY_ACCOUNT','VTEStore');?>
</b>
                                </label><br />
                                <div style="width: 200px;display: inline-block;">
                                    <?php echo $_smarty_tpl->tpl_vars['CAPTCHADATA']->value;?>

                                </div><br />
                                <div class="redColor error_content"></div>
                                <br />
                                <button class="btn btn-success" type="submit" id="btnChangeUrl" name="btnChangeUrl"><strong><?php echo vtranslate('LBL_SUBMIT','VTEStore');?>
</strong></button>
                            </div>
                            <br />
                            <style type="text/css">
                                label[for='captcha_code']{
                                    display: inline-block;
                                }
                                input#captcha_code{
                                    width: 130px;
                                    margin-bottom: 5px;
                                }
                            </style>
                            
                            <ul>
                                <li><?php echo vtranslate('TXT_CHANGE_URL_YOU_CAN_ONLY_MOVE','VTEStore');?>
</li>
                                <li><?php echo vtranslate('TXT_CHANGE_URL_ONCE_THE_ACCOUNT_IS_MOVED','VTEStore');?>
</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }?><?php }} ?>