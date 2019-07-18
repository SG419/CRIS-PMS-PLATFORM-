<?php
$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="test";
$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if($conn)
{
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $sql="select password from demo_tb where username='$user'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res))
        {
          $x=mysqli_fetch_assoc($res);
          if($x['password']===$pass)
          {
            echo "You have sucessfully logged in";
          }
          else
          {
            header("Location:index.php"); 
            echo "Please enter correct password";
          }
        }
        else
        {
        
            header("Location:index.php");
        }
    }
}
?>