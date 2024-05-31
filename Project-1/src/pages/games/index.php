<?php
require_once '../../../config/database.php';
require_once '../../../app/games.php';

$database = new Database();
$db = $database->dbConnection();

$games = new Games($db);

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $games->id = $_GET['id'];

    if($games->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus produk.";
    }
}

// Tampilkan data dari method index
$data = $games->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar game:</title>
</head>
<body>
    <h1>Daftar game</h1>
    <a href="create.php">Tambah</a>
    <table border="4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>platfrome</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['platform']; ?></td>
                    
        
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>