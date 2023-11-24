<?php

// 安全验证 (防止恶意调用)
if (isset($_SESSION['send_count'])) {
    $_SESSION['send_count'] += 1;
} else {
    $_SESSION['send_count'] = 1;
}
if ($_SESSION['send_count'] > 4) {
    exit($langs['no_message']);
}

$arr = $_POST;
$phone = $_POST['phone'];

$code = rand(1000, 9999);

echo sendCode($phone, $code);
