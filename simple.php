<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Interest</title>
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>

  <style>
        :root {
            --bg-primary: #1E3A8A;
            --bg-secondary: #E5E7EB;
            --bg-tertiary: #FACC15;
            --bg-accent: #78B7D0;
            --text-primary: #F3F4F6;
            --text-secondary: #131212;
        }

        .container {
            padding: 24px;
            background-color: var(--bg-secondary);
            border-radius: 8px;
            color: var(--text-secondary);
            max-width: 500px;
        }

        nav {
            padding: 32px 88px;
            margin-bottom: 48px;
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }

        nav ol li a,
        .breadcrumb a,
        .breadcrumb-item.active,
        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--text-primary);
        }

        img {
            width: 160px;
        }

        .form-label {
            font-weight: 600;
        }

        .btn {
            background-color: var(--bg-tertiary);
            color: var(--text-primary);
        } 

        .btn:hover,
        .btn:active {
            border-color: var(--bg-tertiary);
            background-color: #ecbe04;
            color: var(--text-primary);
        }

        select {
            background-color: var(--bg-primary) !important;
            color: var(--text-primary) !important;
        }

        .card-custom {
            background-color: var(--bg-accent);
            color: var(--text-primary);
            text-align: justify;
        }
    </style>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php#home">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="index.php#tools">Tools</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Simple Interest
            </li>
        </ol>

        <div class="d-flex justify-content-between align-items-center">
            <h3>Simple Interest</h3>
            <img src="img/card-1.png" alt="" class="img-fluid flex-end">
        </div>
    </nav>

    <div class="d-flex justify-content-center">
        <h5 class="text-start fw-bold">Use this calculator to calculate the final capital of a simple interest.</h5>
    </div>

    <div class="container shadow-sm my-5 py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-group mb-4">
                        <label for="modal" class="form-label">Initial capital</label>
                        <input type="number" name="modal" class="form-control" value="0" required>
                    </div>

                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="bunga" class="form-label">Interest rate</label>
                                <input type="text" name="bunga" class="form-control" value="0" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">&nbsp;</label> 
                                <select name="periode-bunga" id="periode-bunga" class="form-select" required>
                                    <option value="Years">Years</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quarterly">Quarterly</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="col-md-6">
                            <label for="periode" class="form-label">Time period</label>
                            <input type="text" name="periode" class="form-control" value="0" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">&nbsp;</label> 
                            <select name="cakrawala-waktu" id="cakrawala-waktu" class="form-select" required>
                                <option value="Years">Years</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="hitung" class="btn fw-semibold w-100 mb-4">Calculate</button>
                </form>

                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hitung"])) {
                    $modal = $_POST["modal"];
                    $bunga = $_POST["bunga"] / 100; 
                    $periode = $_POST["periode"];
                    
                    $periodeBunga = isset($_POST["periode-bunga"]) ? $_POST["periode-bunga"] : null;
                    $cakrawalaWaktu = isset($_POST["cakrawala-waktu"]) ? $_POST["cakrawala-waktu"] : null;
                
                    if ($periodeBunga === "Monthly") {
                        if ($cakrawalaWaktu === "Years") {
                            $periode = $periode * 12; 
                        }
                    } elseif ($periodeBunga === "Quarterly") {
                        if ($cakrawalaWaktu === "Years") {
                            $periode = $periode * 4; 
                        }
                    }
                
                    if (!empty($modal) && !empty($bunga) && !empty($periode)) {
                        $hasil = $modal * $bunga * $periode; 
                        $modalAkhir = $modal + $hasil; 
                        echo "<div class='card-custom border shadow-sm p-3'>The final amount from simple interest is <b>Rp" . number_format($modalAkhir, 2, ",", ".") . "</b> with interest amounting to <b>Rp" . number_format($hasil, 2, ",", ".") . "</b> </div>";
                    } else {
                        echo "<div class='alert alert-danger'>Please enter valid values for capital, interest rate, and period!</div>";
                    }
                }                
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>