<?php
require_once '../../../config/database.php';
require_once '../../../app/transaksi.php';

$database = new Database();
$db = $database->dbConnection();

$transaksi = new transaksi($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $transaksi->id = $_GET['id'];

    if($transaksi->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus transaksi.";
    }
}

// Tampilkan data dari method index
$data = $transaksi->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Transaksi Game</title>
</head>
<body>
    <h1>Daftar Transaksi Top up Game</h1>
    <a href="create.php"> Tambah</a>
    <table border="4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Platfrom</th>
                <th>transaction</th>
                
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
                    <td><?php echo $row['transaction_date']; ?></td>
                    
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>