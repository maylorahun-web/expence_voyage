<?php
header('Content-Type: application/json');
require 'db_connection.php'; // Make sure this path is correct

$response = ['success' => false, 'message' => ''];

try {
    // Get raw POST data
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !$data) {
        throw new Exception('Invalid request');
    }

    // Validate email
    $email = filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please enter a valid email address');
    }

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
    $stmt->execute([$email]);
    
    $response = [
        'success' => true,
        'message' => 'Thank you for subscribing!'
    ];
    
} catch (PDOException $e) {
    $response['message'] = (strpos($e->getMessage(), 'Duplicate entry') !== false)
        ? 'You are already subscribed!'
        : 'Database error. Please try again later.';
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>