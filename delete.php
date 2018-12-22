<?php
$id = $_GET['id'];
$conn = new mysqli("localhost", "root", "", "dbproject");

$sql = "DELETE FROM student WHERE id = $id";
$res = $conn->query($sql);
if ( $res=== TRUE) {
    header("Location:dashboard.php");
} else {
    header("Location:index.php");
}

?>