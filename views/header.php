<?php
if( !isset( $_SESSION ) ){
    session_start();
}
if($_SESSION['name']==NULL){
    header("Location:../index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <script src="../assets/jquery/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="../assets/css/admin.css"/>
</head>
<body>
<div class="main-head">
        
    </div>
    <div class="main">
    <div class="dashboard-container">
    <div class="sidebar">
        <div class="logo">
            <h2 class="main-title">USER MANAGEMENT SYSTEM</h2>
        </div>
        <hr class="line">
        <div class="menu-link">
            <p class="user-name">Welcome, <?= $_SESSION['name'] ;?></p>
            <ul class="menu-list">
                <?php if($_SESSION['role']==1){ ?>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="id_proof.php">ID Proof</a>
                </li>
                <?php }else{?>
                <li>
                    <a href="adminboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="employee.php">Employee</a>
                </li>
            <?php }?>
                <li>
                    <a href="../controller/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">