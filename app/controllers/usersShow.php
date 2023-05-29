<?php 

include_once '../../path.php';
include SITE_ROOT . '/app/database/db.php';

$errMsg = '';
$id = '';
$username = '';
$email = '';
$pass = '';
$rep_pass = '';

$table = 'users';
$allUsers = selectAll($table);
//Create categorie
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $rep_pass = trim($_POST['repeat_password']);
    $admin = trim($_POST['admin']);

    $searchEmail = ['email' => $email];

    if($login === '' || $email === '' || $pass === '' || $rep_pass = ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($login) < 4){
        $errMsg = 'Login must be more than four characters';
    }elseif(selectOne('users', $searchEmail) > 1){
        $errMsg = 'This email has registred';
    }elseif($_POST['password'] != $_POST['repeat_password']){
        $errMsg = 'Password mismatch';
    }elseif(strlen($pass) < 6){
        $errMsg = 'Password must be more than six characters';
    }else{
        $table = 'users';
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $passHash
        ];
        $id = insert($table, $post);
        header('Location: ' . BASE_URL . 'admin/users/index.php');
        
    }
}else{
    $name = '';
    $description = '';
}

//Edit categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $users = selectOne($table, ['id' => $id]);
    $id = $users['id'];
    $username = $users['username'];
    $email = $users['email'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){
    $id = $_POST['id'];
    $login = trim($_POST['login']);
    //$username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $admin = trim($_POST['admin']);


    if($login === '' || $email === '' || $pass === ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($login) < 2){
        $errMsg = 'Name user must be more than two characters';
    }else{
        
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $passHash
        ];
        update($table, $post, ['id' => $id]);
        header('Location: ' . BASE_URL . "admin/users/index.php");
        
    }
}

//Delete categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    
    deleteRow($table, ['id' => $id]);
    header('Location: ' . BASE_URL . "admin/users/index.php");
}
?>