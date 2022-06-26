<?php
include ("header.php");
session_start();
?>

<div class="container">
<?php 
if(isset($_SESSION['login']) ){ ?>   

<div class="alert alert-success text-center a1" style="width:600px; margin:auto; height:70px;" >
    <h5><?= $_SESSION['login']; ?></h5></div>
<?php } ?>
<h1 class="text-center my-5">Abcence Employee </h1>
<table class="table my-5 text-center" >
        <thead class="table-dark">
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Position</th>
    <th>Department</th>
    <th>Ishere</th>
    <th>Date</th>
    <th>Actions</th>
</thead>
<tbody>
<?php 
include 'conn.php';
$q="SELECT * from employee where ishere = 'no' ";
$add = $conn->query($q);
foreach($add as $r ){
?>  
 <tr>
    <td><?= $r['id'] ?></td>
    <td><?= $r['name'] ?></td>
    <td><?= $r['age'] ?></td>
    <td><?= $r['email'] ?></td>
    <td><?= $r['position'] ?></td>
    <td><?= $r['department'] ?></td>
    <td><?= $r['ishere'] ?></td>
    <td><?= $r['date'] ?></td> 
    <td>
        <a href="showsingle.php?id=<?= $r['id'] ?>" class="btn btn-primary"title="show"><i class="fa fa-eye"></i></a>
        <a href="" class="btn btn-success"title="edit"><i class="fa fa-edit"></i></a>
        <a href="delet.php?id=<?= $r['id'] ?>" class="btn btn-danger"title="trash"><i class="fa fa-trash"></i></a>
</td> 
</tr> 
<?php } ?>
</tbody>
</table>
<h1 class="text-center">Attend Employee </h1>
<table class="table my-5 text-center" >
        <thead class="table-dark">
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Position</th>
    <th>Department</th>
    <th>Ishere</th>
    <th>Date</th>
    <th>Actions</th>
</thead>
<tbody>
<?php 
include 'conn.php';
$q="SELECT * from employee where ishere = 'yes' ";
$add = $conn->query($q);
foreach($add as $r ){
?>  
 <tr>
    <td><?= $r['id'] ?></td>
    <td><?= $r['name'] ?></td>
    <td><?= $r['age'] ?></td>
    <td><?= $r['email'] ?></td>
    <td><?= $r['position'] ?></td>
    <td><?= $r['department'] ?></td>
    <td><?= $r['ishere'] ?></td>
    <td><?= $r['date'] ?></td> 
    <td>
        <a href="showsingle.php?id=<?= $r['id'] ?>" class="btn btn-primary"title="show"><i class="fa fa-eye"></i></a>
        <a href="" class="btn btn-success"title="edit"><i class="fa fa-edit"></i></a>
        <a href="delet.php?id=<?= $r['id'] ?>" class="btn btn-danger"title="trash"><i class="fa fa-trash"></i></a>
</td> 
</tr> 
<?php } ?>
</tbody>
</table>
</div>

<script>
    $(".a1").fadeOut(2000);
</script>
<?php
session_destroy();
include ("footer.php");
?>