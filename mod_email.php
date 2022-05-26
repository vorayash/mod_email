<?php

// no direct access
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$email = ModEmailHelper::getCloakedEmail($params->get('email','abc@gmail.com'));

require ModuleHelper::getLayoutPath('mod_email', $params->get('layout', 'default'));