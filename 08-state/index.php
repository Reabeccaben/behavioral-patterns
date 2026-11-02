<?php
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/ApplicantState.php';
require_once __DIR__ . '/PreAssessedState.php';
require_once __DIR__ . '/EnrolledState.php';
require_once __DIR__ . '/DroppedState.php';
require_once __DIR__ . '/GraduatedState.php';
$student=new Student(new ApplicantState());
echo '<h2>Student Enrollment Status</h2>';
echo '<b>Current State:</b> '.$student->getStateName().'<br><b>Action:</b> Enroll<br><b>Result:</b> '.$student->enroll().'<br><br>';
$student->setState(new PreAssessedState());
echo '<b>Current State:</b> '.$student->getStateName().'<br><b>Action:</b> Enroll<br><b>Result:</b> '.$student->enroll().'<br><br>';
$student->setState(new EnrolledState());
echo '<b>Current State:</b> '.$student->getStateName().'<br><b>Action:</b> Enroll<br><b>Result:</b> '.$student->enroll().'<br>';
?>
