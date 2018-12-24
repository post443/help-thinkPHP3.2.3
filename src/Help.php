<?php
namespace Yan\Help;
class Help{
    public function request()
    {
        return json_decode($GLOBALS['HTTP_RAW_POST_DATA'],true);
    }
}