<?php
defined('_JEXEC') or die;

class HelloOllyoViewHelloOllyos extends JViewLegacy
{
    function display($tpl = null)
    {
        // Get data from the model
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        // Check for errors
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }

		// Set the toolbar
		$this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar()
	{
		JToolbarHelper::title(JText::_('COM_HELLOOLLYO_MANAGER_HELLOOLLYOS'));
		JToolbarHelper::addNew('helloollyo.add');
		JToolbarHelper::editList('helloollyo.edit');
		JToolbarHelper::deleteList('', 'helloollyos.delete');
	}

}
