<?php

include_once("connections/connection.php");
 $con = connection();
$id = $_GET['ID'];

 $sql = "SELECT * FROM  list WHERE id = '$id'";
 $students = $con ->query($sql) or die ($con->error);
 $row = $students->fetch_assoc();
  





 
 if(isset($_POST['submit'])){

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $bday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $department =$_POST['department'];
        $section =$_POST['section'];


  $sql = "UPDATE list SET first_name = '$fname', last_name = '$lname', birth_day = '$bday', gender = '$gender', department ='$department', section='$section' WHERE id = '$id'";
    $con->query($sql) or die ($con->error);

    echo header("Location: details.php?ID=".$id);

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
<body id="bgform-details">
        <div class="add-container">

 <form action="" method="POST">
            <label>First name</label>
        <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_name'];?>">
    
        <label>Last name</label>
        <input type="text" name="lastname" id="lastname" value="<?php echo $row['last_name'];?>">

        <label>Birthday</label>
        <input type="text" name="birthday" id="birthday" value="<?php echo $row['birth_day'];?>">
        
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
        <select name="section" id="section" value="<?php echo $row['section'];?>">
            <option value="">--select section--</option>
            <option value="1A">3A</option>
            <option value="3B">3B</option>
            <option value="3C">3C</option>
            <option value="3D">3D</option>
</select>
        
        
        
     
        <label> Gender </label>
        <select name="gender" id="gender" value="<?php echo $row['gender'];?>">
            
            <option value="Male"<?php echo ($row['gender'] == "Male")? "selected" : '';?>>Male</option>
            <option value="Female"<?php echo ($row['gender'] == "Female")? "selected" : '';?>>Female</option>
            <option value="Gay"<?php echo ($row['gender'] == "Gay")? "selected" : '';?>>Gay</option>
            <option value="Lesbian"<?php echo ($row['gender'] == "Lesbian")? "selected" : '';?>>Lesbian</option>
         <input type="submit" name="submit" value="Update">
 </form>
 
</div>

</body>
</html>