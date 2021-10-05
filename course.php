<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>result</title>

<link rel="stylesheet" type="text/css" href="homestyle.css">
<style>
.center{
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
  
}
</style>
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
    <br>
    <form action="course.php" method="post">
    <div class="center">
     <h3 style="color:green">Select Semister to Know about courses</h3>
		
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

  <input type="submit" name="submit" value="submit">
</div>
</form>


  <br>
	</body>
</html>
<?php

$con=mysqli_connect('localhost','root','','courses');
if(isset($_POST['submit']))
{
  if(!empty($_POST['semister']))
 {
    
    if($_POST['semister']=='first')
    {
$sql = "SELECT * FROM first";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>First Year First Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }
          

else if($_POST['semister']=='second')
    {
$sql = "SELECT * FROM second";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>First Year Second Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }


    else if($_POST['semister']=='third')
    {
$sql = "SELECT * FROM third";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Second Year First Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }
    else if($_POST['semister']=='fourth')
    {
$sql = "SELECT * FROM fourth";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Second Year Second Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }
 


  else if($_POST['semister']=='fifth')
    {
$sql = "SELECT * FROM fifth";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Third Year First Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }


     else if($_POST['semister']=='sixth')
    {
$sql = "SELECT * FROM sixth";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Third Year Second Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }


     else if($_POST['semister']=='seventh')
    {
$sql = "SELECT * FROM seventh";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Fourth Year First Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }

     else if($_POST['semister']=='eighth')
    {
$sql = "SELECT * FROM eighth";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Fourth Year Second Semister<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>Course Code</b></td><td bgcolor="ForestGreen"><b>Course Title</b></td><td bgcolor="ForestGreen"><b>Credit</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo "NO records found!";

 }     

    }

  }
}

?>