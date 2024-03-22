<?php

$connect = mysqli_connect('localhost', 'abdulkader', 'Safi@2020', 'cms', 3306);

if (mysqli_connect_errno()) {
  exit('failed to connect to MySQL: ' . mysqli_connect_error());
}
