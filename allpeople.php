
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  
  
<nav class="navbar navbar-expand-sm bg-light">

<div class="container-fluid">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/webform/index.html">kayıt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/webform/allpeople.php">tüm kişiler</a>
    </li>
 
  </ul>
</div>

</nav>
  <div class="container mt-3">

          
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
    

      $sqlselect = "SELECT id, firstname, surname , useremail , birthdate FROM people";
      $result = $conn->query($sqlselect);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

          echo ' <div class="card">
          <div class="card-header">'.$row["firstname"].'</div>
          <div class="card-body">'.$row["useremail"] .'<br/>'.$row["birthdate"].'</div> 
          <div class="card-footer"><a class="btn btn-outline-danger" href="/webform/detail.php?userid='.$row["id"].'&username='.$row["firstname"].'">Sil</a>
         
          </div>
        </div>
        <br/>
        ';
  
         
        }
      } else {
        echo "0 results";
      }



      $conn->close();
      


    ?>
    

  </div>

    
</body>
</html>