<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;
// Hàm hash
function hashId($id) {
    return md5($id);
}
if (!empty($_GET['id'])) {
    $hashedId = $_GET['id'];
    $users = $userModel->getUsers();
    foreach ($users as $user) {
        if (hashId($user['id']) === $hashedId) {
            $id = $user['id'];  
            break;
        }
    }
    if ($id) {
        $userModel->deleteUserById($id);
        echo "User deleted successfully!";
    } else {
        echo "User not found!";
    }
}
header('location: list_users.php');
