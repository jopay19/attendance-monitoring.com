<?php

   $conn=mysqli_connect("localhost","root","12345","monitoringsystem");



                                 

  if(!$conn){

    die('<p>Sorry connection lost with server.</p>');

  }

  $sql = "SELECT * FROM captcha order by rand() limit 1";

  $ret=mysqli_query($conn,$sql);



  if(mysqli_num_rows($ret) > 0){

    while($row = mysqli_fetch_assoc($ret)){

     $i=$row['i'];
     $one=$row['1'];
      $two=$row['2'];
       $three=$row['3'];
        $four=$row['4'];
         $five=$row['5'];
          $six=$row['6'];
           $seven=$row['7'];
            $eight=$row['8'];
             $nine=$row['9'];
             $a=$row['ans'];
             $hint=$row['hint'];

             $folder=$row['folder'];
             session_start();
            $_SESSION['ans']=$a;

      

    }  

  }                                                                                                                                

  else{

    echo mysqli_error($conn);

    echo "<div class='about_us'><div class='about_us_head'>
    <h4>Error Occured</h4>
    </div><div class='about_us_body'>
    <p>Your Credentials are incorrect.</p>
    </div>
    </div>";

  }



mysqli_close($conn);                  

?>      