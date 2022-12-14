<?php
# File: LocalConfiguration
# Author: Proactive Programming
#
# Purpose: To store local configuration settings which are included in LocalSettings.php
#          Extension settings are located in ./w/LocalSettings/LocalExtensions.php
#

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "© 2022 Copyright, Proactive Programming, Melissa Janine Newman";
$wgRightsIcon = "";
unset( $wgFooterIcons['poweredby'] );
$wgRightsIcon = null;

#
## File and File Uploads and images

$wgAllowCopyUploads = true;
$wgEnableUploads = true;
$wgGroupPermissions['user']['upload_by_url'] = true;
$wgGroupPermissions['Administrators']['upload_by_url'] = true;
$wgFileExtensions = [
    'png', 'gif', 'jpg', 'jpeg', 'jp2', 'webp', 'ppt', 'pdf', 'psd',
    'mp3', 'xls', 'xlsx', 'swf', 'doc', 'docx', 'odt', 'odc', 'odp',
    'odg', 'mpp', 'pptx', 'svg'
];

#
## Images
#$wgCustomConvertCommand = "gm convert %s -resize %wx%h %d";
$wgUseImageResize = true;
$wgUseImageMagick = true;
$wgUseInstantCommons = true;
$wgAllowExternalImages = true;
//$wgAllowExternalImagesFrom = 'http://127.0.0.1/';
//$wgAllowExternalImagesFrom = [
//    'http://127.0.0.1/',
//    'https://www.example.com/'
//];
#$wgEnableImageWhitelist = true;


$wgGalleryOptions = [
	'imagesPerRow' => 0, // Default number of images per-row in the gallery. 0: Adapt to screensize
	'imageWidth' => 300, // Width of the cells containing images in galleries (in "px")
	'imageHeight' => 300, // Height of the cells containing images in galleries (in "px")
	'showBytes' => true, // Show the filesize in bytes in categories
    'mode' => 'traditional', // One of "traditional", "nolines", "packed", "packed-hover", "packed-overlay", "slideshow" (1.28+)
    'class' => '"center"',
    'style' => '"text-align:left"',
];

#
## Performance
$wgMiserMode = true;

#
## Cache and memory settings
$wgMemCachedServers = [];
$wgUseFileCache = true;
$wgCacheDirectory = "$IP/cache";
$wgAdaptiveMessageCache = true;
$wgEnableSidebarCache = true;
$wgSidebarCacheExpiry = 86400*180; // 6 months, 1 day * 180 days
$wgParserCacheExpireTime = 86400*180; // 6 months, 1 day * 180 days
$wgMainCacheType = CACHE_DB;
$wgParserCacheType = CACHE_DB;
$wgMessageCacheType = CACHE_DB;
$wgFileCacheDirectory = "$wgUploadDirectory/cache";

#
# Language and region settings.
$wgLanguageCode = "en";
$wgLocaltimezone = "Asia/Jerusalem";
//$wgAllUnicodeFixes = true;
$wgDisableLangConversion = true;
$wgDisableTitleConversion = false;

#
## Output formats
$wgDisableOutputCompression = true;
$wgEditSubmitButtonLabelPublish = true;
//$wgFragmentMode = ['html5'];
//$wgExternalInterwikiFragmentMode = 'html5';

#
## Parser
$wgAllowDisplayTitle = true;
$wgAllowExternalImages = true;
//$wgExpensiveParserFunctionLimit = 99; // 99, default value
$wgMaxTocLevel = 3;
$wgRestrictDisplayTitle = false;  // needed for Hebrew title with nikkud.

#
## HTML
$wgRawHtml = true;

#
## Statistics
//$wgActiveUserDays = 90; // 3 months
//$wgArticleCountMethod = 'any';
//$wgExperiencedUserMemberSince = 180; // 6 months
//$wgLearnerEdits = 1;
//$wgLearnerMemberSince = 1;

#
## Search
$wgAdvancedSearchHighlighting = true;
$wgOpenSearchDefaultLimit = 50;
$wgOpenSearchDescriptionLength = 500;
$wgDisableAnonTalk = true;
$wgHooks['PersonalUrls'][] = 'lfRemoveAnonUserpageLink';
function lfRemoveAnonUserpageLink( &$personal_urls, $title ) {
	unset( $personal_urls['anontalk'] );
	return true;
}

#
## Category
$wgCategoryCollation = 'uca-he-u-kn';
$wgCategoryPagingLimit = 500;
$wgCountCategorizedImagesAsUsed = true;
$wgDefaultRobotPolicy = 'noindex,nofollow';
#$wgNamespaceRobotPolicies = array( NS_MAIN => 'index,follow' );

$wgDiff3 = "/usr/bin/diff3";

#
# Default of personal preferences

$wgDefaultUserOptions['fancysig'] = 1;
$wgDefaultUserOptions['language'] = 'en';
$wgDefaultUserOptions['disablemail'] = 1;
$wgDefaultUserOptions['date'] = 'dmy';
$wgDefaultUserOptions['timecorrection'] = 'Asia/Jerusalem';
$wgDefaultUserOptions['minordefault'] = 1;
$wgDefaultUserOptions['rcdays'] = 360;
$wgDefaultUserOptions['rclimit'] = 500;
$wgDefaultUserOptions['shownumberswatching'] = 0;
$wgDefaultUserOptions['searchlimit'] = 50;
$wgDefaultUserOptions['ajaxsearch'] = 1;
$wgDefaultUserOptions['underline'] = 0;
$wgDefaultUserOptions['search-match-redirect'] = false;

$wgAllowUserJs = true;
$wgAllowSiteJs = true;

