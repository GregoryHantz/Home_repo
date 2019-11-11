<?php


abstract class Test
{
    abstract public function getData();

    public function postData()
    {
        var_dump($this->getData());
    }
}