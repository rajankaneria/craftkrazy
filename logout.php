<?php
include('connection.php');
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
// Finally, destroy the session.
/*$uid=$_SESSION['uid'];

$qd="delete from tbl_cart where user_id=?";
$std=$conn->prepare($qd)or die('error in delete');
$std->bind_param('i',$uid);
$std->execute();*/

session_destroy();

header("Location:index.php"); 
?> 