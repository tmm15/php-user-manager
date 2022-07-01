<?php

class DBMySQLi {

protected $db_link = null;

    public function __construct()
    {
        //MySQLiコネクションを生成
        $this->db_link = mysql_connect("localhost","root", "", "test");

        //DBコネクションを確立
        if(!$this->db_link) {
            throw new Exception("コネクションエラー");
        }
    }

}