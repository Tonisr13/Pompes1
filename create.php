<?php
include('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add | Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <?php
        include('connection.php');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        </div>
    </nav>
    <div class="container-fluid">
        <div class="col-10 mx-auto my-5">

            <h2 class="text-center fw-bold text-white my-5">Add | Karyawan</h2>
            <div class="col-md-8 mx-auto p-5 shadow p-3 mb-5 bg-white rounded">
                <form action="create_process.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input name="username" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                        <input name="telephone" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-3 m-auto">
                        <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                    </div>
                    <div>
                        <a href="admin.php" class="btn btn-primary btn-lg" style="margin-left: 35em;">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>





</body>

</html>