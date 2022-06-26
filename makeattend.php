 <?php 
include 'conn.php';

  $id = $_GET['id'];
$ishere = $_GET['ishere'];

if($ishere == 'no'){
 $q = "UPDATE  employee SET ishere = 'yes' where id = $id";
 $update=$conn->query($q);
 if($update){
     header("Location: showsingle.php?id=$id");
 }
    }

else {
 $q = "UPDATE  employee SET ishere = 'no' where id = $id";
 $update=$conn->query($q);
 if($update){
    header("Location: showsingle.php?id=$id");
}
    }
?> 