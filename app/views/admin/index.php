<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Daftar Admin</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Admin</h2>
        <a href="index.php?controller=admin&action=create" class="btn btn-success mb-3">Tambah Admin</a>
        <table class="table table-bordered table-stripped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data)): ?>
                    <?php foreach ($data as $index => $admin): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $admin['nama_adm'] ?></td>
                        <td><?= $admin['username_adm']?></td>
                        <td><?= $admin['password_adm']?></td>
                        <td>
                            <a href="index.php?controller=admin&action=edit&id=<?= $admin['id_adm'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="index.php?controller=admin&action=delete&id=<?= $admin['id_adm'] ?>" class="btn btn-danger">
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