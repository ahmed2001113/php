 <?php

 include ("conn.php") ;

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$department=$_POST['department'];
$salary=$_POST['salary'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$relationstatus=$_POST['relationstatus'];
$militarystatus=$_POST['militarystatus'];
$hiredate=$_POST['hiredate'];
$attendance=$_POST['attendance'];
$submit=$_POST['submit'];

$imagename=$_FILES['image']['name'];
$imageloc=$_FILES['image']['tmp_name'];
$r=rand();
$newimg="images/$r$imagename";

 move_uploaded_file($imageloc , $newimg);

$q = "INSERT INTO employee( name,email,phone,address,position,salary,age,gender,department,hiredate,image,relationstatus,militarystatus,date) VALUES ('$name', '$email','$phone','$address','$position', $salary , $age ,'$gender','$department','$hiredate','$newimg','$relationstatus','$militarystatus', Now())";

 $add =$conn->query($q) ;

 if($add){
session_start();
$_SESSION['login']= " Add Employee Successfully ";
header("Location: show.php") ;
 }



?>