<?php
  $conn = new mysqli("localhost", "yeggi", "yeggi", "mysql");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  echo 'Connected to the database.<br>';

  $result = $conn->query("SELECT id, word FROM groupA");
  while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("%s %s<br>\r\n", $row[1], $row[0]);
  }
  echo "Returned rows are: " . mysqli_num_rows($result). "<br>";
  
  $result = $conn->query("SELECT id, word FROM groupB");
  while($res = mysqli_fetch_array($result, MYSQLI_ASSOC )) {
    $locations[] = array($res['id'], $res['word']);
  }
  echo "var location = " . json_encode($locations) . ";<br><br>";
  
  
  $result = $conn->query("SELECT id, word FROM groupC");
  $res = mysqli_fetch_all($result, MYSQLI_ASSOC ); 
  echo "all at once: " . json_encode($res) . "<br><br>";
  

  $result->close();
  $conn->close();
?>

<script>
var words2 = <?php echo(json_encode($res)); ?>;
console.log(words2);
</script>

<script>
  var items = <?php echo(json_encode($res)); ?>;
  let words = [];
  for( [key, item] of Object.entries(items)) {
	words.push( 
  {
	id: item['word'], 
	status: "new",
	incorrect: 0,
	correct: 0
  });
  }
  console.log(words);
</script>

<script type='text/javascript'>
<?php
$php_array = array('abc','def','ghi');
$js_array = json_encode($php_array);
echo "var javascript_array = ". $js_array . ";\n";
?>
</script>
