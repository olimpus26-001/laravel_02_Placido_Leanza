<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@0,400;0,700;1,400;1,700&family=Wallpoet&display=swap" rel="stylesheet">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- sezione navbar -->
    <nav class="navbar navbar-expand-lg bg-greenBold">
        <div class="container-fluid">
            <img src="/logo navbar.png" alt="logo navbar" class="img-fluid logoNavbar">
            <img src="/bullet.png" alt="btn collapse" id="bullet" class="navbar-toggler img-fluid logo" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav flex-row justify-content-around">
                    <a class="nav-link text-yellow" href="{{route('homepage')}}">Home</a>
                    <a class="nav-link text-yellow" href="{{route('aboutUs')}}">chi siamo</a>
                    <a class="nav-link text-yellow" href="{{route('services')}}">servizi</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- fine sezione navbar -->

    <!-- sezione header -->
    <header class="container-fluid header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 d-flex justify-content-center">
                    <h1 class="display-2 text-center title">BENVENUTI NEL PIU' BEL SITO DI ARMI!</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- fine sezione header -->

    <!-- sezione footer -->
    <footer class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-4">
                <h3>Social</h3>
                <ul>
                    <li>facebook</li>
                    <li>youtube</li>
                    <li>instagram</li>
                    <li>tik-tok</li>
                </ul>
            </div>
            <div class="col-4">
                <h3>contatti</h3>
                <ul>
                    <li>telefono: 345-6787654</li>
                    <li>e-mail: guns-rifle-@mail.com</li>
                    <li>indirizzo: via dei santi 777 (las vegas)</li>
                    <li>addetto uffici: Doraeomn thecat</li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- fine sezione footer -->



    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- js custom -->
     <script src="{{asset('js/welcome.js')}}"></script>

</body>

</html>