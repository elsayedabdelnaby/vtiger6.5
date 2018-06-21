{*<!--
* 
* Copyright (C) www.vtiger.com. All rights reserved.
* @license Proprietary
*
-->*}
{strip}
    <script type="text/javascript" src="layouts/vlayout/modules/VTEStore/resources/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="layouts/vlayout/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="layouts/vlayout/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <style>
        .module_wrapper {
            position: relative;
            padding: 0;
            width:100%;
            display:block;
        }
        .module_short_description {
            position: absolute;
            top: 0;
            color:#000;
            background-color:rgb(245,245,245);
            width: 96%; height:150px;padding:2%;
            border: 1px solid #ececec;  text-align: justify;
            line-height:18px;
            z-index: 10;
            opacity: 0;
            font-size:12px;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            overflow: scroll;
            overflow-x: hidden;
        }
        .module_short_description::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .module_short_description::-webkit-scrollbar-button:start:decrement,
        .module_short_description::-webkit-scrollbar-button:end:increment {
            display: block;
        }
        .module_short_description::-webkit-scrollbar-button:vertical:start:increment,
        .module_short_description::-webkit-scrollbar-button:vertical:end:decrement {
            display: none;
        }
        .module_short_description::-webkit-scrollbar-thumb:vertical {
            height: 50px;
            opacity: 0.2;
            background-color: rgb(51, 51, 51);
        }
        .module_short_description:hover {
            opacity:1;
        }
        .icon-video {
            background:url("layouts/vlayout/modules/VTEStore/resources/images/video.png") no-repeat top center; display:inline-block;
            display: inline-block;
            height: 34px;
            margin-top: -7px;
            width: 40px;
            background-size: 34px;
        }
    </style>
    <input type="hidden" name="searchmode" id="searchmode" value="{$SEARCHMODE}"/>
    <input type="hidden" name="search_key" id="search_key" value="{$SEARCH_KEY}"/>
    <div class="row-fluid">
        {if empty($STORECATS)}
            <table class="emptyRecordsDiv">
                <tbody>
                <tr>
                    <td>
                        {vtranslate('LBL_NO_EXTENSIONS_FOUND', 'VTEStore')}
                    </td>
                </tr>
                </tbody>
            </table>
        {else}
            {foreach item=STORECAT from=$STORECATS name=storecatgory}
                <div ><h2><u>{$STORECAT.store_category_name}</u></h2>{$STORECAT.store_category_desc}<br><br></div>
                <div class="clearfix"></div>
                <div class="row-fluid">
                {assign var=VTEMODULES value=$STORECAT.extensions}
                {foreach item=VTEMODULE from=$VTEMODULES name=extensions}
                    <div class="span4">
                        <div class="extension_container extensionWidgetContainer">
                            <div>
                                <div class="font-x-x-large boxSizingBorderBox" style="cursor:pointer">
                                    <table style="width: 100%">
                                        <tr>
                                            <td class="extension_header" id="{$VTEMODULE->module_name}Label">{$VTEMODULE->module_label}</td>
                                            <td style="text-align: right">
                                            {if $VTEMODULE->userguide_link!=''}
                                                <a href="index.php?module=VTEStore&parent=Settings&view=Settings&mode=getModuleDetail&extensionId={$VTEMODULE->id}&extensionName={$VTEMODULE->module_name}&tab=Documentation" target="_blank" title="{vtranslate('Documentation', 'VTEStore')}"><img src="layouts/vlayout/modules/VTEStore/resources/images/user_manual_filled1600.png" id="{$VTEMODULE->module_name}Documentation" style="width: 25px; height: 25px;"/></a>
                                            {/if}
                                            {if $VTEMODULE->setting_url!='' && in_array($VTEMODULE->module_name,$VTMODULES)}
                                                <a href="{$VTEMODULE->setting_url}" target="_blank" title="{vtranslate('Extension settings', 'VTEStore')}"><img src="layouts/vlayout/modules/VTEStore/resources/images/setting.png" id="{$VTEMODULE->module_name}Settings" style="width: 25px; height: 25px;"/></a>
                                            {/if}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <input type="hidden" value="{$VTEMODULE->module_name}" name="extensionName">
                                <input type="hidden" value="{$VTEMODULE->id}" name="extensionId">
                                <input type="hidden" value="{if in_array($VTEMODULE->module_name,$VTMODULES)}Upgrade{else}Install{/if}" name="moduleAction">
                            </div>
                            <div>
                                <div class="row-fluid extension_contents" style="overflow: hidden; background-color: #FAFAFA; max-height:175px">
                                    <a href="index.php?module=VTEStore&parent=Settings&view=Settings&mode=getModuleDetail&extensionId={$VTEMODULE->id}&extensionName={$VTEMODULE->module_name}" class="module_wrapper">
                                        <div class="module_short_description slimScrollDiv" id="short_description_{$VTEMODULE->id}" style="">
                                            {$VTEMODULE->short_description|strip_tags}
                                        </div>
                                        {if $VTEMODULE->image!=''}
                                            {assign var=imageSource value=$VTEMODULE->image}
                                        {else}
                                            {assign var=imageSource value='layouts/vlayout/skins/images/unavailable.png'}
                                        {/if}
                                        <img style="border:2px solid #ececec; max-width: 100% !important; width: 100% !important; height: 150px; cursor: hand" src="{$imageSource}" />
                                    </a>
                                </div>
                                <div class="extensionInfo">
                                    <div class="row-fluid">
                                        <div class="pull-right">
                                            <a class="grouped_elements" href="{$VTEMODULE->image}" rel="group{$VTEMODULE->id}"><button id="Preview{$VTEMODULE->module_name}" class="btn btn-warning" style="margin-right:5px;">{vtranslate('LBL_PREVIEW', 'VTEStore')}</button></a>
                                            <div style="display: none">
                                                {assign var=previewImages value="||"|explode:$VTEMODULE->preview_image}
                                                {foreach item=previewImage from=$previewImages}
                                                    {if $previewImage@iteration > 1}
                                                        <a class="grouped_elements" rel="group{$VTEMODULE->id}" href="{$previewImage}"></a>
                                                    {/if}
                                                {/foreach}
                                            </div>
                                            {literal}
                                            <script>
                                                jQuery("a.grouped_elements").fancybox();
                                            </script>
                                            {/literal}
                                            <a id="VideoDemo{$VTEMODULE->module_name}" href="{$VTEMODULE->extvideolink}" class="various iframe icon-video" ></a>&nbsp;
                                            <button id="MoreDetail{$VTEMODULE->module_name}" class="btn btnMoreDetail addButton" style="margin-right:5px;">{vtranslate('LBL_MORE_DETAILS', 'VTEStore')}</button>
                                            {if in_array($VTEMODULE->module_name,$VTMODULES)}
                                                <button id="Installed{$VTEMODULE->module_name}" class="btn btn {if $CUSTOMERLOGINED>0}authenticated{else}loginRequired{/if}">{vtranslate('LBL_INSTALLED', 'VTEStore')}</button>
                                            {else}
                                                <button id="Install{$VTEMODULE->module_name}" class="oneclickInstallFree btn {if $CUSTOMERLOGINED>0}btn-success authenticated{else}loginRequired{/if}" data-svn="stable">{vtranslate('LBL_INSTALL', 'VTEStore')}</button>
                                            {/if}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {if ($smarty.foreach.extensions.index+1) % 3 == 0}
                        </div>
                        <div class="row-fluid">
                    {/if}
                {/foreach}
                </div>
            {/foreach}
        {/if}
    </div>
{/strip}

{literal}
    <script>
        jQuery(document).ready(function() {
            //Watch video demo
            $(".various").fancybox({
                width    : 1280,
                height   : 720,
                fitToView   : false,
                autoSize    : false,
                closeClick  : false,
                openEffect  : 'elastic',
                closeEffect : 'none'
            });
        });
    </script>
{/literal}