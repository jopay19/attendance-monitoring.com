<?php
     if(!isset( $_SESSION)){
        session_start();
    }
   
    

include_once("connections/connection.php");
 $con = connection();

 
$sql = "SELECT * FROM list ORDER BY id DESC";
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
<body id="bgform">
        <div class="wrapper">
            
 
<marquee> <h1>STUDENT MONITORING SYSTEM </h1></marquee> 
<br/>
<br/>       
                <div class="search-container">
                    <form action="userresult.php" method="GET">
                <input type="text" name="search" id= "search" class="search-input" required placeholder="Search">
                <button type="submit" class="search-button" >Search</button>  
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
           <th>Department</th>
           <th> Section</th>
           <th> Added at</th>
          
          
    </tr> 
</thead> 
<tbody>
    <?php do{ ?>
<tr>
        <td></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['birth_day']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['section']; ?></td>
        <td><?php echo $row['added_at']; ?></td>
</tr>
<?php  }while($row = $students->fetch_assoc()); ?>
</tbody>
</table>
 
    </div>
    <div class="button-container">


    
<a href="logout.php">Logout</a>
 
 
 
</div> 
</body>
</html>