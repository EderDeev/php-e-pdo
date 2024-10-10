<?php

use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
require 'vendor\autoload.php';

$pdo = ConnectionCreator::createConnection();
$pdo->exec('CREATE TABLE studentsclass (id INTEGER PRIMARY KEY , name TEXT,birth_date TEXT);');
