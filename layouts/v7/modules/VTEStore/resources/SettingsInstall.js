/* ********************************************************************************
 * The content of this file is subject to the VTiger Premium ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 * ****************************************************************************** */

Vtiger.Class("VTEStore_SettingsInstall_Js",{
    editInstance:false,
    getInstance: function(){
        if(VTEStore_SettingsInstall_Js.editInstance == false){
            var instance = new VTEStore_SettingsInstall_Js();
            VTEStore_SettingsInstall_Js.editInstance = instance;
            return instance;
        }
        return VTEStore_SettingsInstall_Js.editInstance;
    }
},{

    registerEventsForVTEStore: function (container) {
        var thisInstance = this;

        // Upgrade VTiger Premium module BEGIN
        jQuery(container).on('click', '.UpgradeVTEStore', function (e) {
            var element = jQuery(e.currentTarget);
            var extensionContainer = element.closest('.extension_container');
            var extensionId = extensionContainer.find('[name="extensionId"]').val();
            var message = app.vtranslate('JS_ARE_YOU_SURE_YOU_WANT_TO_UPGRADE_VTE_STORE_MODULE');
            var messageInstalling = app.vtranslate('JS_UPGRADING_VTE_STORE_MODULE');

            app.helper.showConfirmationBox({'message': message}).then(
                function (e) {
                    app.helper.showProgress(messageInstalling);
                    var params = {
                        'module': app.getModuleName(),
                        'parent': app.getParentModuleName(),
                        'view': 'Settings',
                        'mode': 'upgradeVTEStoreModule',
                        'extensionId': extensionId,
                        'extensionName': 'VTEStore',
                        'moduleAction': 'Upgrade'
                    };
                    
                    app.request.post({'data':params}).then(
                        function(err,data){
                            if(err === null) {
                                app.helper.hideProgress();
                                app.helper.showModal(data);
                            }else{
                                app.helper.hideProgress();
                            }
                        }
                    );
                },
                function (error, err) {
                }
            );
        });
        // Upgrade VTiger Premium module  END

    },


    /**
     * Function which will handle the registrations for the elements
     */
    registerEvents : function() {
        var detailContentsHolder = jQuery('.settingsPageDiv');
        this.registerEventsForVTEStore(detailContentsHolder);
    }
});

jQuery(document).ready(function() {
   var instance = new VTEStore_SettingsInstall_Js();
   instance.registerEvents();
});