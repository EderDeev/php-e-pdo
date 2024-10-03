<?php


class ConnectionCreator{
    public static function createConnecetion()
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';
        return new PDO('sqlite:'.$databasePath);
    }

}