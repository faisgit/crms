<!-- <?php     session_start();  ?> -->
<link rel="stylesheet" href="navbar.css">

<nav class="nav">
    <h1 class="nav-head">SRMS</h1>
    <div class="nav-list">
            <?php if($_SESSION['username'] == 'admin'){ ?>
        <a href="add-form.php">Add</a>
        <?php } ?>
        <a href="logout.php">Logout</a>
    </div>
</nav>