<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color: #FFE6CD;">
    <div class=" caa container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="register_process.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input name="username" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-label">Kelamin</label>
                        <select name="kelamin" id="exampleFormControlInput1" class="form-select" required>
                            <option value="">-- Pilih Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <button type="submit" class="btn btn-success w-100">Daftar</button>
                        <br>
                        <br>
                        <a href="login.php" class="btn btn-primary w-100">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>