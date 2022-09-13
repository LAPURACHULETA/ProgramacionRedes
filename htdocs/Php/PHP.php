<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/CSS.css">
<script src="../Java/JavaScript.js"></script>

<input type="button" onclick="popup()"value="!Y esto?!">
<input type="button" onclick="suma()"value="picale">
</head>
<body>
  
<?php
//-------------------------------------------------
echo "<p>My first PHP script!</p>";

class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit("<p>Manzana</p>");
//------------------------------------------------
$UsuarioID=$_POST['UsuarioID'];
$Name=$_POST['Name'];
$Score=$_POST['Score'];
$Level=$_POST['Level'];
//echo "<p>name:  ".$name."<p>\nmail:  ".$mail."<p>\ncontraseña:  ".$contrasena."<p>confirmada:  ".$confirmada;


//--------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myBase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  Usuario(UsuarioID,Name,Score,Level)
values(".$UsuarioID.",'".$Name."',".$Score.",".$Level.")";

//echo $sql;
//INSERT INTO Usuario(UsuarioID,Name,Score,Level) values(LAPUARCHULETA,gustavinarreola@hotmail.com,123,123)

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//-----------------------------------------------------------------------
?>


<h1>BABYMETAL</h1>
<p>Album</p>
</body>
</html>