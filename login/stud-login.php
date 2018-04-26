<?php
    require_once 'connect.php';

    if(isset($_POST['stud_login'])){
        $matric = $_POST['matric'];
        $password = $_POST['password'];

        if (empty($_POST['matric'])) {
            header('Location:../index.php');
        }

        if (empty($_POST['password'])) {
            header('Location:../index.php');
        }


        $sql = $conn->prepare('SELECT id,matric,password FROM csc405.students WHERE matric = :matric');

        $sql->execute(array(
            'matric' => $matric
        ));

        $data = $sql->fetch(PDO::FETCH_ASSOC);

        if($data == false){
            echo "Invalid Matric";
            header('Location:../index.php');
        }
        else {
            if($password == $data['password']){
                $_SESSION['matric'] = $data['matric'];
                $_SESSION['password'] = $data['password'];
                

                header('Location:../pages/student.php');
                exit;
            }
            else{
                echo 'invalid password';
            }
        }
    }
?>