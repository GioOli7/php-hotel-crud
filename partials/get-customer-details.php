<?php 

require_once __DIR__ . '/database.php';

$id = empty($_GET['id']) ? false : $_GET['id'];

if($id) {
    
    $stmt = $conn->prepare("SELECT * FROM `ospiti` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    // execute
    $stmt->execute();
    // result 
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $customer = $result->fetch_assoc();
    }
}

$conn->close();