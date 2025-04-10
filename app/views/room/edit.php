<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Edit Ruangan</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Siswa</h2>
        <form method="POST" action="">
            <input type="hidden" name="id_ruangan" value="<?= $data['id_ruangan'] ?>">
            <div class="form-group">
                <label for="nama_ruangan">Nama Ruangan</label>
                <br>
                <input type="text" class="form-control" name="nama_ruangan" 
                value="<?=$data['nama_ruangan']?>" required>
            </div>
            <div class="form-group">
                <label for="kapasitas_ruangan">Kapasitas</label>
                <br>
                <input type="text" class="form-control" name="kapasitas_ruangan" 
                value="<?=$data['kapasitas_ruangan']?>" required>
            </div>
            <div class="form-group">
                <label for="status_ruangan">status</label>
                <br>
                <select class="form-select" name="status_ruangan" required>
                    <option value="" selected>Pilih Bila Ingin Memperbarui</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Sedang Diperbaiki">Sedang Diperbaiki</option>
                    <option value="Sedang Digunakan">Sedang Digunakan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Perbarui</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>