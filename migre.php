<?php
    include('connect_db.php');
?>
<?php
    echo $_REQUEST['desc'];
    echo $_REQUEST['date']; 
    $a=$_REQUEST['desc'];
    $b=$_REQUEST['date']; 

    $inserer=mysqli_query($conn,"INSERT INTO tache_fait VALUES('$a','$b')");
    $delete=mysqli_query($conn,"DELETE FROM tache WHERE description='$a'");

    header('location:accueil.php');
?>