<?php
// api_check_status.php
header('Content-Type: application/json');

$user = $_GET['username'] ?? '';

// Sanitize again, trust no one
if (!preg_match('/^[a-z0-9]+$/', $user)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid username']);
    exit;
}

$resultFile = "/opt/rats/results/$user.job";

if (file_exists($resultFile)) {
    // Read the content (Password or Error Message)
    $content = trim(file_get_contents($resultFile));

    if (str_starts_with($content, "ERROR:")) {
        echo json_encode(['status' => 'error', 'message' => $content]);
    } else {
        // Content is the password
        echo json_encode(['status' => 'ready', 'message' => $content]);
    }
} else {
    // File not created yet = Pending
    echo json_encode(['status' => 'pending']);
}
?>
