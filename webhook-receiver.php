<?php
// webhook-receiver.php

// 1. Get the payload
$payload = file_get_contents('php://input');

// 2. Optional: Decode JSON payload
$data = json_decode($payload, true);

// 3. Log the payload to a file for debugging
file_put_contents('webhook.log', date('Y-m-d H:i:s') . " - Payload:\n" . $payload . "\n\n", FILE_APPEND);

// 4. Optionally respond to GitHub
http_response_code(200);
echo "Webhook received!";
