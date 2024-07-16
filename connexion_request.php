<?php
    include('connect_db.php');
    
?>
<?php
  header('accueil.php');
    if(isset($_REQUEST['valider'])){

    $user=$_POST['username'];
    $pwd=$_POST['password'];
    // session_start();
    // $_SESSION['user']=$user;
    // $_SESSION['pwd']=$pwd;
    $search=mysqli_query($conn,"SELECT username,password FROM users");

    while($ligne=mysqli_fetch_array($search)){

    if($ligne['username']==$user && $ligne['password']==$pwd){
      header('location:accueil.php');
      exit();
    }

    
  }
  echo "<br>"."Mot de passe incorrect"."<br>";
}
?>