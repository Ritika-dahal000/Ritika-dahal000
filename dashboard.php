<?php
// echo "hi";
session_start();
if(isset($_SESSION['username'])){


?>
<h1>
    Hi
<?php echo $_SESSION['username'] ?>
</h1>
<?php echo $_SESSION['address'] ?>
<p><a href="logout.php">Logout</a></p>
<?php }else{ ?>
    <h1>Please Login first</h1>

    <?php } ?>
