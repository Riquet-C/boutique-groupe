<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>
<header>
    <!-- resources/views/partials/header.blade.php -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Boutons à gauche -->
            <div class="d-flex">
                <a class="nav-link" href="<?php echo e(url('/product')); ?>">Product</a>
                <a class="nav-link" href="<?php echo e(url('/product/{id}')); ?>">Produit spécifique</a>
            </div>

            <!-- Titre centré -->
            <a class="navbar-brand mx-auto" href="#" style="position: absolute; left: 50%; transform: translateX(-50%);">PetsLife</a>

            <!-- Barre de recherche et bouton Panier à droite -->
            <div class="ml-auto d-flex align-items-center">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a class="nav-link" href="<?php echo e(url('/cart')); ?>">Panier</a>
            </div>
        </div>
    </nav>

</header>


<body class="min-vh-100">
{{$content}}
</body>


<footer>
    <!-- Copyright -->
    <div class="fixed-bottom text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright
    </div>
    <!-- Copyright -->
</footer>
</html>
<?php /**PATH C:\wamp64\www\projetgroupe\boutique-groupe\resources\views/components/header.blade.php ENDPATH**/ ?>
