<?php
session_start();
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password_1'];
$reg=$_POST['regNO'];

$con=mysqli_connect('localhost','root','','registration');


$q="select* from users where username='$name' && password='$pass' && regNo='$reg'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
echo"duplicate data";
else{


	$qy="insert into users(id,username,email,password,regNo) values (null,'$name','$email','$pass','$reg')";
$res = mysqli_query($con,$qy);
header('location:home.php');

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
