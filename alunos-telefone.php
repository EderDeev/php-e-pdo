<?php


use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
use Alura\PDO\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);

$studentsWithPhones =$repository->studentsWithPhones();

var_dump($studentsWithPhones);