<?php
require_once '../../../config/Database.php';
require_once '../../../app/Topup.php';

$database = new Database();
$db = $database->dbConnection();

$produk = new Topup($db);

if(isset($_POST['update'])) {
    $Topup->id = $_POST['id'];
    $Topup->user_id = $_POST['user_id'];
    $Topup->game_id = $_POST['game_id'];
    $Topup->amaout = $_POST['amout'];
    $Topup->topup_date = $_POST['topup_date'];

    if($Topup->update()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record.";
    }
} elseif(isset($_GET['id'])) {
    $Topup->id = $_GET['id'];
    $stmt = $Topup->edit();
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
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <label for="user_id">Nama:</label>
        <input type="text" name="user_id" value="<?php echo $user_id; ?>" required>
        <br>
        <label for="amout">Harga Jual:</label>
        <input type="number" name="amout" value="<?php echo $amout; ?>" required>
        <br>
        <label for="game_id">Game ID:</label>
        <input type="number" name="game_id" value="<?php echo $game_id; ?>" required>
        <br>
        <label for="topup_date">Top-Up Date:</label>
        <input type="date" name="topup_date" value="<?php echo $topup_date; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
