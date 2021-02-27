<?php

if (isset($_GET['b1'])) {
 $message = $_GET['b1'];
}
elseif (isset($_GET['b2'])) {
  $message = $_GET['b2'];
}
elseif (isset($_GET['b3'])) {
  $message = $_GET['b3'];
}
elseif (isset($_GET['b4'])) {
  $message = $_GET['b4'];
}
else {
  $message = "null";
}

include('index.phtml');

