<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="d-flex justify-content-start align-items-center">

    <div class="w-25 vh-100 bg-dark text-white pt-5">
        <div class="w-100 mt-5 ps-3 d-flex flex-column justify-content-between align-items-center lh-1">
            <a href="index.php" class="nav-link w-100 my-2 py-3 ps-2">
                <p class="fs-5">Dashboard</p>
            </a>
            <a href="users.php" class="nav-link w-100 my-2 pt-3 pb-1 ps-4 rounded-start-5 bg-light">
                <p class="fs-5 fw-bold lh-1 text-danger">Daftar User</p>
            </a>
        </div>
    </div>

    <div
        class="overflow-y-auto container w-75 vh-100 d-flex flex-column justify-content-start align-items-center pt-5 px-5">
        <a href="index.php" class="nav-link">
            <h1 class="bg-dark text-white rounded-5 px-3 pb-2 fw-bold display-5 mb-4">
                Data<span class="text-danger">Row</span>
            </h1>
        </a>

        <div class="w-100 h-auto d-flex justify-content-between align-items-center mb-3 px-5">
            <div class="d-flex justify-content-start align-items-center">
                <img src="http://cdn.onlinewebfonts.com/svg/img_535487.png" alt="" draggable="false" width="20px">
                <span class="h5 ms-3 mt-2 fw-bold">User Database</span>
            </div>
            <a href="create.php" class="btn btn-dark text-white rounded-5 fw-semibold pb-2 pt-1">
                Create New&nbsp;<span class="fw-bold h5">&plus;</span>
            </a>
        </div>

        <table class="w-100">
            <tr class="row w-100 text-center fs-5 shadow py-2 mb-2 rounded-5">
                <th class="col-2">Nama</th>
                <th class="col-2">No Telepon</th>
                <th class="col-3">Alamat</th>
                <th class="col-1">Jabatan</th>
            </tr>
            <?php
            
                $query = "SELECT * FROM pengguna";

                $hasil = mysqli_query($connection, $query);

                $i = 1;
                while($data = mysqli_fetch_assoc($hasil)) {
                
            ?>
            <tbody class="text-dark">
                <tr>
                    <td><?= $data['username']?></td>
                    <td><?= $data['telephone']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['jabatan']?></td>
                    <td id="animate">
                        <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning">Edit</a>
                        <form class="d-inline" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            <?php }; ?>
        </table>
    </div>

</body>

</html>




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