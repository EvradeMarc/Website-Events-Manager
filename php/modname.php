<?php 
session_start(); 

$email=$_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$name = $_POST['name']; 

$conn = new mysqli("localhost", "root", "", "events_manager"); 
if(!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

try {
    $modifyName = "UPDATE users SET name = ? WHERE email = ?";
    $stmt = $conn->prepare($modifyName);
    $stmt->bind_param("ss",$name,$email);
    $stmt->execute(); 

    $_SESSION['name']=$name;

    header("Location: profil.php");

} catch (PDOException $e) {
echo "Erreur insertion : " . $e->getMessage();
}

$stmt->close();
$conn->close();
}
?>