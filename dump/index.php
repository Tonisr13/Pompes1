<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
* {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.sidebar {
    top: 60px;
    left: 0;
    bottom: 0;
    width: 350px;
    height: 100vh;
    transition: all 0.3s;
    padding: 20px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #aab7cf transparent;
    box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
    background-color: #fff;

}

.sidebar-nav .nav-link {
    display: flex;
    align-items: center;
    font-size: 20px;
    font-weight: 600;
    color: #4154f1;
    transition: 0.3;
    background: #f6f9ff;
    padding: 10px 15px;
    border-radius: 4px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
}

.sidebar-nav .nav-link.collapsed {
    color: #012970;
    background: #fff;
}

body {
    background-color: #f6f9ff;
}

#myChart {
    background-color: rgba(255, 255, 255, 255);
    backdrop-filter: blur(5px);
}

.card-body {
    width: 15em;
    border-radius: 10px;
}

i bi-person {
    width: 30em;
    font-size: 4em;
}
</style>

<body class="w-100 d-flex justify-content-start align-items-start">
    <aside id="sidebar" class="sidebar">
        <div>
            <img src="logo.png">
            <h1 style="margin-left: 65px; margin-top: -60px; font-size: 3.5em;">Neutral</h1>
        </div>
        <ul class="sidebar-nav" id="sidebar-nav" style="margin-top: 10em;">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid" style="margin-right: 18px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin.php">
                    <i class="bi bi-person" style="margin-right: 18px;"></i>
                    <span>Daftar Karyawan</span>
                </a>
            </li>

            <li class="nav-item" style="margin-top: 29em;">
                <a class="nav-link collapsed" href="login.php">
                    <i class="bi bi-box-arrow-right" style="margin-right: 18px;"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>

    </aside>
    <div class="col-md-9 vh-100 px-5 pt-5">
        <div class="card-body shadow">
            <h5 class="card-title" style="margin-left: 20px;">Jumlah Karyawan</h5>

            <div class="d-flex align-items-center">
                <i class="bi bi-person" style="font-size: 3.5em;"></i>
                <h3 style="margin-left: 35px; margin-top: 15px;">5</h3>
            </div>
        </div>

        <div class="chart-js pt-5">
            <canvas id="myChart" class="w-100 pt-5 text-light rounded-5" width="60" height="30">Your browser does
                not
                support the canvas element.</canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', ],
                datasets: [{
                    label: 'Karyawan ',
                    data: [
                        0,
                        1,
                        2,
                        3,
                        4,
                        5,
                    ],
                    backgroundColor: "blue",
                    borderColor: "rgba(255,193,7,0.2)",
                    fill: false,
                    borderWidth: 1,
                    barThickness: 50
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                title: {
                    display: false,
                    text: "Users Chart"
                },
                tooltips: {
                    mode: "index",
                    intersect: false
                },
                hover: {
                    mode: "nearest",
                    intersect: true
                },
                legend: {
                    labels: {
                        fontColor: "rgba(0,0,0,0.4)"
                    },
                    position: "bottom",
                    align: "end"
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: true,
                            labelString: "Day"
                        },
                        gridLines: {
                            borderDash: [2],
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.3)",
                            zeroLineColor: "rgba(33, 37, 41, 0.3)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: "Value"
                        },
                        gridLines: {
                            borderDash: [2],
                            drawBorder: false,
                            borderDashOffset: [2],
                            color: "rgba(33, 37, 41, 0.2)",
                            zeroLineColor: "rgba(33, 37, 41, 0.15)",
                            zeroLineBorderDash: [2],
                            zeroLineBorderDashOffset: [2]
                        }
                    }]
                }
            }
        });
        </script>

</body>

</html>