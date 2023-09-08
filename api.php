<?php
// api.php

// Define your data (in-memory database for simplicity)
$items = [
    ['id' => 1, 'name' => 'Item 1'],
    ['id' => 2, 'name' => 'Item 2'],
    ['id' => 3, 'name' => 'Item 3'],
];

// Set the response headers
header('Content-Type: application/json');

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return the list of items as JSON
    echo json_encode($items);
} else {
    // Handle other HTTP methods (e.g., POST, PUT, DELETE) as needed
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}
?>
