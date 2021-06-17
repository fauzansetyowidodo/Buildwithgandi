<?php
  $date = '09/25/11';
  $date = DateTime::createFromFormat('m/d/y', $date);
  $date = $date->format('Y-m-d');
  print $date;
?>