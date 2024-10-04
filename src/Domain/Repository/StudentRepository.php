<?php

require 'src/Domain/Model/Student.php';

interface StudentRepository
{
    public function allStudents():array;
    public function save():bool;
    public function remove():bool;
    public function studentBirthday(DateTimeInterface $birthday):array;
}