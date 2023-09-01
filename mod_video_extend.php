<?php
/**
 * @copyright	Copyright © 2022 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	https://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = JFactory::getDocument();
// Include jquery
$doc->addScript(JURI::root()."modules/mod_video_extend/assets/js/jquery.video-extend.js");
require JModuleHelper::getLayoutPath('mod_video_extend', $params->get('layout', 'default'));
