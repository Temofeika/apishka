<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Список устройств</title>
    <style>
      #navbar ul{
        display: none;
        background-color: #f90;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 30px;
        background-color: #666;
        padding-left: 25px;
        min-width: 470px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        display: block;
        padding: 6px;
        width: 100px;
        color: #fff;
        text-decoration: none;
        text-align: center;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #f90; }
      #navbar ul li:hover { background-color: #666; }
    </style>
  </head>
<title>TeamDesk</title>
<meta charset="utf-8" />
</head>
<body>
<ul id="navbar">
      <li><a href="/index.php">Главная</a></li>
      <li><a href="/spisok.php">Список устройств</a></li>
      <li><a href="#">Контакты</a>
        <ul>
          <li><a href="#">Адрес</a></li>
          <li><a href="#">Телефон</a></li>
          <li><a href="#">Email</a></li>
        </ul>
      </li>
      <li><a href="#">О нас</a></li>
    </ul>
<h2>Список устройств</h2>
<?php
$conn = new mysqli("localhost", "root", "", "teamdesk");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM rustdesk_peers";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя</th><th>Метка</th><th>user id</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["alias"] . "</td>";
            echo "<td>" . $row["tags"] . "</td>";
            echo "<td>" . $row["uid"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>