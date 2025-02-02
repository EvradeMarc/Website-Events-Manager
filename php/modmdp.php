<?php 
session_start(); 
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$oldPassword = $_POST['old-password']; 
$newPassword = $_POST['new-password'];

$conn = new mysqli("localhost", "root", "", "events_manager"); 
if(!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if(password_verify($oldPassword,$password)) {

    $goodNewPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT); 
    try {
        $modifyPassword = "UPDATE users SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($modifyPassword);
        $stmt->bind_param("ss",$goodNewPassword,$email);
        $stmt->execute(); 
    
        $_SESSION['password']=$goodNewPassword;

        header("Location: profil.php");
        exit();
    
    } catch (PDOException $e) {
    echo "Erreur insertion : " . $e->getMessage();
    }
    
} else {
    
    echo "Mot de passe Incorrect";
    header("Location: ../html/modifier_mdp.html");
    exit();
}



$stmt->close();
$conn->close();
}
?>