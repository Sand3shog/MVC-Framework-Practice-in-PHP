<?php
include 'Database.php';
include 'utils.php';

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare the SQL delete statement
    $sql = "DELETE FROM notes WHERE id = :id";
    $params = [':id' => $id];

    // Execute the statement
    try {
        $db->query($sql, $params);
        header('Location: notes.php');
        exit; // Stop script execution after redirect
    } catch (PDOException $e) {
        echo "Error deleting note: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}

include 'views/note-create-update.view.php'; 