<?php /* Smarty version Smarty-3.1.7, created on 2018-06-21 15:10:51
         compiled from "C:\xampp\htdocs\crmprojects\vtiger6.5\includes\runtime/../../layouts/vlayout\modules\VTEStore\ManageSubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24025b2ba3dbad2da4-75420670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7675c4b0719d0bc0ea27b0b998835580b8de6df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crmprojects\\vtiger6.5\\includes\\runtime/../../layouts/vlayout\\modules\\VTEStore\\ManageSubscription.tpl',
      1 => 1529586634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24025b2ba3dbad2da4-75420670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHARGIFY_CUSTOMER_ID' => 0,
    'PORTALURL' => 0,
    'CUSTOMER_DATA' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b2ba3dbaedde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ba3dbaedde')) {function content_5b2ba3dbaedde($_smarty_tpl) {?><div class="modal-header contentsBackground">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" <?php if ($_smarty_tpl->tpl_vars['CHARGIFY_CUSTOMER_ID']->value==0||$_smarty_tpl->tpl_vars['CHARGIFY_CUSTOMER_ID']->value==''){?>onclick="Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT'));reloadCurrentPage();"<?php }?>>&times;</button>
    <h3><?php echo vtranslate('LBL_MY_ACCOUNT','VTEStore');?>
</h3>
    <input type="hidden" id="vtiger_url" name="vtiger_url" value="">
</div>
<div align="center">
<?php if ($_smarty_tpl->tpl_vars['CHARGIFY_CUSTOMER_ID']->value>0){?>
    <div align="left" style="padding: 20px;">
        <br>For security purposes subscription & payment details reside on another secure portal. Subscription portal will allow you to:<br><br>
        <ul>
            <li>Update payment method.</li>
            <li>Download invoices & statements.</li>
            <li>View payment history.</li>
            <li>Update billing information.</li>
            <li>Cancel or adjust subscription.</li>
        </ul>
        <br><a href="<?php echo $_smarty_tpl->tpl_vars['PORTALURL']->value;?>
" target="_blank" data-dismiss="modal" aria-hidden="true"><h3><u>Please click here to manage subscription</u></h3></a>
        <br><br><i> If it's your first time accessing the portal - you will be asked to set a password. Note, this is a password to manage your subscription. </i>
        <br><br>For any questions please call us at +1 (818) 495-5557 or send us an email at support@vtexperts.com
    </div>
<?php }else{ ?>
    <iframe src="https://vte-sandbox.chargify.com/subscribe/zc5436yw28g8/extensions<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_DATA']->value;?>
" width="99%" height="600px" id="ifchargify"></iframe>
<?php }?>
</div>
<div class="modal-footer">
    <div class="row-fluid">
        <div class="span6"></div>
        <div class="span6">
            <div class="pull-right">
                <div class="pull-right cancelLinkContainer" style="margin-top:0px;">
                    <a class="cancelLink" type="reset" data-dismiss="modal" <?php if ($_smarty_tpl->tpl_vars['CHARGIFY_CUSTOMER_ID']->value==0||$_smarty_tpl->tpl_vars['CHARGIFY_CUSTOMER_ID']->value==''){?>onclick="Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT')); reloadCurrentPage();"<?php }?>><strong><?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function reloadCurrentPage(){
        var url = window.location.href;
        if(url.indexOf('getChargifyInfo')!=-1){
            var urlReload=url;
        }else{
            var urlReload=url+'&getChargifyInfo=1';
        }

        window.location.href = urlReload;
    }
</script>

<?php }} ?>