
<?php
$conn = new mysqli("localhost","root","","blossom_db");
if($_POST){
$email=$_POST['email'];
$pass=password_hash($_POST['password'], PASSWORD_BCRYPT);
$conn->query("INSERT INTO users(email,password) VALUES('$email','$pass')");
header("Location: login.php");
}
?>
<form method="POST">
<input type="email" name="email" required>
<input type="password" name="password" required minlength="6">
<button>Sign Up</button>
</form>
