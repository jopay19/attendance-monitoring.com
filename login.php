<!DOCTYPE html>
 <?php 
 
 if(!isset( $_SESSION)){
    session_start();
}
if (isset($_POST['submit'])) {
    include_once("connections/connection.php");
    $con = connection();

    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = $con->query("SELECT id, password FROM user WHERE username='$username'");
     
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_array();
        if (password_verify($password, $data['password'])) {
            
           
        
        
            echo header("Location: test.php");
         

        } else
        echo "<div class='warning message'>No user found</div>";
    } else
    echo "<div class='warning message'>No user found</div>";
}
 
 

if(!isset( $_SESSION)){
    session_start();
}
if (isset($_POST['login'])) {
    include_once("connections/connection.php");
    $con = connection();

    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = $con->query("SELECT id, password FROM useracc WHERE username='$username'");
     
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_array();
        if (password_verify($password, $data['password'])) {
            
             
        
        
            echo header("Location:indexuser.php");
         

        } else
        echo "<div class='warning message'>No user found</div>";
    } else
    echo "<div class='warning message'>No user found</div>";
}




 
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/login.css">
    </head>
    
    <body id="bgform">
<div class="container login-container">
<div class="row"><h4> </h4></div>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>User Login</h3>
                    <form action=" " method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username"placeholder="Your username *"  />
                        </div>
                        <Label style="color:red"> </label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" required  placeholder="Your Password *"  />
                        </div>
                        <Label style="color:red"> </label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="login" id="login" value="Login" />
                            <br>
                            <a href="registeruser.php" class="ForgetPwd" value="Login">Register?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">


                    <h3>Admin Login</h3>
                    <form action=" " method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Your username *"  />
                        </div>
                        <Label style="color:red"> </label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" required id="password" placeholder="Your Password *" />
                        </div>
                        <Label style="color:red"> </label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="submit" id="submit" value="Login" />
                            <br>
                             
                        </div>
                        <div class="form-group">

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>



        



        <script src="" async defer></script>
    </body>
</html>