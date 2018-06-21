<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Contacts_Save_Action extends Vtiger_Save_Action {

	public function process(Vtiger_Request $request) {
		$result = Vtiger_Util_Helper::transformUploadedFiles($_FILES, true);
		$_FILES = $result['imagename'];

		//To stop saveing the value of salutation as '--None--'
		$salutationType = $request->get('salutationtype');
		if ($salutationType === '--None--') {
			$request->set('salutationtype', '');
		}
		parent::process($request);
	}

	public function check_contact_phone_exist($db, $phone, $contactid = null)
    {
        if($phone != null){
            $query = "SELECT DISTINCT contactid FROM vtiger_contactdetails INNER JOIN vtiger_crmentity ON vtiger_contactdetails.contactid = vtiger_crmentity.crmid INNER JOIN vtiger_contactsubdetails ON vtiger_contactsubdetails.contactsubscriptionid = vtiger_contactdetails.contactid WHERE  vtiger_crmentity.deleted = 0 AND (vtiger_contactsubdetails.otherphone = '".$phone."'  
                OR vtiger_contactsubdetails.homephone = '".$phone."' 
                OR vtiger_contactdetails.mobile = '".$phone."'
                OR vtiger_contactdetails.phone = '".$phone."')";
            if($contactid != null && $contactid != ''){
                $query .= " AND vtiger_contactsubdetails.contactsubscriptionid <> '".$contactid."' AND vtiger_contactdetails.contactid <> '".$contactid."'" ;
            }
            
            $result = $db->query($query);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                return $row['contactid'];
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}
