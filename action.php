<?php
$setName=$_POST["name"];
$setSuranme=$_POST["surname"];
$setEmail=$_POST["email"];
$setDate=$_POST["date"];

echo $setName . $setEmail . $setSuranme . $setDate;

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="webform";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sqlinsert = "INSERT INTO people (firstname,surname,useremail,birthdate)
VALUES ('$setName','$setSuranme', '$setEmail','$setDate')";

if ($conn->query($sqlinsert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EKLENDİ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">



</nav>
  <div class="container mt-3">
    <h1 class="display-1">kullanıcı kaydı kişi listesine eklendi. tüm kayıtlar sayfasından göz atabilirsiniz</h1>
  </div>
  
</body>
</html>