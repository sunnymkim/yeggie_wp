<?php
    require_once(dirname(__FILE__) . '/wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    
    $conn = new mysqli("localhost", "yeggi", "yeggi", "mysql");
  
    if ($conn->connect_error) {
      die("ERROR: Unable to connect: " . $conn->connect_error);
    } 
    echo 'Connected to the database.<br>';

    if(isset($_POST["one"])){
        echo "<p> changing one </p>\r\n";
        $sql = "UPDATE Test SET checked = NOT checked WHERE NUM = 1";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    if (isset($_POST["two"])) {
        echo "<p> changing two </p>\r\n";
        $sql = "UPDATE Test SET checked = NOT checked WHERE NUM = 2";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    if (isset($_POST["three"])) {
        echo "<p> changing three </p>\r\n";
        $sql = "UPDATE Test SET checked = NOT checked WHERE NUM = 3";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
        }
    }
  
    $result = $conn->query("SELECT NUM,checked FROM Test");
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
      printf("%s %s<br>\r\n", $row[0], $row[1]);
    }
    echo "Returned rows are: " . mysqli_num_rows($result). "<br>";

    $conn->close();

?>

<!DOCTYPE html>
<html>
    <body>
        <form name="one" action="map_page3.php" method="post">
            <input name="one">
            <button> 1 </button>
        </form>
        <form name="two" action="map_page3.php" method="post">
            <input name="two">
            <button> 2 </button>
        </form>
        <form name="three" action="map_page3.php" method="post">
            <input name="three" >
            <button> 3 </button>
        </form>
    </body>
</html>
