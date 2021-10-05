<!DOCTYPE html>
<html>
<head>
  <title>welcome</title>
  <link rel="stylesheet" type="text/css" href="homestyle.css">
  </head>
  <body>
<div class="container">
    <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
    <li><a href="course.php">Courses</a></li>
  <li><a href="result.php">See result</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right"><a href="login.php">Logout</a></li>
    </ul>
      </div> 
      <br>
      <br>
      <br>
    </body>
    </html>
<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","calender");


// create and execute query

$sql = "SELECT * FROM calender";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<caption style="color:blue;font-size:30px;"><b>Academic Calender<b></caption>';   

   echo '<tr><td bgcolor="ForestGreen"><b>SL No.</b></td><td bgcolor="ForestGreen"><b>Date</b></td><td bgcolor="ForestGreen"><b>Description</b></td></tr>';

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

  echo 'NO records found!';

 }


mysqli_free_result($res);

mysqli_close($con);  // logout from db
?> 