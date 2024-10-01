<?php

include("inc/dbconnect.inc.php");

$sql = "SELECT * FROM nfl_data ORDER BY week";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rowCount = $stmt->rowCount();
$week = 4;
    // $results = $stmt->fetch();
    // var_dump($results);