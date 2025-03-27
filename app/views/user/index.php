<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/style.css">
    <title>Daftar User</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar User</h2>
        <a href="index.php?controller=user&action=create" class="btn btn-success mb-3">Tambah user</a>
        <table class=class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data)): ?>
                    <?php foreach ($data as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $user['nama_usr'] ?></td>
                        <td><?= $user['username_usr']?></td>
                        <td><?= $user['password_usr']?></td>
                        <td>
                            <a href="index.php?controller=user&action=edit&id=<?= $user['id_usr'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="index.php?controller=user&action=delete&id=<?= $user['id_usr'] ?>" class="btn btn-danger">
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