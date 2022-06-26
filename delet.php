<?php 
include 'conn.php';
$id=$_GET['id'];

$q = "DELETE FROM employee where id = $id";
$delet= $conn->query($q);
if($delet){
    session_start();
    $_SESSION['login']="Record Deleted Successfuly";
    header("Location:show.php ");
}
?>

