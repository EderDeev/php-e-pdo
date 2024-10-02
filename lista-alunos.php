<?php
require_once "Student.php";
require_once "vendor/autoload.php";

$caminhoAbsoluto = __DIR__ . '/banco.sqlite';
$pdo  = new PDO('sqlite:'.$caminhoAbsoluto);

$statement = $pdo->query('SELECT * FROM students');

$studentListData = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentListData as $student) {
    $studentList[] = new Student(
        $student['id'],
        $student['name'],
        new \DateTimeImmutable($student['birthday']),
    );

var_dump($studentList);

}