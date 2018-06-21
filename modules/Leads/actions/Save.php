<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Leads_Save_Action extends Vtiger_Save_Action {

	public function process(Vtiger_Request $request) {

		//To stop saveing the value of salutation as '--None--'
		$salutationType = $request->get('salutationtype');
		if ($salutationType === '--None--') {
			$request->set('salutationtype', '');
		}
		parent::process($request);
	}

	public function check_lead_phone_exist($db, $phone, $leadid = null)
    {
        if($phone != null){
            $query = "SELECT DISTINCT vtiger_leadaddress.leadaddressid FROM vtiger_leadaddress INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_leadaddress.leadaddressid WHERE vtiger_crmentity.deleted = 0 AND (vtiger_leadaddress.phone = '".$phone."' OR vtiger_leadaddress.mobile = '".$phone."')";
            if($leadid != null && $leadid != ''){
                $query .= " AND leadaddressid <> '".$leadid."'";
            }
            
            $result = $db->query($query);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                return $row['leadaddressid'];
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}
