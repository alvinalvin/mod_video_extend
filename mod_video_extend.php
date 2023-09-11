<?php
/**
 * @copyright	Copyright © 2022 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	https://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
$doc = JFactory::getDocument();
//recibiendo parametros
$txtmarker1     =       $params->get("txto1");
$txtmarker2     =       $params->get("txto2");
$txtmarker3     =       $params->get("txto3");
$txtmarker4     =       $params->get("txto4");
$widthvideo     =  $params->get("anchovideo");
$heightvideo    =  $params->get("largovideo");
$widthlogo      =   $params->get("anchologo");
$heightlogo     =   $params->get("largologo");
$time1          =     $params->get("tiempo1");
$time2          =     $params->get("tiempo2");
$time3          =     $params->get("tiempo3");
$time5          =     $params->get("tiempo5");
$url            =     $params->get("urllogo");
$logo           =        $params->get("logo");
$video          =       $params->get("video");
$poster         =      $params->get("poster");
$muted          =       $params->get("Muted");
$autoplay       =     $params->get("autoplay");
$loop           =         $params->get("loop");
$preload        =      $params->get("preload");
$id             =           $params->get("id");
$video_youtube  =   $params->get("urlyoutube");
$color  =           $params->get("colorvideo");
// Include jquery
$doc->addScript(JURI::root()."modules/mod_video_extend/assets/js/jquery.video-extend.js");
require JModuleHelper::getLayoutPath('mod_video_extend', $params->get('layout', 'default'));
