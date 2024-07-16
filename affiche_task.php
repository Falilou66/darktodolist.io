<html>
    <link rel="stylesheet" href="affiche_task.css">
<?php
include('connect_db.php');
?>
<form action="" method="post">
<?php
    $select=mysqli_query($conn,"SELECT * FROM tache");

    while($ligne=mysqli_fetch_array($select)){
        $desc=$ligne['description'];
        $date=$ligne['la_date'];
        // echo $ligne['description']."--".$ligne['la_date']." <input type='submit' name='fait' value='Fait' style='background:#0f0'>"."<br>"."<br>";
        echo "<div class='une_tache'>";
        
        echo "<div class='desc'>".$ligne['description']."</div>"."<div class='descc'>"." <a href='migre.php?desc=$desc&&date=$date'>fait</a>"."</div>";

        echo "<i>".$ligne['la_date']."</i>";
        echo "</div>";
    }
    // while($ligne=mysqli_fetch_array($select)){
        
    // }


?>
</form>
</html>