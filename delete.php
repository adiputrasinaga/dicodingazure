<?php
include("config.php");

$id = $_GET['id'];
//hapus data berdasarkan id
$result = mysqli_query($mysqli, "DELETE FROM biodata WHERE id=$id");

header("Location:index.php");
?>

