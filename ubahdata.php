<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Data</h1>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET ['id'];

$sql = "SELECT * FROM `syllabus` WHERE id = $id;";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
    ?>
  

      <?php

      echo "<form action=\"http://localhost/belajar/update.php?id=$id\" method=\"POST\">";
      $row = $result->fetch_assoc();
      ?>
       
       

       <label>Masukan Data Id:</label><br>
       <input type="text" name="id" value="<?php echo $row["id"] ?>"><br>

       <label>Masukan Data Year:</label><br>
       <input type="text" name="year" value="<?php echo $row["year"] ?>"><br>

       <label>Masukan Data oth:</label><br>
       <input type="text" name="month" value="<?php echo $row["month"] ?>"><br>

       <label>Masukan Data Date :</label><br>
       <input type="text" name="date" value="<?php echo $row["date"] ?>"><br>

       <label>Masukan Data Mon:</label><br>
       <input type="text" name="mon" value="<?php echo $row["mon"] ?>"><br>

       <label>Masukan Data Tue:</label><br>
       <input type="text" name="tue" value="<?php echo $row["tue"] ?>"><br>

       <label>Masukan Data Wed:</label><br>
       <input type="text" name="wed" value="<?php echo $row["wed"] ?>"><br>

       <label></label><br>
       <input type="submit" name="submit" value="Submit"> 
       
   
       
       
       

      
    </form>

    <?php




} else {
  echo "0 result";
}
$conn->close();
?>


</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>