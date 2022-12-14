<?php
# File: LocalConfiguration
# Author: Proactive Programming
#
# Purpose: To store local namespace settings which are included in LocalSettings.php
#

// Define constants for my additional namespaces.
define( "NS_SENSE", 100);
define( "NS_ROOT", 102);
//define( "NS_VERB", 104);
//define( "NS_ADJ", 106);
//define( "NS_ADV", 108);
//define( "NS_TOPIC", 110);
//define( "NS_DRAFT", 112);
//define( "NS_REF", 114); 
//define( "NS_APP", 116); 
define( "NS_LEARN", 120); 
define( "NS_APPENDIX", 122); 
define( "NS_TEXT", 124); 

// // Add namespaces.
$wgExtraNamespaces[NS_SENSE] = "Sense";
$wgExtraNamespaces[NS_ROOT] = "Root";
$wgExtraNamespaces[NS_SENSE+1] = "Sense_talk";
$wgExtraNamespaces[NS_ROOT+1] = "Root_talk";
//$wgExtraNamespaces[NS_VERB] = "Verb";
//$wgExtraNamespaces[NS_ADJ] = "Adj";
//$wgExtraNamespaces[NS_ADV] = "Adv";
//$wgExtraNamespaces[NS_TOPIC] = "Topic";
//$wgExtraNamespaces[NS_DRAFT] = "Draft";
//$wgExtraNamespaces[NS_REF] = "Ref";
//$wgExtraNamespaces[NS_APP] = "Appendix";
$wgExtraNamespaces[NS_LEARN] = "Learn";
$wgExtraNamespaces[NS_APPENDIX] = "Appendix";
$wgExtraNamespaces[NS_TEXT] = "Text";
$wgExtraNamespaces[NS_LEARN+1] = "Learn_talk";
$wgExtraNamespaces[NS_APPENDIX+1] = "Appendix_talk";
$wgExtraNamespaces[NS_TEXT+1] = "Text_talk";

//$wgNamespacesWithSubpages[NS_TOPIC] = true;
//$wgNamespacesWithSubpages[NS_DRAFT] = true;
//$wgNamespacesWithSubpages[NS_REF] = true;
//$wgNamespacesWithSubpages[NS_APP] = true;

$wgContentNamespaces = [ NS_MAIN, NS_SENSE, NS_LEARN, NS_APPENDIX, NS_TEXT, NS_ROOT ];

$wgNamespacesToBeSearchedDefault = [
	NS_MAIN => true
	//NS_SENSE => true,
	//NS_ROOT => true
];

//$wgNamespaceAliases = [
//	'Wikipedian' => NS_USER,
//	'Help' => 100
//];

$wgNamespacesWithSubpages[NS_MAIN] = true;            // subpages enabled for the foo namespace
$wgNamespacesWithSubpages[NS_LEARN] = true;            // subpages enabled for the foo namespace
$wgNamespacesWithSubpages[NS_APPENDIX] = true;            // subpages enabled for the foo namespace

//$wgNamespaceProtection[NS_FOO] = array( 'editfoo' ); // permission "editfoo" required to edit the foo namespace
//$wgNamespacesWithSubpages[NS_FOO] = true;            // subpages enabled for the foo namespace
//$wgGroupPermissions['sysop']['editfoo'] = true;      // permission "editfoo" granted to users in the "sysop" group

# Removing talk or discussion link using PHP
$wgHooks['SkinTemplateNavigation::Universal'][] = 'replaceTabs';
function replaceTabs( $skin, &$links) {  
        unset( $links['namespaces']['talk'] ); // Remove the talk action
        return true;
}

