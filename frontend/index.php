<?php
  $con = new mysqli('localhost', 'root', '', 'rpl_tubes');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visitor Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      .banner-image {
        background-image: url('./Assets/image/jica1.png');
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-5 mx-auto justify-content-center">
      <div class="">
        <a class="" href="index.php">
          <img src="./Assets/image/logo-white.png" alt="Logo" style="width: 200px;"> 
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <div class=""></div>
          <ul class="my-3 navbar-nav row">
            <li class="col-6">
              <a class="nav-item nav-active" href="index.php">Home</a>
            </li>
            <li class="col-6">
              <a class="nav-item" href="about.html">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div>
        <div class="divider1 col"></div>
        <div class="visitor-text text-center">
          <h5 class="text1">Pengunjung yang mengunjungi gedung hari</h5>
          <h5 >
          <?php
            date_default_timezone_set("Asia/Jakarta");
            echo date("l").", ".date("d - m - Y");
          ?>
          </h5>
        </div>
        <div class="content text-center">
          <h1 class="text-white visitor-count" id="container"></h1>
        </div>
        <?php
          /*
          if($data['jml_pengunjung'] <= 60){
            echo'
            <div class="row justify-content-center my-3">
              <div class="col-3 rounded-pill text-center" style="background-color: #8CFF79;">
                <h4 class="py-2" style="color: Black;">Senggang</h4>
              </div>
            </div>';
          }else if($data['jml_pengunjung'] > 60){
            echo'
            <div class="row justify-content-center my-3">
              <div class="col-3 rounded-pill text-center" style="background-color: #FFF281;">
                <h4 class="py-2" style="color: Black;">Normal</h4>
              </div>
            </div>';
          }else if($data['jml_pengunjung'] >= 260){
            echo'
            <div class="row justify-content-center my-3">
              <div class="col-3 rounded-pill text-center" style="background-color: #FF4646;">
                <h4 class="py-2" style="color: white;">Penuh</h4>
              </div>
            </div>';
          }*/
        ?>
        
      </div>
    </div>

    <!-- Main Content Area -->
    <section style="background-color: #595959;">
      <div class="container py-3">
        <!-- STATISTICS -->
        <div class="row justify-content-center my-3">
          <div class="col-4 rounded-pill text-center" style="background-color: #FF4646;">
            <h1 class="py-3" style="color: white;">STATISTICS</h1>
          </div>
        </div>

        <div class="container py-5">
          <div class="d-flex justify-content-center py-3 rounded-3" style="background-color: white;">
            <!-- grafik line chart -->
            <canvas id="myChart"></canvas>
          </div>
          <div class="row justify-content-center py-3" style="color: white;">
            <div class="col-8">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type 
                specimen book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s. 
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
        

        <!-- DATA RECAPS -->
        <div class="row justify-content-center my-3">
          <div class="col-4 rounded-pill text-center" style="background-color: #FF4646;">
            <h1 class="py-3" style="color: white;">DATA RECAP</h1>
          </div>
        </div>
        
        <div class="container py-3">
          <div class="d-flex justify-content-center py-3">
            <img src="./Assets/image/sample-table.png" alt="">
          </div>
          <div class="row justify-content-center py-3" style="color: white;">
            <div class="col-8">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type 
                specimen book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s. 
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- footer -->
    <section style="background-color: #525252;">
      <div class="container">
        <div class="d-flex justify-content-center">
          <a class="my-3" href="index.php">
            <img src="./Assets/image/logo-white.png" alt="Logo" style="width: 120px;"> 
          </a>
        </div>
        <div class="d-flex justify-content-center">
          <a class="my-2 nav-item" href="about.html">About</a>
        </div>
        <div class="d-flex justify-content-center" style="color:white; font-weight: 100;">
          <h6 class="my-3">© 2022, RPL KELOMPOK 2 C2 2020  All rights reserved - Disclaimer & Privacy Policy</h6>
        </div>
      </div>
    </section>

    <!-- Script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function bisa() {
            <?php
            $query = $con->query("SELECT * FROM t_pengunjung");

            foreach ($query as $data) {
                $month[] = $data['waktu_pengunjung'];
                $amount[] = $data['jml_pengunjung'];
            }
            ?>
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("container").innerHTML = this.responseText;
            }

            if (Math.floor(Math.random() * 10) >= 0 && Math.floor(Math.random() * 10) <= 4) { //genap
                xhttp.open("GET", "masuk.php");
                xhttp.send();
            } else {
                xhttp.open("GET", "keluar.php");
                xhttp.send();
            }
            const labels = <?php echo json_encode($month) ?>;
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Pengunjung',
                    data: <?php echo json_encode($amount) ?>,
                    fill: false,
                    borderColor: '#FF4646',
                    tension: 0.1,
                    pointRadius: 0
                }]
            };
            const config = {
                type: 'line',
                data: data,
            };

            var myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        }
        setInterval(function() {
            bisa();
        }, Math.floor(Math.random() * 10000));
    </script>
  </body>
</html>
