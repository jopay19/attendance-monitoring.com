 <?php 
 if(isset($_SESSION['username'])){
    header("Location: register.php");

}
    
    include_once("connections/connection.php");
 $con = connection();
   
 if(!isset( $_SESSION)){
    session_start();
}
$sql = "SELECT * FROM list ORDER BY id DESC";
$students = $con ->query($sql) or die ($con->error);
$row = $students->fetch_assoc();
 
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Monitoring System</title>
    <link rel="stylesheet" href="css/home.css">
</head>
 <style>
     body{
    background-image: url('img/bodybg.png');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: 100% 120%;
   
    
}
     </style>
<body >
   
   <div class="wrapper">
<!--NAVIGATION-->
       <nav>
          <img class="logo" src="img/logo.png" class="img" alt="logo"> 
          <ul>
              <li><a href="index.php">ATTENDANCE</a></li>
              
              <li><a href="#">COURSES</a></li>
              
              <li><a href="#">MISSION & VISION</a></li>
              <li><a href="#">EVENTS</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">PAGES</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="register.php">REGISTER?</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
          </ul>
       </nav>
<!--END OF NAVIGATION-->
      
      <div class="section">
          <h1>WE ENSURE A BETTER EDUCATION <br> FOR A BETTER WORLD</h1>
          <p> Attendance Monitoring System</p>
          
          <a href="#"><button class="btn-1">GET STARTED</button></a>
<!--FEATURES-->
         <div class="features">
             <button>Learn Online Classes</button>
             <button>NEUST Courses</button>
             <button> Library</button>
             <button>Practical Exposure</button>
         </div>
 
      </div>
 
   </div>
 
   
 
    
</body>
</html>