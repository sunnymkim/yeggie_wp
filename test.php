<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  echo "test.php is called <br>";

  $say = htmlspecialchars($_POST['say2']);
  $to  = htmlspecialchars($_POST['to']);
  echo  $say, ' ', $to;
?>