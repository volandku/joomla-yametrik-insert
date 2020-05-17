<?php
/**
 * @package    Joomla - Yandex.Metrika insert
 * @version    1.0.0-beta2
 * @author     Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2020 Webmasterskaya. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://webmasterskaya.xyz/
 */

defined('_JEXEC') or die;

class plgSystemYaMetrikInsertInstallerScript
{
	function preflight($type, $parent)
	{
		jimport('joomla.version');
		// Check compatible Joomla version
		$jversion = new JVersion();

		if (!$jversion->isCompatible('3.7'))
		{
			JFactory::getApplication()->enqueueMessage(JText::_('PLG_SYSTEM_YAMETRIKINSERT_WRONG_JOOMLA'), 'error');

			return false;
		}
	}

	function postflight($type, $parent)
	{
		JFactory::getApplication()->enqueueMessage(JText::_('PLG_SYSTEM_YAMETRIKINSERT_WELCOME_MESSAGE'), 'notice');
	}
}