<?php
require_once ('Test.php');

class CSVHandler extends Test
{
    public $file;
    public function __construct($file)
    {
        $this->file=$file;
    }

    public function getData()
    {
        $csv = array_map('str_getcsv', file($this->file));
        return $csv;
    }
    public function postData()
    {
        parent::postData();
    }
}