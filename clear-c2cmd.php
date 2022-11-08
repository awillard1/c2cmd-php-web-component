<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $data = $_REQUEST['get'];
  if (empty($data)) {
    echo "data is empty";
  } else {
    file_put_contents('c2cmd.txt', '');
  }
}
?>
