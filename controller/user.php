<?php
session_start();
include_once('../class/user_class.php');

$user = new User();

if(isset($_POST['login'])){
    $user->user_login();
}
if(isset($_POST['register'])){
    $user->add_user();
}

if(isset($_POST['upload_id'])){
    $user->add_idproof();
}

if(isset($_POST['getdata'])){
    $user->get_user();
}
if(isset($_POST['update'])){
    $user->edit_user();
}
if(isset($_POST['updatephoto'])){
    $user->edit_photo();
}
if(isset($_POST['updatesignture'])){
    $user->edit_signature();
}
if(isset($_GET['delete_id'])){
    $user->delete_user($_GET['delete_id']);
}
if(isset($_GET['update_id'])){
    $user->active_user($_GET['update_id']);
}
if(isset($_GET['user_id'])){
    $user_data=$user->get_single_user($_GET['user_id']);
    $url = '../views/edit_user.php?data=' . base64_encode(json_encode($user_data));
    header("Location: $url"); 
}

if(isset($_GET['profile_id'])){
    $user_data=$user->get_single_user($_GET['profile_id']);
    $url = '../views/edit_profile_user.php?data=' . base64_encode(json_encode($user_data));
    header("Location: $url"); 
}

?>