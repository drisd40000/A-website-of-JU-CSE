<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    
   
   
</head>

<body>


                    
    <div class="header">
        <h3> Login </h3>
    </div>
     <form action="validation.php" method="post">
    <br>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username"> 
        </div>
        
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">   
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <br>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
   

     </form>

                    
        




</body>
</html>