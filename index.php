<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <title>My movies</title>
</head>
<body class="container-fluid">
    <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-film"></i> My Movies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/create.php">Publier un film</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    </header>

    <!--Title-->
    <h1>My movies</h1>

    <h3>Découvrez et partagez vos films!</h3>
    <img class="logo" src="images/logo.jpg" alt="logo film">

    <!--card movie-->
    <div class="card" style="width: 18rem;">
        <img src="https://sadfran.files.wordpress.com/2018/07/87e99eb0661a04d5350105727ac3be23.jpg" class="card-img-top" alt="affiche du film avatar">
        <div class="card-body">
            <h5 class="card-title">Avatar</h5>
            <p class="card-text">Un film avec des gens bleus.</p>
            <a href="#" class="btn btn-warning"ata-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" title="Modifier"><i class="bi bi-box-arrow-in-down-left"></i></a>
            <a href="#" class="btn btn-danger" ata-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" title="Supprimer"><i class="bi bi-trash"></i></a>

        </div>
    </div>

    <!--card movie-->
    <div class="card" style="width: 18rem;">
        <img src="https://images.affiches-et-posters.com//albums/3/2631/medium/affiche-film-titanic-177.jpg" class="card-img-top" alt="affiche du film Titanic">
        <div class="card-body">
            <h5 class="card-title">Titanic</h5>
            <p class="card-text">Un film avec un bateau qui coule.</p>
            <a href="#" class="btn btn-warning"ata-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" title="Modifier"><i class="bi bi-box-arrow-in-down-left"></i></a>
            <a href="#" class="btn btn-danger" ata-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" title="Supprimer"><i class="bi bi-trash"></i></a>

        </div>
    </div>


    <div>
        <a class="button" href="/views/create.html">Publiez un film</a>
    </div>

    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>