<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users | List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>
<style>
body::after {
    content: "";
    background-color: black;
    background-size: cover;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: -1;
}

.container {
    color: white;
}

.card {
    background-color: rgba(255, 255, 255, 0.2);
}

.card input {
    background-color: rgba(255, 255, 255, 0.2);
}
</style>

<body class="bg-dark">
    <div class="container">
        <?php
    include('connection.php');
        $id = $_GET['id'];
        $query = "select * from pengguna where id = '$id'";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
    ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold text-white my-5">Edit | User</h2>
            <div class="col-md-8 mx-auto p-5 shadow p-3 mb-5 bg-white rounded text-dark">
                <form action="edit_process.php" method="post">
                    <input type="hidden" name="id" value="<?= $data['id']?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input name="username" type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php $data['username']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                        <input name="Alamat" type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php $data['telephone']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php $data['alamat']?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php $data['jabatan']?>">
                    </div>
                    <div class="col-3 m-auto">
                        <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                    </div>
                    <div>
                        <a href="index.php"><button class="btn btn-md btn-primary px-5 mt-2"
                                style="margin-left: 30em;">Back</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>

</html>