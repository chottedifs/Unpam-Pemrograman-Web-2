<?php
    session_start();
    if(isset ($_POST['Login'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //Periksa Login
        if($user == "aldihusadif" && $pass = "123"){
            //Menciptakan Session
            $_SESSION['login'] = $user;

            //Menuju ke halaman pemeriksaan session
            echo "<h1>Anda Berhasil Login</h1>";
            echo "<h2>Klik <a href='Pert14_session2.php'>disini (Pert14_session2.php)</a> Untuk menuju ke halaman pemeriksaan session ";
        } else {
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user"><br>
        password : <input type="text" name="pass"><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>