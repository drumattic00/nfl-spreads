<?php
require 'dbconnect.inc.php';

$id = $_POST['id'];
$person = $_POST['person'];
$answer = $_POST['answer'];

function pdoPush($statement)
{
    global $pdo;
    global $answer;
    global $id;
    try {
        $stmt_update = $pdo->prepare($statement);
        $stmt_update->execute([$answer, $id]);
        // $stmt_update->execute([$answer, $id]);

        $sql = "SELECT * FROM nfl_data ORDER BY week";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rowCount = $stmt->rowCount();

        include "table_data.inc.php";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

switch ($person) {
    case 'ben_answer':
        $sql_update = "UPDATE nfl_data SET ben_answer = :answer WHERE id = :id";
        pdoPush($sql_update);
        break;

    case 'dion_answer':
        $sql_update = "UPDATE nfl_data SET dion_answer = :answer WHERE id = :id";
        pdoPush($sql_update);
        break;

    case 'james_answer':
        $col = 'james_answer';
        $sql_update = "UPDATE nfl_data SET james_answer = :answer WHERE id = :id";
        pdoPush($sql_update);
        break;
}
