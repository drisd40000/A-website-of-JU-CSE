

<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
	<div class="header">
		<h3> Register </h3>
    </div>
     <form action="server.php" method="post">
     	
     	<div class="input-group">
     		<label>Username</label>
     		<input type="text" name="username">	
      	</div>
        <div class="input-group">
     		<label>Email</label>
     		<input type="email" name="email">	
     	</div>
                <div class="input-group">
            <label>Registration NO.</label>
            <input type="number" name="regNO">   
        </div>
     	<div class="input-group">
     		<label>Password</label>
     		<input type="password" name="password_1">	
     	</div>
       
        <div class="input-group">
        	<button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
        	Already a member? <a href="login.php">Sign in</a>
        </p>
   

     </form>

	</body>
</html>

