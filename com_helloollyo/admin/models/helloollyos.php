<?php
defined('_JEXEC') or die;

class HelloOllyoModelHelloOllyos extends JModelList
{
    protected function getListQuery()
    {
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('*')
              ->from($db->quoteName('#__helloollyo'));

        return $query;
    }

}

// Built in methods for pagination and item retrieval from JModelList

// public function getItems()
// {
//     if (empty($this->_items))
//     {
//         $query = $this->getListQuery(); // <-- calls YOUR getListQuery()
//         $this->_items = $this->_getList($query, $this->getStart(), $this->getLimit());
//     }

//     return $this->_items;
// }

// public function getPagination()
// {
//     if (empty($this->_pagination))
//     {
//         jimport('joomla.html.pagination');
//         $this->_pagination = new JPagination($this->getTotal(), $this->getStart(), $this->getLimit());
//     }

//     return $this->_pagination;
// }