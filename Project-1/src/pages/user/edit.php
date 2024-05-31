<?php
require_once '../../../config/Database.php';
require_once '../../../app/user.php';

$database = new Database();
$db = $database->dbConnection();

$user = new user($db);

if(isset($_POST['update'])) {
    $user->id = $_POST['id'];
   
    $user->nama = $_POST['name'];
    $user->email = $_POST['email'];
    $user->passowrd = $_POST['password'];
    $user->balance = $_POST['balance'];


    $user->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $user->id = $_GET['id'];
    $stmt = $user->edit();
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
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="username" value="<?php echo $username ?>" required>
        <br>
        <label for="email">email:</label>
        <input type="text" name="email" value="<?php echo $email ?>" required>
        <br>
        <label for="password">password:</label>
        <input type="text" name="password" value="<?php echo $password ?>" required>
        <br>
        <label for="balance">balance:</label>
        <input type="number" name="balance" value="<?php echo $balance ?>" required>
         <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>