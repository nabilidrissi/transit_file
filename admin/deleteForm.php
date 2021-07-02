<?php

include('dbconnect.php');

    $id=$_GET['sid'];
    
    $qry = "DELETE FROM feuil1 WHERE NOM = '$id'";
   
    $run = mysqli_query($con,$qry);
    header("Location: tables.php");
    
    if($run == true){
        ?>
        <script>
            alert('Data Deleted Successfully');
            window.open('tables.php','self');
        </script>
        <?php
    }

?>