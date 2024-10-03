<?php

use src\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnecetion();
$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY , name TEXT,birthday TEXT);');
