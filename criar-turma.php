<?php


use Alura\PDO\Domain\Model\Student;
use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
use Alura\PDO\Infrastructure\Repository\PdoStudentRepository;
require_once 'vendor/autoload.php';
use http\Exception\RuntimeException;


try {
$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

$connection->beginTransaction();
$aStudent = new Student(
    null,
    "Jonas ramos",
    new DateTimeImmutable('2000-01-10')
);
$repository->save($aStudent);
$aStudent2 = new Student(
    null,
    "Boris jordan",
    new DateTimeImmutable('1998-05-10')
);
$repository->save($aStudent2);
$connection->commit();
}catch (RuntimeException $e){
    echo $e->getMessage();

}

