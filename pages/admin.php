<?php
    require_once '../login/connect.php';

    if(isset($_POST['examiner'])){
        $name = $_POST['name'];
        $password = $_POST['password'];


        $sql = "INSERT INTO csc405.examiner (name,password) VALUES (:name,:password)";
        $op = $conn->prepare($sql);
        $op->execute(array(

            ':name' => $name,
            ':password' => $password
        ));

    }

    if (isset($_POST['student'])) {
        $matric = $_POST['matric'];
        $password = $_POST['password'];


        $sql = "INSERT INTO csc405.students (matric,password) VALUES (:matric,:password)";
        $op = $conn->prepare($sql);
        $op->execute(array(

            ':matric' => $matric,
            ':password' => $password
        ));

    }
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../design.css">
    <title>Document</title>
</head>
<body>
     <div class="admin" id="left">
        <div class="adminheader">
            <h2>Examiner</h2>
        </div>

        <form action="" method="POST">
            <label for="">Name :</label>
            <br>
            <input class="input" type="text" name="name" id="">
            <br>
            <hr>
            <label for="">Password :</label>
            <br>
            <input class="input" type="password" name="password" id="push">
            <input type="submit" name="examiner" value="Log in" id="">
            <hr>
        </form>
    </div>

     <div class="admin" id="right">
        <div class="adminheader">
            <h2>Student</h2>
        </div>

        <form action="" method="POST">
            <label for="">Matric No :</label>
            <br>
            <input class="input" type="text" name="matric" id="">
            <br>
            <hr>
            <label for="">Password :</label>
            <br>
            <input class="input" type="password" name="password" id="push">
            <input type="submit" name="student" value="Log in" id="">
            <hr>
        </form>
    </div>
</body>
</html>