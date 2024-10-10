<?php


use Alura\PDO\Domain\Model\Student;
use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
use Alura\PDO\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';



$connection = ConnectionCreator::createConnection();
$repositorio = new PdoStudentRepository($connection);

$connection->beginTransaction();
$aStudent = new Student(
    null,
    "Jonas ramos",
    new DateTimeImmutable('2000-01-10')
);
$repositorio->save($aStudent);
$aStudent2 = new Student(
    null,
    "Boris jordan",
    new DateTimeImmutable('1998-05-10')
);
$repositorio->save($aStudent2);
$connection->commit();

