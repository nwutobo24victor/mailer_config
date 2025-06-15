<?php

// Allow requests from any origin (for development only!)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}


header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);


// Example logic
if (empty($data['name'])) {
    echo json_encode(['success' => false, 'message' => 'Name is required.']);
    exit;
}
if (empty($data['email'])) {
    echo json_encode(['success' => false, 'message' => 'Email is required.']);
    exit;
}
if (empty($data['message'])) {
    echo json_encode(['success' => false, 'message' => 'Message is required.']);
    exit;
}
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
    exit;
}



// Do registration logic here...
$href = "http://localhost:5173/";
$logo = "http://localhost:5173/assets/images/nwutobo_short.png";
$customerName = $data['name'];
$customerEmail = $data['email'];
$customerMessage = $data['message'];
////////////////////
$subject = "Portfolio Contact";
$receiver = ["customer"=>"notsent", "admin"=>"notsent"];


if ($receiver["customer"] == "notsent") {
  include_once './customerMail.php';
}

if ($receiver["admin"] == "notsent") {
  include_once './adminMail.php';
}

include_once './mail/mail_config.php';



if($receiver["customer"] == "sent"  && $receiver["admin"] == "sent"){
  echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
  exit;
}else{
  echo json_encode(['success' => false, 'message' => 'Message Failed.']);
  exit;
}
