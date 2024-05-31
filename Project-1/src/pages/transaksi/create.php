<?php
require_once '../../../config/Database.php';
require_once '../../../app/transaksi.php';

$database = new Database();
$db = $database->dbConnection();

$transaksi = new transaksi($db);

if(isset($_POST['tambah'])){
    $transaksi->user_id = $_POST['user_id'];
    $transaksi->game_id = $_POST['game_id'];
    $transaksi->amount = $_POST['amount'];
    $transaksi->transaction_date = $_POST['transaction_date'];
    
    $transaksi->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="user_id">Nama:</label>
        <input type="text" name="user_id" required>
        <br>
        <label for="game_id">Game:</label>
        <input type="text" name="game_id" required>
        <br>
        <label for="amount">amount:</label>
        <input type="text" name="amount" required>
        <br>
        <label for="transaction_date">transaksi:</label>
        <input type="number" name="transaction_date" required>
        <br>
        
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>