<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="design.css">
    <title>Document</title>
</head>

<body>
    <div class="area">
        <table class="design">
            <tr>
                <td class="homepage">
                    <a onclick="document.getElementById('studentform').style.display='block'" style="width:auto;">
                        <img class="Todo" src="images/avatar.png">
                    </a>
                </td>
                <td class="homepage">
                    <a onclick="document.getElementById('examiner').style.display='block'" style="width:auto;">
                        <img class="Todo" src="images/avatar.png">
                    </a>
                </td>
            </tr>
        </table>

        <div class="item" id="studentform">
            <div class="form-content animate">
                <form action="login/stud-login.php" class="formo" method="POST">
                    <label for="">Matric Number :</label>
                    <br>
                    <input type="text" name="matric" id="">
                    <br>
                    <hr>
                    <label for="">Password</label>
                    <br>
                    <input type="password" name="password" id="">
                    <br>
                    <hr>
                    <input type="submit" name="stud_login" id="" value="Log in">
                </form>
            </div>
        </div>

        <div class="item" id="examiner">
            <div class="form-content animate">
                <form action="login/examiner.php" class="formo" method="POST">
                    <label for="">Name :</label>
                    <br>
                    <input type="text" name="name" id="">
                    <br>
                    <hr>
                    <label for="">Password</label>
                    <br>
                    <input type="password" name="password" id="">
                    <br>
                    <hr>
                    <input type="submit" name="exam_login" id="" value="Log in">
                </form>
            </div>
        </div>
    </div>

    <div class="admin">
        <div class="adminheader">
            <h2>Admin</h2>
        </div>

        <form action="login/admin.php" method="POST">
            <label for="">Name :</label>
            <br>
            <input class="input" type="text" name="name" id="">
            <br>
            <hr>
            <label for="">Password :</label>
            <br>
            <input class="input" type="password" name="password" id="push">
            <input type="submit" name="admin" value="Log in" id="">
            <hr>
        </form>
    </div>

</body>

</html>