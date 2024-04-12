<?php
    include 'db-conn.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $roll_no = $_POST['roll-no'];
        $course = $_POST['course'];
        $sem =  $_POST['sem'];
        $city =  $_POST['city'];
        $total_marks =  $_POST['total_marks'];

        $save = "UPDATE `result` SET `name` = '$name', `roll no` = '$roll_no', `course` = '$course', `sem` = '$sem', `city` = '$city', `total marks` = '$total_marks' WHERE `result`.`id` = $id;" ;
        $sql = mysqli_query($conn,$save);
    }
    header("LOcation:index.php");

?>