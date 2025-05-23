<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<form action="<?php echo JRoute::_('index.php?option=com_helloollyo&layout=edit&id=' . (int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_HELLOOLLYO_HELLOOLLYO_DETAILS'); ?></legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php
                        foreach($this->form->getFieldset() as $field) {
                            echo $field->renderField();
                        }
                    ?>
                </div>
            </div>
        </fieldset>

    </div>  
    <input type="hidden" name="task" value="helloollyo.edit" />
    <?php echo JHtml::_('form.token'); ?>
</form>