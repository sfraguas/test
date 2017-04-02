<?php
  //echo "HELLO WORLD!";
  include "read.php";
  //echo getUsers();
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

  <ul>
    <li><a href="index.php">Index</a></li>
    <li><a class="active" href="eventos.php">Eventos</a></li>
    <li><a href="combinacoes.php">Combinacoes</a></li>
    <li><a href="#about">About</a></li>
  </ul>

  <div style="padding:20px;margin-top:30px;background-color:#1abc9c;height:1500px;">
    <?php echo getEvents(); ?>
    <!--<h1>Fixed Top Navigation Bar</h1>
    <h2>Scroll this page to see the effect</h2>
    <h2>The navigation bar will stay at the top of the page while scrolling</h2>
    <p>Some text some text some text some text..</p>-->
  </div>

</body>
</html>
