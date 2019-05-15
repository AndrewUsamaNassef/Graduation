<?php
require_once("dataset.php");
$submit = new dataset();
$u_id = $_POST['u_id'];
$image = $_POST['image'];
$Address =$_POST['Address'];
$result_id = $_POST['result_id'];
$name = $_POST['name'];

$submit->insert($_POST['u_id'],$_POST['image'],$_POST['Address'],$_POST['result_id'],$_POST['name']);
?>