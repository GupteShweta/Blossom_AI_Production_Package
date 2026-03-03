
<?php
session_start();
$conn = new mysqli("localhost","root","","blossom_db");
if($_POST){
$email=$_POST['email'];
$pass=$_POST['password'];
$res=$conn->query("SELECT * FROM users WHERE email='$email'");
$row=$res->fetch_assoc();
if($row && password_verify($pass,$row['password'])){
$_SESSION['user']=$email;
header("Location: dashboard.php");
}
}
?>
<form method="POST">
<input type="email" name="email" required>
<input type="password" name="password" required minlength="6">
<button>Login</button>
</form>
