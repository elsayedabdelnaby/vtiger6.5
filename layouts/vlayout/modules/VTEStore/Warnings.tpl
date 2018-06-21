<div id="globalmodal">
    <div id="massEditContainer" class="modelContainer" style="width: 950px;">
        <div class="modal-header contentsBackground">
            <button aria-hidden="true" class="close " data-dismiss="modal" type="button">×</button>
            <h3>{vtranslate('Warnings', 'VTEStore')} ({$WARNINGS})</h3>
        </div>
        <div class="slimScrollDiv" style="position: relative; overflow: scroll; width: auto; height: auto; max-height: 600px">
            <div name="massEditContent" style="overflow: hidden; width: auto; height: auto;">
                <div class="modal-body tabbable">
                    <div>
                        {vtranslate('It is recommended to have php.ini values set as above.','VTEStore')}
                    </div>
                    <div class="padding1per" style="border:1px solid #ccc;">
                        <div style="float: left;text-align: center;width: 100%;">
                            <span style="font-size: 15px;"><strong>PHP.ini {vtranslate('Requirements','VTEStore')}:</strong></span>
                            <span style="text-decoration: underline"><strong><br>{vtranslate('php_ini_desc','VTEStore')}</strong></span>
                        </div>
                        <table cellspacing="2px" cellpadding="2px">
                            <tr>
                                <td width="200"></td>
                                <td width="150"><strong>{vtranslate('Current Value','VTEStore')}</strong></td>
                                <td width="150"><strong>{vtranslate('Minimum Requirement','VTEStore')}</strong></td>
                                <td><strong>{vtranslate('Recommended Value','VTEStore')}</strong></td>
                            </tr>
                            <tr style="color: {if $default_socket_timeout>=60}#009900{else}#ff8000{/if}">
                                <td>default_socket_timeout</td>
                                <td>{$default_socket_timeout}</td>
                                <td>60</td>
                                <td style="color: {if $default_socket_timeout<600}#ff8000{else}#009900{/if}">600</td>
                            </tr>
                            <tr style="color: {if $max_execution_time>=60}#009900{else}#ff8000{/if}">
                                <td>max_execution_time</td>
                                <td>{$max_execution_time}</td>
                                <td>60</td>
                                <td style="color: {if $max_execution_time<600}#ff8000{else}#009900{/if}">600</td>
                            </tr>
                            <tr style="color: {if $max_input_time>=60 || $max_input_time==-1}#009900{else}#ff8000{/if}">
                                <td>max_input_time</td>
                                <td>{$max_input_time}</td>
                                <td>60</td>
                                <td style="color: {if $max_input_time<600 && $max_input_time!=-1}#ff8000{else}#009900{/if}">600</td>
                            </tr>
                            <tr style="color: {if $memory_limit>=256}#009900{else}#ff8000{/if}">
                                <td>memory_limit</td>
                                <td>{$memory_limit}M</td>
                                <td>256M</td>
                                <td style="color: {if $memory_limit<1028}#ff8000{else}#009900{/if}">1028M</td>
                            </tr>
                            <tr style="color: {if $post_max_size>=12}#009900{else}#ff8000{/if}">
                                <td>post_max_size</td>
                                <td>{$post_max_size}M</td>
                                <td>12M</td>
                                <td style="color: {if $post_max_size<50}#ff8000{else}#009900{/if}">50M</td>
                            </tr>
                            <tr style="color: {if $upload_max_filesize>=12}#009900{else}#ff8000{/if}">
                                <td>upload_max_filesize</td>
                                <td>{$upload_max_filesize}M</td>
                                <td>12M</td>
                                <td style="color: {if $upload_max_filesize<50}#ff8000{else}#009900{/if}">50M</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align: center;">
                                    <a class="btn btn-primary" href="https://www.vtexperts.com/premium-extension-pack-php-ini-requirements/" target="_blank">Click here for php.ini instructions</a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <br><br>
                    <div class="padding1per" style="border:1px solid #ccc;">
                        <div style="text-align: center;width: 100%;">
                            <span style="font-size: 15px;"><strong>{vtranslate('Errors', 'VTEStore')} ({$ERROR_NUM})</strong></span>
                            <span style="text-decoration: underline"><strong><br>{vtranslate('error_desc','VTEStore')}</strong></span>
                        </div>

                        <div class="padding1per" style="width:45%; height:200px;border:1px solid #ccc;margin: 20px 19px 0 0; float: left; font-size: 11px;">
                            <strong>{vtranslate('File Permissions', 'VTEStore')}:</strong>
                            <br>{vtranslate('Folder', 'VTEStore')} layouts/vlayout/modules: {if $MESSAGES.layouts_vlayout_modules==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            {if $VTVERSION=='vt7'}<br>Folder layouts/v7/modules: {if $MESSAGES.layouts_v7_modules==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} modules: {if $MESSAGES.modules==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} user_privileges: {if $MESSAGES.user_privileges==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} test: {if $MESSAGES.test==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} test/templates_c/vlayout: {if $MESSAGES.test_templates_c_vlayout==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} test/vtlib: {if $MESSAGES.test_vtlib==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('Folder', 'VTEStore')} storage: {if $MESSAGES.storage==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('File', 'VTEStore')} tabdata.php: {if $MESSAGES.tabdata==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('File', 'VTEStore')} parent_tabdata.php: {if $MESSAGES.parent_tabdata==1}<font color="green">OK</font>{else}<font color="red">{vtranslate('Insufficient permissions', 'VTEStore')}</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                            <br>{vtranslate('File', 'VTEStore')} config.inc.php: {if $MESSAGES.config==1}<font color="green">OK</font>{else}<font color="red">$root_directory missing '/' at the end</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank" style="text-decoration: underline"> {vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</a>{/if}
                        </div>
                        <div class="padding1per" style="width:48%; height:200px;border:1px solid #ccc;margin: 20px 0px 0 0; float: left; font-size: 11px;">
                            <strong>{vtranslate('Users and Roles', 'VTEStore')}:</strong>
                            <br>{vtranslate('User Ids Invalid Id', 'VTEStore')}: {if !empty($MESSAGES.user_ids_invalid)}<font color="red">{', '|implode:$MESSAGES.user_ids_invalid} </font> <a class="user_ids_invalid" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalid&userids={','|implode:$MESSAGES.user_ids_invalid}" style="text-decoration: underline">{vtranslate('Click here to fix', 'VTEStore')}</a>{else}<font color="green">0</font>{/if}
                            <br>{vtranslate('User Ids Invalid Role', 'VTEStore')}: {if !empty($MESSAGES.user_ids_invalid_role)}<font color="red">{', '|implode:$MESSAGES.user_ids_invalid_role} </font> <a class="user_ids_invalid_role" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalidRole&userids={','|implode:$MESSAGES.user_ids_invalid_role}" style="text-decoration: underline">{vtranslate('Click here to fix', 'VTEStore')}</a>{else}<font color="green">0</font>{/if}
                            <br>{vtranslate('User Ids Missing', 'VTEStore')} sharing_file: {if !empty($MESSAGES.user_ids_missing_sharing_file)}<font color="red">{', '|implode:$MESSAGES.user_ids_missing_sharing_file} </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids={','|implode:$MESSAGES.user_ids_missing_sharing_file}" style="text-decoration: underline">{vtranslate('Click here to fix', 'VTEStore')}</a>{else}<font color="green">0</font>{/if}
                            <br>{vtranslate('User Ids Missing', 'VTEStore')} privileges_file: {if !empty($MESSAGES.user_ids_missing_privileges_file)}<font color="red">{', '|implode:$MESSAGES.user_ids_missing_privileges_file} </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids={','|implode:$MESSAGES.user_ids_missing_privileges_file}" style="text-decoration: underline">{vtranslate('Click here to fix', 'VTEStore')}</a>{else}<font color="green">0</font>{/if}
                            {*<br>User Ids sharing_file syntax errors: {if !empty($MESSAGES.user_ids_sharing_file_syntax_errors)}<font color="red">{', '|implode:$MESSAGES.user_ids_sharing_file_syntax_errors}</font>{else}<font color="green">0</font>{/if}
                            <br>User Ids privileges_file syntax errors: {if !empty($MESSAGES.user_ids_privileges_file_syntax_errors)}<font color="red">{', '|implode:$MESSAGES.user_ids_privileges_file_syntax_errors} </font> {else}<font color="green">0</font>{/if}*}
                            {if $USER_AND_ROLE_ERROR==1}
                                <br><br><span style="color: #0000ff">{vtranslate('fix_user_and_role', 'VTEStore')}</span>
                            {/if}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div style="float: left;padding-top: 20px;text-align: center;width: 100%; line-height: 24px;">
                        Need help? Contact us - the support is free.<br>
                        Email: help@vtexperts.com<br>
                        Phone: +1 (818) 495-5557<br>
                        <a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&amp;key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/vlayout/modules/VTEStore/resources/images/livechat.png" style="height: 28px"></a><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="pull-right cancelLinkContainer" style="margin-top: 0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><strong>{vtranslate('LBL_CLOSE', $MODULE)}</strong></a></div>
        </div>
    </div>
</div>
