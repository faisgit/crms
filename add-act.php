<?php
    include 'db-conn.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $roll_no = $_POST['roll-no'];
        $course = $_POST['course'];
        $sem =  $_POST['sem'];
        $city =  $_POST['city'];
        $total_marks =  $_POST['total_marks'];

        $save = "INSERT INTO result ( `name`, `roll no`, `course`, `sem`, `city`, `total marks`) VALUES ('$name','$roll_no','$course', '$sem', '$city', '$total_marks' )";
        $sql = mysqli_query($conn,$save);
    }
    header("LOcation:index.php");
