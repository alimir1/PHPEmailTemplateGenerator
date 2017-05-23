<?php

$retrievedData = json_decode(file_get_contents('php://input'));

$courseName = $retrievedData->{'course_name'};
$courseScheduleList = $retrievedData->{'schedules'}[0];
$courseDates = $retrievedData->{'course_dates'};
$coursePrice = $retrievedData->{'course_price'};
$studentName = $retrievedData->{'student_name'};
$courseInstructorName = $retrievedData->{'instructor_name'};
$courseEmailAddress = $retrievedData->{'instructor_email_address'};
$courseAddress = $retrievedData->{'course_address'};
$courseInstructorPhoneNumber = $retrievedData->{'instructor_phone_number'};

$courseSchedules = "";

foreach ($courseScheduleList as &$schedule) {
  $courseSchedules .= "<p style=\"margin: 0;font-size: 14px;line-height: 16px\"><span style=\"font-size: 16px; line-height: 19px;\">$schedule</span></p>";
}

// include_once("email-template.html");

require 'vendor/autoload.php';

?>