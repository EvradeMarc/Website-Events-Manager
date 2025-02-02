<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        /*Code connexion à la BD et renvoi message d’erreur si échec. */ 
        
        $conn = mysqli_connect("localhost","root","","events_manager");

        if(!$conn) {
            die("Erreur de connexion : " . mysqli_connect_error());
        }


        /*try {
            $conn = new PDO("mysql:host=localhost;dbname=events_manager", "root", "");
            echo "Connexion reussi";
            } catch (PDOException $e) {
            echo  "Erreur de connexion : " . $e->getMessage();
            }
        */
        

        /* Requête préparée pour insérer les données dans la BD. En cas de succès rediriger vers la page 
        login.html, sinon, renvoi message d’erreur. */ 
        try {
           $insertSql = "INSERT INTO users (name,email,password) VALUES (?, ?, ?)";
           $stm = $conn->prepare($insertSql);
           $stm->bind_param("sss",$name, $email, $password);
           $stm->execute(); 
           header("Location: ../html/login.html");
           exit();
        } catch (PDOException $e) {
            echo "Erreur insertion : " . $e->getMessage();
        }
 
        $conn->close(); 
    } 
?>