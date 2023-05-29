<?php 

include_once '../../path.php';
include SITE_ROOT . '/app/database/db.php';

$errMsg = '';
$id = '';
$title = '';
$content = '';
$img = '';
$id_user = '';
$tableTop = 'topics';
$tablePost = 'posts';
$topics = selectAll($tableTop);
$posts = selectAll($tablePost);
//Create post
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-post'])){
    $id_user = $_SESSION['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $img = trim($_POST['img']);
    $status = trim($_POST['status']);

    if($title === '' || $content === '' || $img === '' || $status === ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($title) < 2){
        $errMsg = 'Title categorie must be more than two characters';
    }elseif(!empty(selectOne($tablePost, ['title' => $title]))){
        $errMsg = 'Post already exists';
    }else{
        
        $post = [
            'id_user' => $id_user,
            'title' => $title,
            'content' => $content,
            'img' => $img,
            'status' => $status
        ];
        $id = insert($tablePost, $post);
        header('Location: ' . BASE_URL . "admin/posts/index.php");
        
    }


}else{
    $title = '';
    $content = '';
    $img = '';
}

//Edit categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $posts = selectOne($tablePost, ['id' => $id]);
    $id = $posts['id'];
    $title = $posts['title'];
    $content = $posts['content'];
    $img = $posts['img'];
    $status = $posts['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-post'])){
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $img = trim($_POST['img']);
    $status = trim($_POST['status']);
    $id_user = $_SESSION['id'];

    if($title === '' || $content === '' || $img === '' || $status === ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($title) < 2){
        $errMsg = 'Title categorie must be more than two characters';
    }elseif(!empty(selectOne($tablePost, ['title' => $title]))){
        $errMsg = 'Post already exists';
    }else{
        
        $post = [
            'id_user' => $id_user,
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => $status
        ];
        update($tablePost, $post, ['id' => $id]);
        header('Location: ' . BASE_URL . "admin/posts/index.php");
        
    }
}

//Delete categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    
    deleteRow($tablePost, ['id' => $id]);
    header('Location: ' . BASE_URL . "admin/posts/index.php");
}
?>