<?php 
require 'baglan.php';
$sql = "SELECT * FROM contact";
$result = $db->prepare($sql);
$result->execute();
$data = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>