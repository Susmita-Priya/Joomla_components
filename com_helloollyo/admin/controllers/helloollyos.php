<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class HelloOllyoControllerHelloOllyos extends JControllerAdmin
{
	public function getModel($name = 'HelloOllyo', $prefix = 'HelloOllyoModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}