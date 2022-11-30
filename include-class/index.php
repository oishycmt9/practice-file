<?php
include 'Add.php';
include_once 'Delete.php';
require 'Edit.php';
require_once 'View.php';
include 'trait/Student.php';

$add = new Add();
echo $add->addMsg();
echo "<br>";

$delete = new Delete();
echo $delete->dltMessage();
echo "<br>";

$edit = new Edit();
echo $edit->editMessage();
echo "<br>";

$view = new View();
echo $view->viewMsg();
echo "<br>";

$student = new Student();
echo $student->stdMessage();
echo "<br>";