<?php
# File: LocalConfiguration
# Author: Proactive Programming
#
# Purpose: To store local permission settings which are included in LocalSettings.php
#

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['user']['upload'] = true;
$wgGroupPermissions['user']['reupload'] = true;
$wgGroupPermissions['user']['reupload-shared'] = true; // local files
$wgGroupPermissions['user']['upload_by_url'] = true;
$wgGroupPermissions['user']['upload_by_url'] = true;
$wgGroupPermissions['sysop']['upload_by_url'] = true;

//$wgGroupPermissions['user']['edit'] = false;
//$wgGroupPermissions['user']['createpage'] = false;
//$wgGroupPermissions['writer']['edit'] = true;
//$wgGroupPermissions['writer']['createpage'] = true;

