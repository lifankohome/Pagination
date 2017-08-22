<?php

/**
 * Created by PhpStorm.
 * User: lifanko  lee
 * Date: 2017/8/4
 * Time: 19:57
 */
class Db
{
    public function connect()
    {
        try {
            $PDO = new PDO("mysql:host=localhost;dbname=lifanko", "root", "");
        } catch (PDOException $e) {
            die("<h3 style='color: red;text-align: center'>无法连接到服务器，请稍后重试</h3>");
        }
        $PDO->query("set names utf8");
        return $PDO;
    }

    public function query($SQL, $PDO)
    {
        return $PDO->query($SQL);
    }

    public function getTable()
    {
        return $this->table;
    }
}