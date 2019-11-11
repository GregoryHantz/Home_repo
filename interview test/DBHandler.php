<?php
require_once ('DbConnection.php');
require_once ('Test.php');


class DBHandler extends Test
{
    public $tableName;

    public function __construct($tableName)
    {
        $this->tableName=$tableName;
        $this->connection= Connection::getInstance();
    }
    public function getData()
    {
        $sql = 'SELECT * FROM `' . $this->tableName . '`';

        $result = $this->connection->query($sql, [$this->tableName]);

        return $result;
    }
    public function postData()
    {
        var_dump($this->getData());
    }
}