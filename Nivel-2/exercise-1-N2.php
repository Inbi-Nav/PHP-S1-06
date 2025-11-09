<?php
require 'FullStackCourse.php';
$course = new FullStackCourse
(
    "Learn PHP", 
    "https://www.php.net/manual/en/index.php", 
    CourseLanguages::PHP, 
    CourseType::Video
);
echo $course . "<br>";
?>