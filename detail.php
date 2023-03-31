<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ürün detayları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <pre>
    <h1 class="display-6">detaylar</h1>

    

    <?php
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
     
     echo "<br/>";
     echo ' <div class="alert alert-warning">
     <strong>Uyarı!</strong> Silme işleminden sonra tüm kayıtlar kısmını <strong>güncelleyiniz</strong>
   </div>';
    echo ' <div class="alert alert-info"><h4">kullanıcı id  </h4>' .'<h4"><strong>'. $_GET['userid'] . '</strong></h4>' .' <h4">kullanıcı ismi  </h4>'.' <h4"><strong>' . $_GET['username'].'</strong></h4></div>';
    // sql to delete a record
$usersqlid=$_GET['userid'];
$sqldelete = "DELETE FROM people WHERE id= $usersqlid";

if ($conn->query($sqldelete) === TRUE) {
  echo '<div class="alert alert-danger">
  Kayıt başarı ile silindi .
  </div>';
} else {
  echo '<div class="alert alert-danger">
  Bağlantı hatası.
  </div>' . $conn->error;
}

    $conn->close();





    ?>
    </div>

</body>
</html>