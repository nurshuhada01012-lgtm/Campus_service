<?php include "db.php";

$q = $_GET['q'];

$stmt = $conn->prepare("SELECT * FROM services WHERE title LIKE ?");
$search = "%$q%";

$stmt->bind_param("s",$search);
$stmt->execute();

$res = $stmt->get_result();

while($row = $res->fetch_assoc()){
    echo "<p>".$row['title']."</p>";
}