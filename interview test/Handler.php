<?php
require_once ('DBHandler.php');
require_once ('/home/arti/php/interview test/DbConnection.php');
require_once ('CSVHandler.php');
require_once ('JsonHandler.php');


class Handler
{
    public function Handler($file)
    {

        $execute = '';
        $file_parts = pathinfo($file);
        var_dump($file_parts);
        {
            if ((!$file_parts['extension'])) {
                $execute = new DBHandler($file);
            }elseif (($file_parts['extension']) === "json") {
                $execute = new JsonHandler($file);
            } elseif (($file_parts['extension']) === "csv") {
                $execute = new CSVHandler($file);
            }
            $execute->postData();
        }
    }
}



$tableName1 = 'actors';
$DBInfo1= new Handler($tableName1);
//$tableName2 = 'movies';
//$DBInfo2= new Handler($tableName2);
//$tableName3 = 'series';
//$DBInfo3= new Handler($tableName3);


$file1 = 'test.csv';
$res1  = new Handler($file1);

$file2 = 'test.json';
$res2 = new Handler($file2);

