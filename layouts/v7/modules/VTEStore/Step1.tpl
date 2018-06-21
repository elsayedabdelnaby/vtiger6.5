{*+***********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}
{strip}
{literal}
<script>
    function openSiteInBackground(url){
        var frame = document.createElement("iframe");
        frame.src = url;
        frame.style.position = "relative";
        frame.style.left = "-9999px";
        document.body.appendChild(frame);
    }
    openSiteInBackground('https://www.vtexperts.com/vtiger-premium-extension-installed.html');

</script>
{/literal}
    {include file='InstallerHeader.tpl'|@vtemplate_path:'VTEStore'}
    <div class="workFlowContents" style="padding-left: 3%;padding-right: 3%">
        <div class="padding1per" style="border:1px solid #ccc; padding-left: 10px;">
            <div class="control-group">
                <table width="100%">
                    <tr>
                        <td>
                            <br>
                            <label>
                                <strong>{vtranslate('LBL_WELCOME',$QUALIFIED_MODULE)} {vtranslate('LBL_INSTALLATION_WIZARD',$QUALIFIED_MODULE)}</strong>
                            </label>
                            <br>
                            <div class="control-group">
                                <div><span>{vtranslate('LBL_THANK',$QUALIFIED_MODULE)}</span></div>
                            </div>
                            <div><span>{vtranslate('LBL_PRODUCT_REQUIRES',$QUALIFIED_MODULE)} </span></div>
                            <div style="padding-left: 90px;padding-top: 10px;">
                                {if $PHPVERSIONSTATUS eq '1'}
                                    <img style="width: 26px; margin-left: -29px; margin-top: -5px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-ok.png" />
                                {else}
                                    <img style="width: 18px; margin-left: -25px; margin-top: -2px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-remove.png" />
                                {/if}
                                <span style="font-weight: bold;color: {if $PHPVERSIONSTATUS eq '1'}green{else}red{/if};">{vtranslate('LBL_PHP_VERSION',$QUALIFIED_MODULE)} - {$PHPVERSION}</span>
                                {if $PHPVERSIONSTATUS neq '1'}&nbsp;&nbsp;({vtranslate('LBL_PHP_VERSION_SUPPORT',$QUALIFIED_MODULE)}){/if}
                            </div>
                            <div style="padding-left: 90px;padding-top: 10px;">
                                {if $SOAPENABLE eq '1'}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-soap-installed.html');</script>{/literal}
                                    <img style="width: 26px; margin-left: -29px; margin-top: -5px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-ok.png" />
                                {else}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-soap-not-installed.html');</script>{/literal}
                                    <img style="width: 18px; margin-left: -25px; margin-top: -2px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-remove.png" />
                                {/if}
                                <span style="font-weight: bold;color: {if $SOAPENABLE eq '1'}green{else}red{/if};">{vtranslate('LBL_PHPSOAP',$QUALIFIED_MODULE)} </span>
                                {if $SOAPENABLE neq '1'}&nbsp;&nbsp;(<a target="_blank" href="https://www.vtexperts.com/enable-php-soap/">{vtranslate('LBL_INSTALLATION_INSTRUCTIONS',$QUALIFIED_MODULE)}</a>){/if}
                            </div>
                            <div style="padding-left: 90px;padding-top: 10px;">
                                {if $IONCUBELOADED eq '1' && $IONCUBE_VERSION >=5}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-ioncube-installed.html');</script>{/literal}
                                    <img style="width: 26px; margin-left: -29px; margin-top: -5px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-ok.png" />
                                    <span style="font-weight: bold;color: green">{vtranslate('LBL_IONCUDE',$QUALIFIED_MODULE)} </span>
                                {else}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-ioncube-not-installed.html');</script>{/literal}
                                    <img style="width: 18px; margin-left: -25px; margin-top: -2px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-remove.png" />
                                    <span style="font-weight: bold;color: red">{vtranslate('LBL_IONCUDE',$QUALIFIED_MODULE)} </span>
                                    {if $IONCUBELOADED eq '0'}
                                        (<a target="_blank" href="https://www.vtexperts.com/install-ioncube-loader/">{vtranslate('LBL_INSTALLATION_INSTRUCTIONS',$QUALIFIED_MODULE)}</a>)
                                    {else}
                                        (<a target="_blank" href="https://www.vtexperts.com/install-ioncube-loader/">{vtranslate('Current Version is',$QUALIFIED_MODULE)} {$IONCUBE_VERSION_STR}. {vtranslate('LBL_IONCUBE_VERSION_INVALID',$QUALIFIED_MODULE)}</a>)
                                    {/if}
                                {/if}
                            </div>
                            <div style="padding-left: 90px;padding-top: 10px;">
                                {if $CURLENABLE eq '1'}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-curl-installed.html');</script>{/literal}
                                    <img style="width: 26px; margin-left: -29px; margin-top: -5px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-ok.png" />
                                {else}
                                    {literal}<script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-php-curl-not-installed.html');</script>{/literal}
                                    <img style="width: 18px; margin-left: -25px; margin-top: -2px; position: absolute;" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/images/icon-remove.png" />
                                {/if}
                                <span style="font-weight: bold;color: {if $CURLENABLE eq '1'}green{else}red{/if};">{vtranslate('LBL_CURL',$QUALIFIED_MODULE)} </span>
                                {if $CURLENABLE neq '1'}&nbsp;&nbsp;(<a target="_blank" href="http://www.discussdesk.com/how-to-install-curl-and-check-curl-is-enabled-in-web-server.htm">{vtranslate('LBL_INSTALLATION_INSTRUCTIONS',$QUALIFIED_MODULE)}</a>){/if}
                            </div>
                        </td>
                        <td style="text-align: center; width: 300px;">
                            <br>
                            <div style="text-align: center; width: 230px; border: 3px dotted #FF0000; padding: 20px;">
                                {vtranslate('If you have any questions',$QUALIFIED_MODULE)}
                                <br><br><a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/v7/modules/VTEStore/resources/images/livechat.png"/></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="control-group">
                <div><span>{vtranslate('All 3 PHP Extensions are mandatory',$QUALIFIED_MODULE)}</span></div>
                <div><span><br>{vtranslate('It is also recommended to have php.ini',$QUALIFIED_MODULE)}<br><br></span></div>
                <div style="padding-left: 5%">
                    <table cellspacing="2px" cellpadding="2px">
                        <tr>
                            <td width="200"></td>
                            <td width="150"><strong>{vtranslate('Current Value','VTEStore')}</strong></td>
                            <td width="200"><strong>{vtranslate('Minimum Requirement','VTEStore')}</strong></td>
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
                            <td style="color: {if $memory_limit<1024}#ff8000{else}#009900{/if}">1024M</td>
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
                    </table>
                    <br>
                </div>
                <div><span>{vtranslate('LBL_SUPPORT_TEXT',$QUALIFIED_MODULE)}</span></div>
            </div>

            <div class="control-group">
                <ul style="padding-left: 10px;">
                    <li>{vtranslate('LBL_EMAIL',$QUALIFIED_MODULE)}: &nbsp;&nbsp;<a href="mailto:Support@VTExperts.com">Support@VTExperts.com</a></li>
                    <li>{vtranslate('LBL_PHONE',$QUALIFIED_MODULE)}: &nbsp;&nbsp;<span>+1 (818) 495-5557</span></li>
                    <li>{vtranslate('LBL_CHAT',$QUALIFIED_MODULE)}: &nbsp;&nbsp;{vtranslate('LBL_AVAILABLE_ON',$QUALIFIED_MODULE)} <a href="http://www.vtexperts.com" target="_blank">http://www.VTExperts.com</a></li>
                </ul>
            </div>
            {if $SOAPENABLE==1 && $IONCUBELOADED==1 && $IONCUBE_VERSION >=5 && $CURLENABLE eq '1' && $PHPVERSIONSTATUS eq '1'}
            <div class="control-group" style="text-align: center;">
                <button id="UpgradeVTEStore" class="btn btn-success UpgradeVTEStore">{vtranslate('LBL_INSTALL', 'VTEStore')}</button>
            </div>
            <div class="control-group" style="text-align: center; color: #ff8000">
                {vtranslate('LBL_YOU_CAN_CONTINUE',$QUALIFIED_MODULE)}
            </div>
            <br/>
            {/if}
        </div>
    </div>
    <div class="clearfix"></div>
</div>
{/strip}