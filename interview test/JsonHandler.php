<?php
require_once ('Test.php');

class JsonHandler extends Test
{
    public $file;
    public function __construct($file)
    {
        $this->file=$file;
    }

    public function getData()
    {
                $json = file_get_contents($this->file);
                $data = json_decode($json, TRUE);
                return $data;

    }
    public function postData()
    {
        parent::postData();
    }

}