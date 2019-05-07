<?php

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$email = isset($_POST['username']) ? $_POST['email'] : "";
$tel = isset($_POST['password']) ? $_POST['tel'] : "";
$address = isset($_POST['username']) ? $_POST['address'] : "";
$description = isset($_POST['password']) ? $_POST['description'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$tenant_code = isset($_POST['tenant_code']) ? $_POST['tenant_cod'] : "";
$avatar = isset($_POST['avatar']) ? $_POST['tenant_cod'] : "";

$rows = 0;
if($result = mysqli_query($conn, "SELECT * FROM users WHERE username=".$username)){
    $rows = mysqli_num_rows($result);
}
echo $rows;

if($result !=0)
   echo 1;
else{
  mysqli_query($conn, "INSERT INTO users(tenant_code, name, username, password, email, tel, address, description, avatar )
   values('$username', '$password', '$email', '$tel', '$address', '$description', '$name', $tenant_code, $avatar) ");
}   

?>


