<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
    <title>My movies</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-film"></i> My Movies</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Publier un film</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <h1>Publiez un nouveau film</h1>

    <form action="" class="container-fluid w-50" method="post">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" placeholder="Le titre du film" class="form-control">

        <label for="synopsis">Résumé</label>
        <textarea name="synopsis" id="synopsis" placeholder="Le résumé du film" class="form-control" rows="10"
            cols="30"></textarea>

        <label for="imageURL">Image</label>
        <input type="url" name="imageURL" id="imageURL" class="form-control" placeholder="image du film">

        <label for="releaseDate">Date de sortie</label>
        <input type="date" name="releaseDate" class="form-control" id="releaseDate">

        <label for="categry">Catégorie</label>
        <select name="categoryId" id="category" class="form-select">
            <option value="" selected>--Sélectionner une catégorie</option>
            <option value="1">Horreur</option>
            <option value="2">Drame</option>
            <option value="3">Comédie</option>
        </select>

        <input type="submit" value="Publier" class="btn btn-info form-control mt-3">

    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>