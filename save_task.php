<?php
    include('connect_db.php');
?>

<?php
    if(isset($_REQUEST['valider'])){
    $text=$_POST['description'];
    $la_date=$_POST['la_date'];

    $inserer=mysqli_query($conn,"INSERT INTO tache VALUES('$text','$la_date')");
    header('location:accueil.php');
}
?>