<?php
/**
 * @package   akeebabackup
 * @copyright Copyright (c)2006-2021 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use FOF40\InstallScript\Plugin;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Filesystem\Folder;

defined('_JEXEC') || die;

// Load FOF if not already loaded
if (!defined('FOF40_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof40/include.php'))
{
	throw new RuntimeException('This extension requires FOF 4.');
}

class plgConsoleAkeebabackupInstallerScript extends Plugin
{
}
