<?php

try{

include_once("connection.php");

array_map("htmlspecialchars", $_POST);


$stmt = $conn->prepare("INSERT INTO tblsubjects (SubjectID,Subjectname,Teacher)VALUES (null,:subjectname,:teacher)");

$stmt->bindParam(':Subjectname', $_POST["subjectname"]);
$stmt->bindParam(':Teacher', $_POST["teacher"]);
$stmt->execute();
}

catch(PDOException $e)

{
    echo "error".$e->getMessage();
}

$conn=null;

header('Location: subjects.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>