<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Tambah User</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah User</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nama_usr">Nama User</label>
                <br>
                <input type="text" class="form-control" name="nama_usr" 
                value="<?=$data['nama_usr']?>" required>
            </div>
            <div class="form-group">
                <label for="username_usr">Username</label>
                <br>
                <input type="text" class="form-control" name="username_usr" 
                value="<?=$data['username_usr']?>" required> 
            </div>
            <div class="form-group">
                <label for="password_usr">Password</label>
                <br>
                <input type="password" class="form-control" name="password_usr" 
                value="<?=$data['password_usr']?>" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>