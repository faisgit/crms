<link rel="stylesheet" href="form.css">
<div class='container'>


<div class="form-container">
    <h1>Login</h1>
    <div class="">
        <div style="color : red ; text-align: center;">

            <?php 


                if(isset($_REQUEST['msg'])){
                
                    echo $_REQUEST['msg'] ;
                }

            ?>

        </div>


        <form action="login-act.php" method="POST">
            <div class="mb-3">

                <input type="text" name="username" placeholder="username">
            </div>
            <div class="mb-3">
                <input type="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

            
</div>