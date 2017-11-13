<?php


class Database
{
    const DB_NAME = 'data.db';
    var $content = null;

    function setData($data)
    {
        $result = file_put_contents(DB_NAME, serialize($data));
        return is_numeric($result);
    }

    function getData()
    {
        $content = file_get_contents(DB_NAME, true);
        $this->content = unserialize($content);
        return $this->content;
    }

    function userExist($name)
    {
        if (is_null($this->content)) {
            return false;
        }
    }

}