<?php ob_start(); ?>
<?php include "../include/db.php" ?>

<?php session_start();  ?>

<?php

if(isset($_SESSION['user_role']))
{

}

else 
{
    header("location: ../index.php");
}


?>

