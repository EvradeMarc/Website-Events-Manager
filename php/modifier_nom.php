<?php 
   session_start();
   $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kun Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/styles.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="../assets/images/logo-company.png" alt=""
                    style="width: 200px" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Inscription</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Connexion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="profil.html">Profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </header>

    <main class="main-profil">
        <section class="container-fluid my-5 pt-5">
            <div class="row-title-profil row text-center">
                <h1 id="profil-title">PROFIL</h1>
            </div>

            <div class="row pt-5">
                <div class="col text-center">
                    <figure id="profil">
                        <img src="../assets/images/profil.png" alt="" />
                    </figure>
                </div>
                <div class="col pt-5">
                    <form action="modname.php" method="post" id="form-modify-name">
                        <label for="name">Nom </label>
                        <br /><input type="text" name="name" id="name" placeholder=" <?php echo $name ; ?>" />

                        <div class="row">

                            <div class="col pt-4">
                                <button class="btn btn-success" id="valider-modify-name">Valider</button>
                            </div>

                            <div class="col pt-4">
                                <a href="profil.php" class="btn btn-primary">Annuler</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-9 pt-4">
                <img src="../assets/images/logo-company.png" alt="" style="width: 200px" />
            </div>
            <div class="col-md-3 pt-3">
                <h6>Localisation & Contact</h6>
                <p>
                    87000,LIMOGES
                    <br />Tél. +33 (0)7 55 59 67 24
                </p>
            </div>
        </div>
    </footer>
</body>

</html>