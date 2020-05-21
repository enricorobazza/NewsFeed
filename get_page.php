<?php
  $externalURL = $_GET['url'];
  $externalData = file_get_contents($externalURL);
  // echo $_GET['url'];
  echo $externalData;
?>