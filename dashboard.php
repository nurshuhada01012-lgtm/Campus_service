<?php include "db.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<h2>Welcome <?=$_SESSION['user']['username']?></h2>

<a href="add.php">Add Service</a> |
<a href="logout.php">Logout</a>

<hr>

<?php
$res = $conn->query("SELECT * FROM services");

while($row = $res->fetch_assoc()){
    echo "<p>".$row['title']." - RM".$row['price']."</p>";
}
?>