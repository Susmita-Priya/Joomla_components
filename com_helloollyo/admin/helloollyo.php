<?php
defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('HelloOllyo');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
