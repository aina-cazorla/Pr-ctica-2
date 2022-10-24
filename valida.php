<?php
// Valida l'usuari i la contrasenya a l'hora d'iniciar la sessió

require_once 'config.php';
require_once 'database.php';

$db = 'annacamps_cv';

$userInput = (isset($_POST['user'])) ? $_POST['user'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";


if (empty($userInput) || empty($password)) {
    header('Location: index.php?error=unfilled');
    exit;
}

$user = seleccionaUsuari($conn, $userInput);
 var_dump($user);


  if (!$user) {
      header('Location: index.php?error=wrongUser');
      exit;
  }

  $passwordCorrect = validaContrasenya($password,$user['password']);
  if($passwordCorrect){
    session_start();
    $_SESSION['user'] = $user;
    header('Location: cv.php');
  } else{
    echo 'Les contrasenyes no són les mateixes';
    header('Location:./index.php?error=3');    
  }

  ?>