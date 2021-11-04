<?php

if ($_SESSION["autentificado"]!="SI")
{
  header("Location:index.php");
  exit();
}

?>