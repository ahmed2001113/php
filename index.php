<?php
include ("header.php");
?>
 <div class="container addData my-5">
<form  action="addemp.php" method="post" enctype="multipart/form-data">
  
<div class="form-group">
    <label for="name"> Name</label>
    <input name="name" type="text" class="form-control" id="name">
  </div><br>
<div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1">
  </div><br>
<div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input name="address" type="text" class="form-control" id="address">
  </div><br>
  <div class="form-group">
    <label for="phone"> Phone</label>
    <input name="phone" type="text" class="form-control" id="phone">
  </div><br>
  <div class="form-group">
    <label for="position"> Position</label>
    <input name="position" type="text" class="form-control" id="position">
  </div><br>
  <div class="form-group">
    <label for="department"> Department</label>
    <select name="department" id="department" class="form-control">
        <option>IT</option>
        <option>HR</option>
        <option>Sales</option>
        <option>Accountent</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="salary"> Salary</label>
    <input name="salary" type="numbers" class="form-control" id="salary">
  </div><br>
  <div class="form-group">
    <label for="age"> Age</label>
    <input name="age" type="numbers" class="form-control" id="age">
  </div><br>
  
  <div class="form-group">

    <label for="gender"> Gender: &nbsp; &nbsp; &nbsp; </label> 
    <input type="radio" name="gender" value="male" id="gender">&nbsp;Male&nbsp; &nbsp;
    <input type="radio" name="gender" value="female" id="gender">&nbsp;Female
  </div><br>
  <div class="form-group">
    <label for="image"> image</label>
    <input name="image" type="file" class="form-control" id="image">
  </div><br>
  <div class="form-group">
    <label for="relationstatus"> Relation Status</label>
    <select name="relationstatus" id="relationstatus" class="form-control">
        <option>Single</option>
        <option>Married</option>
        <option>In Relationship</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="militarystatus">Military Status</label>
    <select name="militarystatus" id="militarystatus" class="form-control">
        <option>Completed</option>
        <option>Waiting</option>
        <option>Exemption</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="hiredate"> Hire Date</label>
    <input name="hiredate" type="date" class="form-control" id="hiredate">
  </div><br>
  <div class="form-group">
    <label for="attendance"> Date of Attendance</label>
    <input name="attendance" type="datetime-local" class="form-control" id="attendance">
  </div><br>
  <button name="submit" type="submit" class="btn btn-primary form-control">Submit</button>
</form>
</div>    

<?php
include ("footer.php");
?>