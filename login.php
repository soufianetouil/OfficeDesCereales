
<?php

if (isset($_POST['username']) && isset($_POST['pwd'])){
   if ($_POST['username'] =="root" && $_POST['pwd']=="secret")){
       header( header: "location:home.php");
} else {
      $errorMessage = "veuiller vérifier vos credentials";
      header( header: "location:login.php?errorMessage=$errorMessage");
}
} else{
      $errorMessage = "veiller renseigner le login et le mot de passe";
      header( header: "location:login.php?errorMessage=$errorMessage");
}



