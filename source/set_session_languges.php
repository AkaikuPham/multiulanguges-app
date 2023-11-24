<?php
// Bắt đầu session
session_start();

// Lấy ngôn ngữ đã chọn từ yêu cầu Ajax
$selectedLanguage = $_POST['language'];

// Set session cho biến Lang
$_SESSION['lang'] = $selectedLanguage;

// Trả về phản hồi thành công
$response = array('message' => 'Session set successfully');
echo json_encode($response);

?>
