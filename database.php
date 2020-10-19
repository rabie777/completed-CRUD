<?php
class connect{
  private $servername="localhost";
  private $username="root";
  private $password="";
  private $con="mysql:host=localhost;dbname=school";
  private $check;

  function __CONSTRUCT(){
    try {
        $this->check=new PDO($this->con,$this->username,$this->password);
        //echo "connected successfully";
    }
     catch (PDOException $e ) {
      echo "connection faild".$e->getMessage();;
    }
  }
// insert data
function insert_data($fname,$lname,$class,$password)
{
  $sql="INSERT INTO students(fname,lname,class,password)
   VALUES (:fname,:lname,:class,:password)";
   $stmt=$this->check->prepare($sql);
   $stmt->execute(['fname'=>$fname,'lname'=>$lname,'class'=>$class,'password'=>$password]);
   return true;
}
//read data
public function read()
{
$data=array();
$sql="select * from students";
$stmt=$this->check->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $value) {
$data[]=$value;
}
return $data;
}
//






//selsect specific //
public function getuserid($id)
{
$sql="select * from students where id=:id";
$stmt=$this->check->prepare($sql);
$stmt->execute(['id'=>$id]);
$result=$stmt->fetch(PDO::FETCH_ASSOC);
return $result;
}
//delete
public function delete($id)
{
  $sql="DELETE FROM students WHERE id=:id";
  $stmt=$this->check->prepare($sql);
  $stmt->execute(['id'=>$id]);
  return true;
}
//update
function update($fname,$lname,$class,$password,$id)
{
  try{
$sql="UPDATE students SET fname=:fname,lname=:lname,class=:class,password=:password WHERE id=:id";
$stmt=$this->check->prepare($sql);
$stmt->execute(['fname'=>$fname,'lname'=>$lname,'class'=>$class,'password'=>$password,'id'=>$id]);
}
 catch (PDOException $e ) {
  echo "connection faild".$e->getMessage();;
}

}

//row Countable

public function cou()
{
$sql="select * from students";
$stmt=$this->check->prepare($sql);
$stmt->execute();
$res=$stmt->rowCount();
  return $res;
}


}



?>
