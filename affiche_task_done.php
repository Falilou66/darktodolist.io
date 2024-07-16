<?php
include('connect_db.php');
?>
<?php

    $select=mysqli_query($conn,"SELECT * FROM tache_fait");

    while($ligne=mysqli_fetch_array($select)){
        echo $ligne['description']."--".$ligne['la_date']."<br>"."<br>";
    }
        
?>