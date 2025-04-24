<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class HelloOllyoModelHelloOllyo extends JModelItem
{
    protected $message;

    public function getMsg()
    {
        if (!isset($this->message)) {
            $this->message = 'Hello Ollyo!!!';
        }

        return $this->message;
    }

    public function getItem($pk = null)
    {
        return $this->getMsg();
    }
}
