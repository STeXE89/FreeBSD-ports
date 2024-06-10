<?php
/*
 * vpn_softether5.php
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

require_once("globals.inc");
require_once("guiconfig.inc");
require_once("pfsense-utils.inc");
require_once("pkg-utils.inc");
require_once("certs.inc");
require_once("classes/Form.class.php");

$pgtitle = array("SoftEther5 VPN", "vpnserver");

include("head.inc");

if ($input_errors) {
	print_input_errors($input_errors);
}

?>

<div class="bs-callout bs-callout-danger">
	<h4>Attention!</h4>
	The pfSense SoftEther5 package is under development.
	<br>
	To start/stop/restart the vpnserver service go to Status > Services
	<br>
	<br>
	For configuration use the external tool: SoftEther VPN Server Manager on the official <a href="https://www.softether.org">SoftEther</a> website.
	<br>
	<br>
	<b>Be careful, if you need to use the https port (443) as your vpnserver, change the pfSense https default port with another not in use.</b>
	<br>
	<br>
	Remember to backup your vpnserver data/configuration, using the external tool SoftEther VPN Server Manager.
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