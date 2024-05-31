<?php
require_once '../../../config/Database.php';
require_once '../../../app/transaksi.php';

$database = new Database();
$db = $database->dbConnection();

$transaksi = new transaksi($db);

if(isset($_POST['update'])) {
    $transaksi->id = $_POST['id'];
    $transaksi->kode = $_POST['kode'];
    $transaksi->nama = $_POST['nama'];
    $transaksi->harga_beli = $_POST['amount'];
    $transaksi->harga_jual = $_POST['transaction_date'];
    

    $transaksi->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $transaksi->id = $_GET['id'];
    $stmt = $transaksi->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
<h1>Edit Data</h1>

<form method="POST" action="update.php">  <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label for="kode">Kode:</label>
    <input type="text" name="kode" id="kode" value="<?php echo $kode; ?>" required>
    <br>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" required>
    <br>

    <label for="amount">Harga Beli:</label>  <input type="number" name="amount" id="amount" value="<?php echo $harga_beli; ?>" required>
    <br>

    <label for="transaction_date">Harga Jual:</label>  <input type="number" name="transaction_date" id="transaction_date" value="<?php echo $harga_jual; ?>" required>
    <br>

    <button type="submit">Update</button>  </form>

</body>
</html>