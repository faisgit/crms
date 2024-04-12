<?php 
    session_start();
    include "db-conn.php";
    $display = "SELECT * FROM result";
    $result = mysqli_query($conn, $display);
    include "navbar.php";
?>

<link rel="stylesheet" type="text/css" href="index.css">

<div class="container">
    <table>
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Course</th>
            <th>sem</th>
            <th>Total Marks</th>
            <th>Status</th>
            <th>City</th>
            <?php if($_SESSION['username'] == 'admin'){ ?>
        <th>Action</th>
        <?php } ?>
        </thead>
        <tbody>
            <?php
                    $index = 102300;
                 while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td>
                    <?php
                     echo ($index);  
                     $index++;
                     ?> 
                </td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roll no']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['sem']; ?></td>
                <td><?php echo $row['total marks']; ?></td>
                <td>
                  <?php 
                  
                  
                  if($row['total marks'] <= 175){
                    echo "Fail";
                  }
                  else{
                    echo "Pass";
                  }
                  
                  
                  ?>
                </td>
                <td><?php echo $row['city']; ?></td>
                <?php if($_SESSION['username'] == 'admin'){ ?>
                <td id="action">
                    <a href=updateForm.php?id=<?php echo $row['id']; ?> " id="Update">Update</a>
                    <span id="seprator">
                        |
                    </span>
                    <a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger " id="Delete">Delete</a>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

