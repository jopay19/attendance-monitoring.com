<?php
  if(!isset( $_SESSION)){
    session_start();
}
 

include_once("connections/connection.php");
 $con = connection();

     $id = $_GET['ID'];

 
$sql = "SELECT * FROM list WHERE id = '$id'";
$students = $con ->query($sql) or die ($con->error);
$row = $students->fetch_assoc();
 
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


    <h1>STUDENT DETAILS</h1>
 

    <div class="wrapper">
           
            

            <form action = "delete.php" medthod = "POST">
                <div class="button-container">
            <a href="edit.php?ID=<?php echo $row['id']; ?>">Update</a>
             <a href= "index.php">Back</a>
                <button type ="submit" name="delete" class="button-danger">Delete</button>
                <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
            </form>
</div>
            <img class="image-details"src="img/logo1.png" alt="">
    <table>
    <thead>
    <tr>
           
        <th> First name</th> 
           <th> Last name</th>
           <th> Birthday</th>
           <th> Section</th>
           <th>Department</th>
           <th>Section</th>
    </tr> 
</thead> 


<tbody>
<tr>
       
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['birth_day']; ?></td>
        <td> <?php echo $row['gender']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['section']; ?></td>
         
</tr>

</h2>

</table>
</div>
</body>
</html>

 
 
