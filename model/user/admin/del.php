<?php
$adm_id = $_GET['adm_id'];
mysqli_query($connect, "DELETE FROM admin WHERE adm_id=".$adm_id."");
header('Location: index.php')
?>