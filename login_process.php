<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$username = [
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // بررسی وجود کاربر در آرایه
    if (isset($users[$username]) && $users[$username] === $password) {
        // ورود موفقیت‌آمیز
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    } else {
        // ورود ناموفق
        echo 'Invalid username or password';
    }
}
?>
