<?php
require_once '../../../config/Database.php';
require_once '../../../app/user.php';

$database = new Database();
$db = $database->dbConnection();

$user = new user($db);

if(isset($_POST['tambah'])){
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->balance = $_POST['balance'];
    

    $user->store(); 
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
        <label for="username">Nama:</label>
        <input type="text" name="username" required>
        <br>
        <label for="email">email:</label>
        <input type="email" name="email"required>
        <br>
        <label for="password">password:</label>
        <input type="text" name="password" required>
        <br>
        <label for="balance">balance:</label>
        <input type="number" name="balance" required>
        <br> 
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>