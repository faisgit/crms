<?php include "navbar.php"; ?>
<link rel="stylesheet" href="form.css">
<div class='container'>
<div class='form-container' >
    <h1>Add</h1>
        <form action="add-act.php" method="POST">
            <input type="text" name="name" placeholder="Name" /> 
            <input type="text" name="roll-no" placeholder="Age" />
            <input type="text" name="course" placeholder="Course" /> 
            <input type="text" name="sem" placeholder="Sem" /> 
            <input type="text" name="city" placeholder="City" />
            <input type="text" name="total_marks" placeholder="Total Marks" />  
            <button name="submit" class='btn'>Add</button>
        
        </form>
    </div>
</div>