<?php
  $file = fopen('/var/secure-enclave/fools.txt', 'a');
  date_default_timezone_set('Europe/Madrid');
  $actual = date('Y-m-d h:i:s', time())."-".$_SERVER['HTTP_REFERER']."-".htmlspecialchars(base64_decode($_GET['encryption-code']))."\n";
  fwrite($file, $actual);
  fclose($file);
?>
