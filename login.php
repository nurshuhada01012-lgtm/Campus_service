<?php include "db.php"; ?>

<form method="POST">
<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>
<button>Login</button>
</form>

<?php
if($_POST){
    $e = $_POST['email'];
    $p = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s",$e);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($user && password_verify($p,$user['password'])){
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "Login failed!";
    }
}
?>