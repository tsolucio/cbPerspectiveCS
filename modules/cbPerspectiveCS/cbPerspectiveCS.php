<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
require_once('data/CRMEntity.php');
require_once('data/Tracker.php');

class cbPerspectiveCS extends CRMEntity {

	public static $changeset_file = 'modules/cbPerspectiveCS/cbPerspectiveCS.xml';
	public static $perspective_name = 'coreBOS Perspective Changesets Template';
	public static $perspective_logo = 'modules/cbPerspectiveCS/logo.jpg';
	public static $perspective_website = 'http://www.corebos.org';
	public static $perspective_signature = 'Thank you for your support.<br/>TSolucio';
	public static $perspective_company = '<span style="color: #4c9316">TSOLUCIO</span> is an IT Consulting company (Internet, Decision Support Systems, Sales Force Automation, Data Security and Protection, Business Process Continuity). Our clients are growing companies whishing to use new technologies to improve their businesses and achieve long term success.';
	public static $perspective_description = 'This extension is a template for distributing <a href="http://corebos.org/documentation/doku.php?id=en:devel:corebosupdater">coreBOS updater changesets</a>. It gives the developer the infrastructure to simply create the set of changesets that need to be applied and distribute and apply them easily.<br>
			Once defined all the variables and created the changesets you can send this extension to any coreBOS application or include it as part of a perspective, to have the changes applied.<br>
			You can get more information on coreBOS Updater, changesets and perspectives on the <a href="http://corebos.org/documentation">coreBOS wiki</a> and/or asking in <a href="https://plus.google.com/communities/109845486286232591652">the forums</a>.';
	public static $perspective_license = 'modules/cbPerspectiveCS/licenseAgreement.html';

	/**
	 * Invoked when special actions are performed on the module.
	 * @param String Module name
	 * @param String Event Type (module.postinstall, module.disabled, module.enabled, module.preuninstall)
	 */
	function vtlib_handler($modulename, $event_type) {
		if($event_type == 'module.postinstall' or $event_type == 'module.postupdate') {
			// Handle post installation/update changesets
			global $adb, $log;
			include_once('vtlib/Vtiger/Module.php');
			require_once('Smarty_setup.php');
			//error_reporting(E_ALL);ini_set("display_errors", "on");
			$_REQUEST['update_file'] = self::$changeset_file;
			include_once('modules/cbupdater/getupdates.php');
			unset($_REQUEST['doundo']);
			$cbids = array();
			foreach ($cbupdatesfound as $cbcs) {
				$cbids[] = $cbcs['cbupdaterid'];
			}
			$_REQUEST['idstring'] = implode(',', $cbids);
			include_once('modules/cbupdater/dowork.php');
		}
	}

}
?>
