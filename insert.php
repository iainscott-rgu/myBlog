<?php
include("connect.php");
$title = $_POST["entrytitle"];
$summary = $_POST["entrySummary"];
$category = $_POST["category"];
$submitter = $_POST["submitter"];


$sql = "INSERT INTO blogView (entryTitle, entrySummary, category, submitter) VALUES ('$title','$summary','$category', '$submitter')";
if(mysqli_query($db, $sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>
