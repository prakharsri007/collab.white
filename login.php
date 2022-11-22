<?php 



  $server="localhost";
  $username ="root";
  $password="";

  $con = mysqli_connect($server,$username,$password);

  if(!$con)
  {
    die("connection to this database failed due to" .
    mysqli_connect_error());
  }
  echo "Success connecting to the db";
   

//    // echo "hello";
//    // $email =$_POST['email'];
//    // $password= $_POST['password'];
//    // echo $email;

?>