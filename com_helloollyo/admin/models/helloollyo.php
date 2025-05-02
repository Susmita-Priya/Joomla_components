<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class HelloOllyoModelHelloOllyo extends JModelAdmin
{

	public function getTable($type = 'HelloOllyo', $prefix = 'HelloOllyoTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_helloollyo.helloollyo',   //form context
			'helloollyo',    //xml name
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}


	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_helloollyo.edit.helloollyo.data',       //The key under which Joomla stores the form data for this specific component and view.
			array()
		);

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
}