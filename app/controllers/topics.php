<?php 

include_once '../../path.php';
include SITE_ROOT . '/app/database/db.php';

$errMsg = '';
$id = '';
$name = '';
$description = '';
$table = 'topics';
$topics = selectAll($table);
$tablePost = 'posts';
$posts = selectAll($tablePost);
//Create categorie
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-categorie'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if($name === '' || $description === ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($name) < 2){
        $errMsg = 'Name categorie must be more than two characters';
    }elseif(!empty(selectOne($table, ['name' => $name]))){
        $errMsg = 'Category already exists';
    }else{
        
        $post = [
            'name' => $name,
            'description' => $description
        ];
        $id = insert($table, $post);
        header('Location: ' . BASE_URL . "admin/categories/index.php");
        
    }


}else{
    $name = '';
    $description = '';
}

//Edit categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topics = selectOne($table, ['id' => $id]);
    $id = $topics['id'];
    $name = $topics['name'];
    $description = $topics['description'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-categorie'])){
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if($name === '' || $description === ''){
        $errMsg = 'Not all fields as full';
    }elseif(strlen($name) < 2){
        $errMsg = 'Name categorie must be more than two characters';
    }elseif(!empty(selectOne($table, ['name' => $name]))){
        $errMsg = 'Category already exists';
    }else{
        
        $post = [
            'name' => $name,
            'description' => $description
        ];
        update($table, $post, ['id' => $id]);
        header('Location: ' . BASE_URL . "admin/categories/index.php");
        
    }
}

//Delete categorie
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    
    deleteRow($table, ['id' => $id]);
    header('Location: ' . BASE_URL . "admin/categories/index.php");
}
?>