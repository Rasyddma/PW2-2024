<?php
require_once '../../../config/Database.php';
require_once '../../../app/user.php';

$database = new Database();
$db = $database->dbConnection();

$user = new user($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $user->id = $_GET['id'];

    if($user->delete()){
        header("Location: user.php");
    }else{
        echo "Gagal menghapus user.";
    }
}

// Tampilkan data dari method user
$data = $user->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar user</title>
</head>
<body>
    <h1>Daftar user</h1>
    <a href="create.php">Tambah</a>
    <table border="4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>emaill</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['balance']; ?></td>
                    
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>