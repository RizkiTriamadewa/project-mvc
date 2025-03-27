<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Daftar Peminjaman</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Peminjaman</h2>
        <a href="index.php?controller=rent&action=create" class="btn btn-success mb-3">Tambah Ruangan</a>
        <table class="table table-bordered table-stripped table-hover">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Nama User</th>
                    <th>Nama Ruangan</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data)): ?>
                    <?php foreach ($data as $index => $rent): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $rent['nama_usr'] ?></td>
                        <td><?= $rent['nama_ruangan']?></td>
                        <td><?= $rent['tanggal_peminjaman']?></td>
                        <td>
                            <a href="index.php?controller=rent&action=edit&id=<?= $rent['id_peminjaman'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="index.php?controller=rent&action=delete&id=<?= $rent['id_peminjaman'] ?>" class="btn btn-danger">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center color">
                            No Available Data
                        </td>
                    </tr>
                    <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>