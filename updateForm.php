<?php
    include 'db-conn.php';
    include 'navbar.php';
    // Assuming that you have already sanitized and validated the input.
    $id = (int)$_REQUEST['id'];

    // Use prepared statement
    $update = "SELECT * FROM result WHERE id = ?";

    $stmt = mysqli_prepare($conn, $update);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch the data
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $roll_no = $row['roll no'];
        $course = $row['course'];
        $sem =  $row['sem'];
        $city =  $row['city'];
        $total_marks =  $row['total marks'];
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>

<link rel="stylesheet" href="form.css">
<div class='container'>

    <div class="form-container">
        <h1>Update</h1>
    <form action="update-act.php" method = "post">
        <input type="text" name="id" placeholder="Id" value = '<?php echo $id; ?>' /> 
        <input type="text" name="name" placeholder="Name" value = '<?php echo $name; ?>' /> 
        <input type="text" name="roll-no" placeholder="Age" value = '<?php echo $roll_no; ?>' />
        <input type="text" name="course" placeholder="Course" value = '<?php echo $course; ?>' /> 
        <input type="text" name="sem" placeholder="Sem" value = '<?php echo $sem; ?>' /> 
        <input type="text" name="city" placeholder="City" value = '<?php echo $city; ?>' />
        <input type="text" name="total_marks" placeholder="Total Marks" value = '<?php echo $total_marks; ?>' />  
        <input type="submit" value="Update" class='btn' name='submit'>
    </form>
    
    </div>
</div>
