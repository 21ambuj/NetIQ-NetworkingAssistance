<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "userotb";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM useraii WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: user_admin.php?msg=User+deleted+successfully");
        exit();
    } else {
        echo "Error deleting user.";
    }
    $stmt->close();
} else {
    echo "Invalid user ID.";
}

$conn->close();
?>
