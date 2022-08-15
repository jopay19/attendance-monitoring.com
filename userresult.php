<?php
     if(!isset( $_SESSION)){
        session_start();
    }
 
include_once("connections/connection.php");
 $con = connection();

     $search = $_GET['search'];

 
$sql = "SELECT * FROM  list WHERE first_name  LIKE '%$search%' || last_name LIKE '%$search%' || department LIKE '%$search%' || section LIKE '%$search%' ORDER BY id DESC";
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
<h1>ATTENDANCE STUDENT MONITORING SYSTEM</h1> 
<br/>
<br/>
            <div class="wrapper">
                        <form action="indexuser.php" method="GET">
                            <div class="button-container">
                    <button type="submit" class="button-danger">Back</button>  

                </form>


 

</div>
<table>
<thead>
    <tr>
            <th></th>
            <th> First name</th> 
           <th> Last name</th>
           <th> Birthday</th>
           <th> Gender</th>
           <th> Added at</th>
           <th>Department</th>
           <th> Section</th>
    </tr> 
</thead> 
<tbody>
    
    <?php do{ ?>
<tr>
        <td> </td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['birth_day']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['added_at']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['section']; ?></td>
</tr>
<?php  }while($row = $students->fetch_assoc()); ?>
</tbody>
</table>
 
    </div>
</body>
</html>