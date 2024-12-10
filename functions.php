<?php

function handleLogin(&$error) {
    session_start();

    // Simulated user data
    $users = [
        'user1' => 'password1',
        'user2' => 'password2',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (isset($users[$username]) && $users[$username] === $password) {
            $_SESSION['username'] = $username;
            header('Location: pages/chat.php'); // Redirect to chat page
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
}

function handleRegistration(&$error) {
    session_start();
    if (!isset($_SESSION['registered_users'])) {
        $_SESSION['registered_users'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['EmailAddress'] ?? '';
        $fullName = $_POST['FullName'] ?? '';
        $phoneNumber = $_POST['PhoneNumber'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['ConfirmPassword'] ?? '';

        if ($password !== $confirmPassword) {
            $error = "Passwords do not match.";
        } elseif (isset($_SESSION['registered_users'][$email])) {
            $error = "Email is already registered.";
        } else {
            $_SESSION['registered_users'][$email] = [
                'FullName' => $fullName,
                'PhoneNumber' => $phoneNumber,
                'Password' => $password,
            ];
            header('Location: ../index.php');
            exit();
        }
    }
}

function handleChatResponse($userInput) {
    $userInput = trim(strtolower($userInput));
    switch ($userInput) {
        case 'hello':
            return 'Hi there! How are you?';
        case 'good, you?':
            return 'I am very well thank you';
        case 'bad':
            return 'lol that sucks man';
        case 'can you rick roll me?':
            return 'Never gonna give you up!';
        case 'goodbye':
            return 'Goodbye! Have a great day!';
        default:
            return "I'm not sure how to respond to that.";
    }
}
?>
