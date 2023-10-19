<?php
require $_SERVER["DOCUMENT_ROOT"] . '/database501/config/database.php';

// prepare and bind
$stmt = $conn->prepare("UPDATE users SET
    first_name = ?,
    last_name = ?,
    gender = ?
    WHERE id = ?");
$stmt->bind_param("ssss", $first_name, $last_name, $gender, $id);

// set parameters and execute
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$id = $_POST["id"];
$stmt->execute();

$stmt->close();
$conn->close();
header("location: ../../index.php?update-success=true");
?>
