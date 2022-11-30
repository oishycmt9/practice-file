<?php
require('./vendor/autoload.php');

use App\model\User;
use App\controller\StudentController;

$user = new User();
echo $user->getMessage();
echo "<br>";

$student = new StudentController();
echo $student->student();
echo "<br>";














