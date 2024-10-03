<?php

require 'src/Infrastructure/Persistence/ConnectionCreator.php';
require 'src/Domain/Model/Student.php';
require "vendor/autoload.php";

$pdo = ConnectionCreator::createConnecetion();

$statement = $pdo->prepare("DELETE FROM students WHERE id = ?");
$statement->bindValue(1, 2,PDO::PARAM_INT);
var_dump($statement->execute());
