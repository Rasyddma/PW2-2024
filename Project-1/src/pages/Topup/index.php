<?php
require_once '../../../config/Database.php';
require_once '../../../app/Topup.php';

$database = new Database();
$db = $database->dbConnection();

$Topup = new Topup ($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $Topup->id = $_GET['_id'];

    if($Topup->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus topup.";
    }
}

// Tampilkan data dari method index
$data = $Topup->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar topup</title>
</head>
<body>
    <h1>Daftar topup</h1>
    <a href="create.php">Tambah</a>
    <table border="4">
        <thead>
            <tr>
                <th>ID</th>
                <th></th>
                <th>Nama</th>
                <th> amout</th>
                <th>Harga Jual</th>
                <th>topup_date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['game_id']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['topup_date']; ?></td>
                    
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>