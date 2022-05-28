<!DOCTYPE html>
<html lang="en">

<head>
    <title>Skin 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- angka utama -->
    <div id="container"></div>

    <!-- grafik line chart -->
    <div class="container-fluid">
        <canvas id="myChart"></canvas>
    </div>

    <div class="table">

    </div>

    <?php
    $con = new mysqli('localhost', 'root', '', 'rpl_tubes');
    ?>

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
                    borderColor: 'rgb(75, 192, 192)',
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
        }, Math.floor(Math.random() * 50000));
    </script>
</body>

</html>