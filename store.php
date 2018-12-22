<?php

  $connect = new mysqli("localhost", "root", "", "dbproject");
  
  $name = $_POST['username'];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $department = $_POST["department"];
  $Id = $_POST["Id"];
  $about = $_POST["about"];

  $store = "INSERT INTO student (name, phone, department, std_id, email, about) 
            VALUES ('$name', '$phone', '$department', '$Id', '$email', '$about')";

  $var = $connect->query($store);

  if ($var === TRUE) {
      header("Location:index.php");
  } else {
      header("Location:create.php");
  }


