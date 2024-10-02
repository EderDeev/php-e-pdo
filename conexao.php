<?php

$caminhoAbsoluto = __DIR__ . '/banco.sqlite';
$pdo  = new PDO('sqlite:'.$caminhoAbsoluto);

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY , name TEXT,birthday TEXT);');
