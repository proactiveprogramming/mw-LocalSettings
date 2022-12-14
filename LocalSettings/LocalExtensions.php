<?php
# File: LocalConfiguration
# Author: Proactive Programming
#
# Purpose: To store local extension settings which are included in LocalSettings.php
#          Extension settings are added here.
#

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:

#
### Standard extensions on MediaWiki sites
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'TextExtracts' );

#
## Added extensions, with no changes in code.
wfLoadExtension( 'GeoData' );
//wfLoadExtension( 'Cargo' ); // Fix personalurls
wfLoadExtension( 'Capiunto' ); // use with cargo
wfLoadExtension( 'LabeledSectionTransclusion' );
//wfLoadExtension( 'PageForms' );
//wfLoadExtension( 'Purge' ); // Fix personalurls
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'DisplayTitle' );
//wfLoadExtension( 'GeoCrumbs' );
wfLoadExtension( 'StaffEdits' );
//wfLoadExtension( 'BreadCrumbs2' );
//wfLoadExtension( 'Variables' ); // Deprecated hooks, use Metadata extension instead.
wfLoadExtension( 'Calendar' );
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'NativeSvgHandler' );
wfLoadExtension( 'NoTitle' );
wfLoadExtension( 'TimedMediaHandler' ); // Uses personalurls correctly.
wfLoadExtension( 'DynamicPageList3' ); 
wfLoadExtension( 'NukeDPL' );
wfLoadExtension( 'DynamicPageListEngine' );
wfLoadExtension( 'TitleIcon' );
//wfLoadExtension( 'ApprovedRevs' ); // Fix personal urls.
wfLoadExtension( 'BlueSpicePageVersion' );
wfLoadExtension( 'NamespaceRelations' ); // Uses SkinTemplateNavigation::Universal correctly.
wfLoadExtension( 'RevisionSlider' );
wfLoadExtension( 'ProofreadPage' );
wfLoadExtension( 'SubPageList3' );
wfLoadExtension( 'DataTransfer' );
wfLoadExtension( 'Examples' );
wfLoadExtension( 'Metadata' );

// Extensions involing users.  check for updates.
wfLoadExtension( 'Comments' );
wfLoadExtension( 'VoteNY' );
require_once "$IP/extensions/SocialProfile/SocialProfile.php";
//wfLoadExtension( 'UserMerge' );
//wfLoadExtension( 'MyVariables' );
//wfLoadExtension( 'LastModified' );
//wfLoadExtension( 'LastUserLogin' );
//wfLoadExtension( 'ContributionCredits' );
//wfLoadExtension( 'ShowRealUsernames' );
//wfLoadExtension( 'Echo' ); // Uses SkinTemplateNavigation::Universal correctly 
//wfLoadExtension( 'EditNotify' );
//wfLoadExtension( 'LoginNotify' );
//wfLoadExtension( 'PageCreationNotif' );

//wfLoadExtension( 'ShortDescription' ); // Bugs, need to redownload 
//wfLoadExtension( 'QuickSearchLookup' );
//wfLoadExtension( 'PortableInfobox' );
//wfLoadExtension( 'LinkTitles' );
//wfLoadExtension( 'MultiBoilerplate' );
wfLoadExtension( 'PageAssessments' );
//wfLoadExtension( 'SearchThumbs' ); // MediawikiServices RepoGroup
//wfLoadExtension( 'SimpleBatchUpload' );

//require_once "$IP/extensions/IndexFunction/IndexFunction.php"; // Does not work
//wfLoadExtension( 'SimpleMathJax' );
//wfLoadExtension( 'SimpleTable' );
wfLoadExtension( 'ArticleIndex' ); // Needs coding changes to work
//wfLoadExtension( 'Moderation' );
//wfLoadExtension( 'Pluso' ); // social media buttons
//wfLoadExtension( 'RottenLinks' );
//require_once "$IP/extensions/xyCategoryBrowser/xyCategoryBrowser.php";
// wfLoadExtension( 'Cite' );

//
// These extensions have an issue with getting search title results.
// Does not search namespaces properly.  Does not fix mixed title issues.

#
# Extension Settings
##########################################################################
$wgGroupPermissions['bureaucrat']['usermerge'] = true;

$wgLinkTitlesParseOnEdit = false;
$wgLinkTitlesParseOnRender = false;
$wgLinkTitlesSmartMode = true;
$wgLinkTitlesParseHeadings = false;
$wgLinkTitlesPreferShortTitles = false;
$wgLinkTitlesMinimumTitleLength = 3;
$wgLinkTitlesSkipTemplates = false;
$wgLinkTitlesFirstOnly = false;
$wgLinkTitlesWordStartOnly = false;
$wgLinkTitlesWordEndOnly = false;
$wgLinkTitlesCheckRedirect = true;
$wgLinkTitlesSourceNamespaces = [NS_MAIN];
$wgLinkTitlesTargetNamespaces = [NS_MAIN];
$wgLinkTitlesSameNamespace = true;

$wgHighlightLinksInCategory = array(
    "Disambiguation_pages" => 'disambig',
    "Templates" => 'templates',
);
$wgCategorySortHeaderAppendPageNameToKey  = true;
$wgTimelinePloticusCommand = "/usr/bin/ploticus";
$wgTimelinePerlCommand = "/usr/bin/perl";
putenv("GDFONTPATH=/usr/share/fonts/truetype/freefont"); // Directory containing FreeSans.ttf.
$wgTimelineFontFile = 'ascii'; // Use the internal Ploticus font
$wgTimelineTimelineFile = "$IP\\extensions\\EasyTimeline\\EasyTimeline.pl";
$wgSmjExtraInlineMath = [ [ "$", "$" ], [ "\\(", "\\)" ] ];
$wgModerationPreviewLink = true;
$wgModerationEnableEditChange = true;
$wgLogRestrictions["newusers"] = 'moderation';
$wgMassMessageAccountUsername = 'MessengerBot';
$wgContentHandlerUseDB = true;
$xyCategoryGraphStyle = array(
  "COLOR_NODE"          => "#EEEEEE", // color of category nodes
  "COLOR_NODE_ERROR"    => "#FF0000", // color for internal error
  "COLOR_NODE_REDIRECT" => "#FFCCCC", // color of redirected category nodes
  "COLOR_NODE_MISSING"  => "#FFFFCC", // color of missing category nodes
  "COLOR_LINK_REDIRECT" => "#FF0000", // color of redirect links
  "HEIGHT"              => "1920",    // height in pixels (96th of an inch)
  "WIDTH"               => "768"      // width in pixels (96th of an inch)
);
$wgTimelineTableLineSeparator = PHP_EOL; // Separator for parsing lines of the input.
$wgTimelineTableFieldSeparator = "|";
$wgTimelineTableDateSeparator = "-"; // (default: "-" e.g. "MM-DD-YYYY")
$wgTimelineTableMaxCells = 100;
$wgTimelineTableAbbrMonth = true;
$wgTimelineTableShortMonthLen = 1;

$wgCongributionCreditsUseRealNames = true;
$wgContributionCreditsHeader = false;
$wgShowRealUsernamesInline = true;
$wgShortDescriptionEnableTagline = true;
$ShortDescriptionExtendOpenSearchXml = true;

#
# Cargo data fields
$wgCargoPageDataColumns[] = 'creationDate';
$wgCargoPageDataColumns[] = 'modificationDate';
$wgCargoPageDataColumns[] = 'creator';
$wgCargoPageDataColumns[] = 'lastEditor';
$wgCargoPageDataColumns[] = 'isRedirect';
$wgCargoPageDataColumns[] = 'pageNameOrRedirect';

# Boilerplate extension
$wgMultiBoilerplateOverwrite = true;

$wgPageAssessmentsOnTalkPages = false;

$wgSimpleBatchUploadMaxFilesPerBatch = [
        '*' => 1000,
];

