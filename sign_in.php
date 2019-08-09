<?php 
    include_once'signin_details.php';
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>sign_in</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="signup">
        <div class="header">
                <h2>Sign In</h2>
        </div>
        <form  method="post" action="signin_details.php">
           
            <?php if(isset($_SESSION['msg'])):?>
                <div class="input-group">
                    <?php
                        echo $_SESSION['msg'];
                    ?>
                </div>
            <?php endif ?>
            <div class="input-group">
                <p>  User Name</p>
                <input type="text" name="user_name" placeholder="User name">
            </div>

            <div class="input-group">
                <p> Password</p>
                <input type="password" name="confirm_pass" placeholder="password" id="pass" >
            </div>
            
            <div class="input-group">
                <input  type="submit" name="Login" value="Login">
                <input  type="submit" name="cancel" value="Cancel">
            </div>

            <div class="input-group">
               <a href="#">Forget Password</a>
            </div>

            <div class="input-group">
                <a href="#">Create An account</a>
            </div>
		</form>
    </div>
</body>
</html>