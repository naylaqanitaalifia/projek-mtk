<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">InterestCalc</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tools">Tools</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <!-- <div class=""> -->
      <div class="home-section container d-flex justify-content-between">
        <div class="row">
            <div class="home-left col-md-6 my-auto">
                <div class="home-text">
                    <h1 class="fw-bold">Welcome to InterestCalc! </h1>
                    <p>Calculate simple and compound interest easily. Choose an option below to start your financial journey and find out how much money you can make!</p>
                </div>
                <div class="home-button">
                    <a href="#tools" class="btn btn-primary fw-semibold">Get Started <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="home-right col-md-6">
                <img src="img/home.png" alt="" class="img-fluid">
            </div>
        </div>
      </div>

      <div class="cards-section">
        <div class="container">
          <h1 class="text-center mb-4" id="tools">Tools</h1>
          <div class="row">
            <!-- Simple Interest -->
            <div class="col-md-6 mb-4">
              <div class="card">
                <img src="img/card-1.png" class="card-img-top mt-4" alt="...">
                <div class="card-title d-flex justify-content-between">
                  <a href="simple.php" class="fw-semibold text-reset ms-4">Simple Interest <i class='bx bx-right-arrow-alt'></i></a>
                </div>
              </div>
            </div>
            <!-- Compound Interest -->
            <div class="col-md-6 mb-4">
              <div class="card">
                <img src="img/card-2.png" class="card-img-top mt-4 " alt="...">
                <div class="card-title d-flex justify-content-between">
                  <a href="compound.php" class="fw-semibold text-reset ms-4">Compound Interest <i class='bx bx-right-arrow-alt'></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- </div>  -->
  </main>

  <footer class="py-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-6 col-md-2 mb-3">
          <h5>Quick Link</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#home" class="nav-link p-0">Home</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#tools" class="nav-link p-0">Tools</a>
            </li>
          </ul>
        </div>

        <div class="col-6 col-md-4 mb-3">
          <h5>Contact Us</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0">
                <i class='bx bx-envelope'></i> interestcalc@gmail.com
              </a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0">
                <i class='bx bx-phone'></i> +62 812-3456-7890
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
        <p>&copy; 2024 Nayla Qanita Alifia || All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-2">
            <a class="display-6" href="#"><i class='bx bxl-twitter'></i></a>
          </li>
          <li class="ms-2">
            <a class="display-6" href="#"><i class='bx bxl-instagram'></i></a>
          </li>
          <li class="ms-2">
            <a class="display-6" href="#"><i class='bx bxl-facebook'></i></a>
          </li>
        </ul>
      </div>
    </div>
  </footer>


    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>