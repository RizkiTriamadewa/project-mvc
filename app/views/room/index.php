<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Daftar Ruangan</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Ruangan</h2>
        <a href="index.php?controller=room&action=create" class="btn btn-success mb-3">Tambah Ruangan</a>
        <table class="table table-bordered table-stripped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Ruangan</th>
                    <th>Kapasitas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data)): ?>
                    <?php foreach ($data as $index => $room): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $room['nama_ruangan'] ?></td>
                        <td><?= $room['kapasitas_ruangan']?></td>
                        <td><?= $room['status_ruangan']?></td>
                        <td>
                            <a href="index.php?controller=room&action=edit&id=<?= $room['id_ruangan'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="index.php?controller=room&action=delete&id=<?= $room['id_ruangan'] ?>" class="btn btn-danger">
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