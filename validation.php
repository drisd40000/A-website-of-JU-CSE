<?php
session_start();
$name=$_POST['username'];
$pass=$_POST['password_1'];

$con=mysqli_connect('localhost','root','','registration');


$q="select* from users where username='$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{

$_SESSION['username']=$name;
header('location:home.php');


}



else{

   header('location:login.php');
	
}


$sql="select regNo from users where password='$pass'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
  
  {
   
   while( $row = mysqli_fetch_row($res) )

{
	
$_SESSION['regNO']=$row[0];
}
}

mysqli_close($con);
?>
