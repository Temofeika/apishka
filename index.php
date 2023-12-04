<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Название документа</title>
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
 
    <p>Абзац с текстом был добавлен для демонстрации того, что при открытии подпунктов меню они будут скрывать часть контента, а не сдвигать его.</p>
 
  </body>
</html>