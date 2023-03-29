<?php
// Tạo một mật khẩu ngẫu nhiên gồm 8 ký tự
function generatePassword() {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($chars) - 1);
        $password .= $chars[$index];
    }
    return $password;
}

// Kiểm tra nếu nhận được yêu cầu GET từ frontend
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Tạo mật khẩu ngẫu nhiên
    $password = generatePassword();
    
    // Trả lại kết quả dưới dạng JSON
    header('Content-Type: application/json');
    echo json_encode(array('password' => $password, 'message' => 'Password generated successfully'));
} else {
    // Nếu nhận được yêu cầu khác thì trả lại lỗi 404 Not Found
    http_response_code(404);
    echo 'Not Found';
}
?>