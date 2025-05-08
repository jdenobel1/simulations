<?php
  // Retrieve the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform any necessary validation or sanitization here

  // Store the username and password (insecure example, for demonstration purposes only)
  $data = $username . ':' . $password . PHP_EOL;
  file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);

  // Redirect the user to a success page or perform any other necessary actions
  header('Location: index.html');
  exit;
?>
