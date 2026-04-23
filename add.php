<?php include "db.php"; ?>

<form method="POST" enctype="multipart/form-data">
<input name="title" placeholder="Title" required><br>
<textarea name="description" required></textarea><br>
<input name="price" type="number" required><br>
<input type="file" name="image" required><br>
<button>Add</button>
</form>

<?php
if($_POST){

    $title = $_POST['title'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$img);

    $stmt = $conn->prepare("INSERT INTO services (user_id,title,description,price,image) VALUES (?,?,?,?,?)");
    $stmt->bind_param("issds", $_SESSION['user']['id'],$title,$desc,$price,$img);
    $stmt->execute();

    echo "Added!";
}
?>