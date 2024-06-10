<?php
/*
 * vpn_softether5_bridge.php
 *
 * part of pfSense (https://www.pfsense.org)
 * Copyright (c) 2011-2024 Rubicon Communications, LLC (Netgate)
 * Copyright (C) 2008 Shrew Soft Inc
 * All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("guiconfig.inc");

$pgtitle = array("SoftEther5", "VPN Bridge");

include("head.inc");

$tab_array = array();
$tab_array[] = array(gettext("VPN Server"), false, "/vpn_softether5_server.php");
$tab_array[] = array(gettext("VPN Bridge"), true, "/vpn_softether5_bridge.php");
display_top_tabs($tab_array);

if ($input_errors) {
	print_input_errors($input_errors);
}

?>

<div class="bs-callout bs-callout-danger">
	<h4>Caution!</h4>
	The pfSense SoftEther5 package is under development.
	<br>
	To start/stop/restart the vpnbridge service go to Status > Services
	<br>
	<br>
	For configuration use the external tool: SoftEther VPN Server Manager on the official <a href="https://www.softether.org">SoftEther</a> website.
	<br>
	<br>
	<b>Be careful, if you need to use the https port (443) as your vpnbridge, change the pfSense https default port with another not in use.</b>
	<br>
	<br>
	You can use vpnserver and vpnbridge simultaneously for different applications using different ports.
	<br>
	<br>
	Remember to backup your vpnbridge data/configuration, using the external tool SoftEther VPN Server Manager.
	<br>
	pfSense Backup function doesn't save this data for now.
</div>

<div class="infoblock" style="">
	<div class="alert alert-info clearfix" role="alert">
		<div class="pull-left">
			For any information or issue please contact the package developer.
		</div>
	</div>
</div>

<?php
include("foot.inc");