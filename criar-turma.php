<?php


use src\Domain\Model\Student;
use src\Infrastructure\Repository\PdoStudentRepository;
require_once 'vendor/autoload.php';



$connection = src\Infrastructure\Persistence\ConnectionCreator::createConnecetion();
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

