<?php
require_once '../../../config/Database.php';
require_once '../../../app/Topup.php';

$database = new Database();
$db = $database->dbConnection();

$topup = new Topup($db);

if (isset($_POST['tambah'])) {
    // Ambil nilai dari form
    $user_id = $_POST['user_id'] ?? null;
    $game_id = $_POST['game_id'] ?? null;
    $amount = $_POST['amount'] ?? null;
    $topup_date = $_POST['topup_date'] ?? null;

    // Validasi input untuk memastikan tidak ada nilai null
    if (is_null($user_id) || is_null($game_id) || is_null($amount) || is_null($topup_date)) {
        echo "All fields are required.";
    } else {
        // Periksa apakah user_id ada di tabel users
        $query = "SELECT id FROM users WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$user_id]);
        
        if ($stmt->rowCount() == 0) {
            echo "User ID does not exist.";
        } else {
            $topup->user_id = $user_id;
            $topup->game_id = $game_id;
            $topup->amount = $amount;
            $topup->topup_date = $topup_date;

            if ($topup->store()) {
                header("Location: index.php");
                exit;
            } else {
                echo "Penambahan data gagal.";
            }
        }
    }
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
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>
        <br>
        <label for="game_id">Game ID:</label>
        <input type="text" name="game_id" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" required>
        <br>
        <label for="topup_date">Topup Date:</label>
        <input type="date" name="topup_date" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>
