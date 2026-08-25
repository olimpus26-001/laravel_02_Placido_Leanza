<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chi-siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barrio&family=Pangolin&display=swap" rel="stylesheet">
    <!-- swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <!-- custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- sezione navbar -->
    <nav class="navbar navbar-expand-lg bg-green">
        <div class="container-fluid">
            <img src="/logo navbar.png" alt="logo navbar" class="img-fluid logoNavbar">
            <img src="/bullet.png" alt="btn collapse" class="navbar-toggler img-fluid logo bullet" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
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

    <!-- sezione costruttori -->

    <div class="container-fluid mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-10 col-custom">
                <div class="swiper h-100">
                    <div class="swiper-wrapper h-100">
                        @foreach ($staffs as $staff)
                        <div class="swiper-slide h-100">
                            <div class="card h-100 bg-warning d-flex flex-column">
                                <h2 class="head text-center bg-info">{{ $staff['name'] }}</h2>
                                <div class="img d-flex justify-content-center h-75 bg-white">
                                    <img class="img-fluid img-custom" src="{{ $staff['img'] }}" alt="immagine staff">
                                </div>
                                <p class="texter ms-5 bg-warning">"{{ $staff['role'] }}"</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- fine sezione costruttori -->

    <!-- sezione footer -->
    <footer class="container-fluid f-custom mt-2 bg-green">
        <div class="row justify-content-around">
            <div class="col-10 col-md-4 card-footer1 mt-2">
                <h3 class="text-center">Social</h3>
                <ul class="ul">
                    <li><i class="bi bi-facebook"></i> facebook</li>
                    <li><i class="bi bi-youtube"></i> youtube</li>
                    <li><i class="bi bi-instagram"></i> instagram</li>
                    <li><i class="bi bi-tiktok"></i> tik-tok</li>
                </ul>
            </div>
            <div class="col-10 col-md-4 card-footer2 mt-2">
                <h3 class="text-center">contatti</h3>
                <ul class="ul">
                    <li><i class="bi bi-telephone"></i> 345-6787654</li>
                    <li><i class="bi bi-envelope-at"></i> games@mail.com</li>
                    <li><i class="bi bi-geo-alt"></i> via dei santi 777 (las vegas)</li>
                    <li><i class="bi bi-person"></i> Doraeomn thecat</li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- fine sezione footer -->

    <!-- swiper JS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- js custom -->
    <script src="{{asset('js/aboutUs.js')}}"></script>

</body>

</html>