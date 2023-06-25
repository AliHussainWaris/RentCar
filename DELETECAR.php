<?php
    include './Connection/conn.php'
?>
<?php
    $carid = $_COOKIE["carid"];
    $qry = "DELETE FROM cars where carid = $carid";
    $result=mysqli_query($con,$qry);
    if ($result==1) {
	
        header("location:Dashboard.php");
   }
   else{
       echo "Update error";
   }
?>