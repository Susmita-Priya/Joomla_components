<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class HelloOllyoViewHelloOllyo extends JViewLegacy
{

	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = $this->get('Item');


		// Display the view
		parent::display($tpl);
	}
}

