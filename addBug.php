<?php
require_once "config.php";

$id = trim($_POST['bugID']);
$name = trim($_POST['bugName']);
$type = trim($_POST['bugType']);
$priority = trim($_POST['bugPriority']);
$description = trim($_POST['bugDesc']);
$status = trim($_POST['bugStatus']);

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $sql = "INSERT INTO bugs (bugID, bugName, bugType, bugPriority, bugDescription, bugStatus) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssssss", $param_id, $param_name, $param_type, $param_priority, $param_description, $param_status);

        $param_id = $id;
        $param_name = $name;
        $param_type = $type;
        $param_priority = $priority;
        $param_description = $description;
        $param_status = $status;

        if (mysqli_stmt_execute($stmt))
        {
            header("location: bugDetails.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
mysqli_close($conn);
}

?>