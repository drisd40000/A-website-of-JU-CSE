<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>result</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="homestyle.css">

<link rel="stylesheet" type="text/css" href="resstyle.css">

	</head>
	<body>
		
           <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
    <li><a href="course.php">Courses</a></li>
  <li><a href="result.php">See result</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right"><a href="login.php">Logout</a></li>
    </ul>

    <br>
    <br>
    <div class="container">
    		 <img src="ju/10.png" class="responsive">
    		 
     <h3>Select Semister to Know Your Result</h3>



		<form action="result.php" method="post">
		<select name="semister">
  <option value="first">1-1</option>
  <option value="second">1-2</option>
  <option value="third">2-1</option>
  <option value="fourth">2-2</option>
  <option value="fifth">3-1</option>
  <option value="sixth">3-2</option>
  <option value="seventh">4-1</option>
  <option value="eighth">4-2</option>
</select>
<br>
  <input type="submit" name="submit" value="submit">
</form>
 Hello <?php echo $_SESSION['username']; ?> 
<div>
	</body>
</html>
<?php
$r=$_SESSION['regNO'];
$con=mysqli_connect('localhost','root','','result');
if(isset($_POST['submit']))
{
  if(!empty($_POST['semister']))
 {
    
    if($_POST['semister']=='first')
    {
      $q="select first from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo " Your Result :".$row[0]."<br>";
          }
       }
      
    } 

    else if($_POST['semister']=='second')
    {
      $q="select second from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
      

    } 
else if($_POST['semister']=='third')
    {
      $q="select third from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
       
       
    } 

else if($_POST['semister']=='fourth')
    {
      $q="select fourth from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
      
    } 

else if($_POST['semister']=='fifth')
    {
      $q="select fifth from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
       
    } 

else if($_POST['semister']=='sixth')
    {
      $q="select sixth from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
       
       
    } 

else if($_POST['semister']=='seventh')
    {
      $q="select seventh from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
       
       
    } 

else if($_POST['semister']=='eighth')
    {
      $q="select eighth from result where regNo='$r'";
      $res=mysqli_query($con,$q);
      if(mysqli_num_rows($res)>0)
      {
   
         while( $row = mysqli_fetch_row($res) )
          {
	
           echo "Your Result :".$row[0]."<br>";
          }
       }
       
       
    } 


  }
}
?>