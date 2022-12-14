# mw-LocalSettings
LocalSettings.php is the configuration file for MediaWiki.  This projects shows how I setup my LocalSettings.php file.  I separate out the MUST HAVE items into the main LocalSettings.php file.

Then I created a directory called "LocalSettings".  Within that directory, I created 4 files to handle the 4 major parts of MediaWiki configuration.

- LocalConfiguration.php (mediawiki configurations)
- LocalExtensions.php (extenstion loading, and extension specific configurations)
- LocalNamespaces.php (custom namespaces)
- LocalPermissions.php (user permission settings)

You can use this example to see how to setup your own LocalSettings.php file, so it can be easily managed.

## Version History

### Version 1.0
    MediaWiki Version: 1.39.x LTS
    Author: Melissa Janine Newman (Proactive Programming)
    
- Initial version
