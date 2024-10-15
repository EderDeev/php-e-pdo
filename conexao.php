<?php

use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
require 'vendor\autoload.php';



$pdo = ConnectionCreator::createConnection();

$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('24', '999999999', 3),('21', '222222222', 3);");
exit();


$pdo->exec('CREATE TABLE IF NOT EXISTS studentsclass (
    id INTEGER PRIMARY KEY , 
    name TEXT,
    birth_date TEXT);');

$pdo->exec('CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY(student_id) REFERENCES students(id)');

;