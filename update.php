<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dbproject";

$connection = new mysqli($host, $user, $pass, $dbname);

  $id = $_GET['id'];
  $name = $_POST['username'];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $department = $_POST["department"];
  $Id = $_POST["Id"];
  $about = $_POST["about"];


$query = "UPDATE student SET name=$name, phone=$phone, $department=$department, $std_id=$Id, email=$email, about=$about WHERE id=$id";

$result = $connection->query($query);
if ($result === TRUE) {
      header("Location:index.php");
  } else {
      header("Location:edit.php");
  }
