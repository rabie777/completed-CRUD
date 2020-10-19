<?php
include 'index.php';
include 'database.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$obj=new connect();
//$obj->getuserid($_GET['id']);
?>

<?php

if(isset($_POST['submit']))
$obj->update($_POST['fname'],$_POST['lname'],$_POST['class'],$_POST['pass'],$id);
?>



<form action="<?php echo $_SERVER['PHP_SELF']?>" method="posts">


    <label for="inputAddress">First name</label>
    <input type="text" name="fname" class="form-control" id="inputAddress" placeholder="first name">


    <label for="inputAddress">Last Name</label>
    <input type="text" name="lname" class="form-control" id="inputAddress" placeholder="last name">




      <label  >class</label>
      <input    name="class" class="form-control" id="inputEmail4">


      <label for="inputPassword4">Password</label>
      <input type="password" name="pass" class="form-control" id="inputPassword4">




<div class="form-row col-md-6">
  <button type="submit" name="submit" class="btn btn-primary">update</button>
</div>
</form>
