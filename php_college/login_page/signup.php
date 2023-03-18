<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow" >
                <div class="card-header text-center bg-primary text-white">
                    <h2>Signup Form</h2>
                </div>
                <div class="card-body" >
                    <form action="signup.php" method="POST">
                    <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" id="username" class="form-control" name="username" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="email" id="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required />
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="SIGNUP" name="submit">      
                        
                        <div class="signup-link" align="center"> 
                        Already Registered ? <a href= "login.php">Login</a>
                   
<br>
                        
 <!-- LOGIN FORM -->
<?php
   
   
   #create connection
   $con =mysqli_connect('localhost','root','','php_college');
   
   if(isset($_POST['submit']))
         {  
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query="INSERT INTO login(username,email,password) VALUES ('$username','$email','$password')";
            $run=mysqli_query($con,$query);
   
           //  $sql="select email,password from login where email='$email' and password='$password'";
           //  $result=mysqli_query($con,$sql);
            
            if(($run)>0)
            {
               echo "Signup Succesfully";
            }
            else
            {
               echo "SignUp failed";
            }
   
      }
   ?>
                   
</form>

                </div>
               

            </div>

        </div>

    </div>



</body>
</html>










<!-- <!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Admin login</title>

  <link rel="stylesheet" href="login.css">
  
</head>
<body>
         <div class="loginbox">
         <img src="WhatsApp Image 2022-01-09 at 7.49.05 PM (1).jpeg" class="avatar">
         <h1>Login Here</h1>
         <form>
               <p> Official ID</p>
               <input type="text" name="" placeholder="Enter Official ID">
               <p>Password</p>
               <input type="password" name="" placeholder="Enter Password">
               <input type="submit" name="" value="Login">
               <a href="#">Forgetten Password</a><br><br>
               <a href="#">Don't have an account?</a>
         </form>
         
         </div>
</body>
</html> -->