<?php
$category = $_POST['categoria'];
include_once("config_products.php");
include_once("db.php");
$link = new Db();
$sql = "INSERT into categories (category_name) VALUES (:category)";
$stmt = $link->prepare($sql);
$stmt->bindValue('category', $category);
if ($stmt->execute()) {
?>
    <script>
        alert("Categoria ingresado correctamente!");
        window.location ="welcome.php";
    </script>
<?php
}
?>