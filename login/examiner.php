<?php
require_once 'connect.php';

if (isset($_POST['exam_login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

        if (empty($_POST['name'])) {
            header('Location:../index.php');
        }

        if (empty($_POST['password'])) {
            header('Location:../index.php');
        }



    $sql = $conn->prepare('SELECT id,name,password FROM csc405.examiner WHERE name = :name');

    $sql->execute(array(
        'name' => $name
    ));

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    if ($data == false) {
        echo "Invalid name";
        header('Location:../index.php');
    } else {
        if ($password == $data['password']) {
            $_SESSION['name'] = $data['name'];
            $_SESSION['password'] = $data['password'];


            header('location:../pages/examiner.php');
            exit;
        } else {
            echo 'invalid password';
        }
    }
}
?>