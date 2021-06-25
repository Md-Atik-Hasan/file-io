<?php
  function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function write($content) {
    $fileName = "data.txt";
    $resource = fopen($fileName, "w");
    $fw = fwrite($resource, $content);
    fclose($resource);
    return $fw;
  }
  function read() {
    $fileName = "data.txt";
    $fileSize = filesize($fileName);
    $fr = "";
    if($fileSize > 0) {
      $resource = fopen($fileName, "r");
      $fr = fread($resource, $fileSize);
      fclose($resource);
      return $fr;
    }
  }
?>