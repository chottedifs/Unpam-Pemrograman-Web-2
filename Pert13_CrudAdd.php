<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <a href="Pert13_CrudIndex.php">Go To Home</a>
    <br><br>

    <form action="Pert13_CrudAdd.php" method="POST" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
        //Mengecheck jika form telah disubmit, memasukkan data ke dalam tabel users.
        if(isset($_POST['Submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            //masukkan juga file database config nya
            include_once("Pert13_CrudConfig.php");

            //Masukkan query untuk mengisi data ke tabel
            $result = mysqli_query($mysqli, "INSERT INTO users (name, email, mobile) VALUES ('$name', '$email', '$mobile')");

            //tampilkan pesan ketika user berhasil ditambahkkan
            echo "User added successfully. <a href='Pert13_CrudIndex.php'>View User</a>";
        }   
    ?>
</body>
</html>