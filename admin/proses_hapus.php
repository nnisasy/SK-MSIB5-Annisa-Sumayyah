<?php
include '../conn.php';

$result = mysqli_query($conn, "DELETE from buket where `id_buket` = '$_GET[id_buket]'");

header("Location:index.php");
