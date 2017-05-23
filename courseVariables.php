<?php

$courseName = "Data Something";
$courseDates = "November 3, 2017 - December 8, 2018";
$courseScheduleList = array("Monday: 3:33pm - 4:00pm", "Tuesday: 4:15pm - 8:25pm");
$coursePrice = "$250";
$studentName = "Ali Mir";

$courseSchedules = "";

foreach ($courseScheduleList as &$schedule) {
  $courseSchedules .= "<p style=\"margin: 0;font-size: 14px;line-height: 16px\"><span style=\"font-size: 16px; line-height: 19px;\">$schedule</span></p>";
}

$courseInstructorName = "John Smith";
$courseInstructorPhoneNumber = "408.222.2222";
$courseEmailAddress = "aaa@aaa.com";
$courseAddress = "123 Streetname Dr. Cityname, ST";
?>