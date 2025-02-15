# mwExtUpgrader
**A tool for batch upgrade MediaWiki extensions**

## Project purpose
Many people are updated one by one via [ExtensionDistributor](https://www.mediawiki.org/wiki/Special:ExtensionDistributor), without git.

**This script can help operator who do not intend to use git to manage version but feel a headache when upgrading their MediaWiki.**

## Feature
* Batch upgrade the extension of your wiki that powered by MediaWiki (In fact, it is to batch replace old files as new files)

## How to use
This is an interactive script.
### If you have downloaded the release version

Just run
`php mwExtUpgrader.phar`

### If you have downloaded the source code

You will need to have a working install of [composer](https://getcomposer.org/) to fulfill the dependencies

`composer install
php run.php`

## Prepare a release
You need to use the `build.php` script to build the [PHAR archive](https://en.wikipedia.org/wiki/PHAR_\(file_format\)) of this project. It package the entire project along with it's dependencies.

The script generated file can be executed, equivalent execute ordinary a PHP file.

## Support
If this script on the way in the use of the problem or you have any ideas, please go to the [Github issues](https://github.com/RazeSoldier/mwExtUpgrader/issues).
