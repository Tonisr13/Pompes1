<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
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
    color: #012970;
    transition: 0.3;
    background: #fff;
    padding: 10px 15px;
    border-radius: 4px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
}

.sidebar-nav .nav-link.collapsed {
    color: #4154f1;
    background: #f6f9ff;
}

body {
    background-color: #f6f9ff;
}
</style>

<body class="d-flex justify-content-start align-items-center">
    <aside id="sidebar" class="sidebar">
        <div>
            <img src="log.png">
            <h1 style="margin-left: 65px; margin-top: -60px; font-size: 3.5em;">Al - Wibu</h1>
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

    <div class="overflow-y-auto container w-100 vh-100 d-flex items-center flex-column pt-5 px-5">
        <a href="index.php" class="nav-link">
            <h1 class="text-dark rounded-5 px-3 pb-2 fw-bold display-5 mb-4">User <span class="text-warning">List</span>
            </h1>
        </a>
        <div class="w-100 h-auto d-flex justify-content-between align-items-center mb-3 px-5 text-light bg-dark">
            <div class="d-flex align-items-center"><span class="h2 mt-2 fw-bold">User Database</span></div><a
                href="create.php" class="btn btn-primary text-white rounded-5 fw-semibold pb-2 pt-1">Create New&nbsp;
                <span class="fw-bold h5">&plus;
                </span></a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            </tr><?php $query="SELECT * FROM pengguna";

$hasil=mysqli_query($connection, $query);

$i=1;

while($data=mysqli_fetch_assoc($hasil)) {

    ?><tr class="text-dark">
                <td><?=$data['username']?></td>
                <td><?=$data['telephone']?></td>
                <td><?=$data['alamat']?></td>
                <td><?=$data['jabatan']?></td>
                <td><a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning">Edit</a>
                    <form class="d-inline" action="delete.php" method="post"><input type="hidden" name="id"
                            value="<?= $data['id']?>"><button class="btn btn-danger">Delete</button></form>
                </td>
            </tr><?php
}

?>
        </table>
    </div>
</body>

</html>