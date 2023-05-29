<?php 
include('app/database/db.php');
include('path.php');

$isSubmit = false;
$errMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $rep_pass = trim($_POST['repeat_password']);
    $admin = 0;

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
        $user = selectOne('users', ['id' => $id]);

        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        

        if($_SESSION['admin']){
            header('Location: ' . BASE_URL . 'admin/admin.php');
        }else{
            header('Location: ' . BASE_URL);
        }
        
    }


    $isSubmit = true;
}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-auth'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $selEmail = selectOne('users', ['email' => $email]);
    if(!empty($selEmail)){
        if($selEmail && password_verify($pass, $selEmail['password'])){
            $_SESSION['id'] = $selEmail['id'];
            $_SESSION['login'] = $selEmail['username'];
            $_SESSION['admin'] = $selEmail['admin'];
            if($_SESSION['admin']){
                header('Location: ' . BASE_URL . 'admin/posts/index.php');
            }else{
                header('Location: ' . BASE_URL);
            }
        }else{
            $errMsg = 'Password doesnt exist';
        }
    }else{
        $errMsg = 'Login not found';
    }
}else{
    $email = '';
    $login = '';
}


// if(isset($_POST['login'])){

//     if($_POST['password'] == $_POST['repeat_password'])
//     {
//         $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

//         //
//     }else{
//         echo "Your passwords doesn't matches";
//     }   
// }

?>