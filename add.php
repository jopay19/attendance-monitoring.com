<?php

if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['birthday']) ||
isset($_POST['gender']) || isset($_POST['department']) || isset($_POST['section'])){
  
   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
   $birthday=$_POST["birthday"];
   $gender=$_POST["gender"];
   $position=$_POST["department"];
   $salary=$_POST["section"];
 
   $file=fopen("addbackup.txt", "a");
      
     fwrite($file, "Firstname :");
   fwrite($file, $firstname."\n");
   fwrite($file,"Lastname :");
   fwrite($file,$lastname."\n");
   fwrite($file,"Birthday :");
   fwrite($file,$birthday."\n");
   fwrite($file,"Gender :"); 
   fwrite($file,$gender."\n");
   fwrite($file,"Department :");
   fwrite($file,$position."\n");
   fwrite($file,"Section :");
   fwrite($file,$salary."\n");
  
   fclose($file);

}









include_once("connections/connection.php");
 $con = connection();
 
 if(isset($_POST['submit'])){

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $bday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $department =$_POST['department'];
        $section=$_POST['section'];

  $sql = "INSERT INTO `list`(  `first_name`, `last_name`,`birth_day`, `gender`, `department`, `section`) 
    VALUES ('$fname','$lname','$bday','$gender' , '$department', '$section')";
    $con->query($sql) or die ($con->error);

    echo header("Location: index.php");

 }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widthdevice-width, initial-scaled+1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Attendance Monitoring System</title>
        <link rel="stylesheet" href="css/style.css">
       
</head>
<body id="bgform">
        <div class="add-container">

 <form action="" method="post">
            <label>First name</label>
        <input type="text" name="firstname" id="firstname" required placeholder="Enter Firstname">
    
        <label>Last name</label>
        <input type="text" name="lastname" id="lastname" required placeholder="Enter Lastname">

        <label>Birthday</label>
        <input type="text" name="birthday" id="birthday" required placeholder="Enter your Birthday MM/DD/YYYY">
        
        <label>Department</label>
        <select name="department" id="department">
            <option value="">--Select department--</option>
            <option value="BSIT">BSIT</option>
            <option value="BSHM">BSHM</option>
            <option value="BSBA">BSBA</option>
            <option value="BEED">BEED</option>
            <option value="ENGINEERING">ENGINEERING</option>
          
          </select>
        
        <label> Section </label>
        <select name="section" id="section">
            <option value="">--select section--</option>
            <option value="1A">3A</option>
            <option value="3B">3B</option>
            <option value="3C">3C</option>
            <option value="3D">3D</option>
</select>

        <label> Gender </label>

        <select name="gender" id="gender">
            <option value="">--select gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gay">Gay</option>
            <option value="Lesbian">Lesbian</option>
         <input type="submit" name="submit" value="Submit Form">
         
 </form>
</div>
 

</body>
</html>