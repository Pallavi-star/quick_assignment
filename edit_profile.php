<?php 
    include_once'editprofile_details.php';
    
    
    if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT * FROM users WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $user_name=$record['user_name'];
        $user_mail_id=$record['user_mail_id'];
        //$confirm_pass=$record['confirm_pass'];
        $first_name=$record['first_name'];
        $last_name=$record['last_name'];
        $id=$record['id'];   
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>sign_up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <div class="signup">
        <div class="header">
                <h2>Edit Details</h2>
        </div>
        <form  method="post" action="editprofile_details.php">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="input-group">
                <p>   First Name</p>
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
            </div>  
            <div class="input-group">          
                    <p>   Last Name</p>
                    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
            </div>
            <div class="input-group">
                <p>  User Name</p>
                <input type="text" name="user_name" placeholder="User name" value="<?php echo $user_name; ?>">
            </div>

            <div class="input-group">
			    <p> Email</p>
                <input type="email" name="user_mail_id" placeholder="Email Id" value="<?php echo $user_mail_id; ?>">
            </div>

           
            <div class="input-group">
			    <p>  Password</p>
                <input type="password" name="confirm_pass" placeholder="Password" id="cnfirm_pass" value="<?php echo ""; ?>">
            </div>
            
           
            <div class="input-group">
                <input  type="submit" name="update" value="Update" >
                <input  type="submit" name="cancel" value="Cancel" >
            </div>

            
		</form>
    </div>
   
</body>


</html>