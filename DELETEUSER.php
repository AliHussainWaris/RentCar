<?php
    include './Connection/conn.php'
?>
<?php
    $userid = $_COOKIE["userid"];
    $qry = "DELETE FROM user where userid = $userid";
    $result=mysqli_query($con,$qry);
    if ($result==1) {
	
        header("location:DASHBOARDUSER.php");
   }
   else{
       echo "Update error";
   }
?>