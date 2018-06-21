{*<!--
* 
* Copyright (C) www.vtiger.com. All rights reserved.
* @license Proprietary
*
-->*}
{strip}
    <div class='modal-dialog modal-lg'>
        <div class="modal-header contentsBackground">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="{if $ERROR!='yes'}Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT'));location.reload();{/if}">&times;</button>
            <h3 style="color:white;">{$EXTENSION_NAME}</h3>
        </div>
        <div class="modal-body" id="installationLog">
            <div class="row-fluid" {if $ERROR=='yes'}style="color:red;"{/if}>
                <span class="font-x-x-large">{$MESSAGE}</span><br><br>
                <div align="center"> {if $ERROR!='yes'}<img src="layouts/v7/modules/VTEStore/resources/images/VTEStoreSetting.png" align="center" style="width: 100%">{/if}</div>
            </div>
        </div>
        <div class="modal-footer">
		<span class="pull-right">
            <button class="btn btn-success" id="importCompleted" onclick="app.hideModalWindow();{if $ERROR!='yes'}Vtiger_Helper_Js.showMessage(app.vtranslate('JS_PLEASE_WAIT'));location.reload();{/if}">{vtranslate('LBL_OK', 'VTEStore')}</button>
		</span>
        </div>
    </div>
{/strip}