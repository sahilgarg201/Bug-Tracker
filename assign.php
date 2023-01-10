<?php
require_once "config.php";

$id = trim($_POST['bugID']);
$name = trim($_POST['bugName']);
$by = trim($_POST['assignedBy']);
$to = trim($_POST['assignedTo']);
$deadline = trim($_POST['deadline']);
$project = trim($_POST['project']);

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $sql = "INSERT INTO assignments (bugID, bugName, assignedBy, assignedTo, deadline, project) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssssss", $param_id, $param_name, $param_by, $param_to, $param_deadline, $param_project);

        $param_id = $id;
        $param_name = $name;
        $param_by = $by;
        $param_to = $to;
        $param_deadline = $deadline;
        $param_project = $project;

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