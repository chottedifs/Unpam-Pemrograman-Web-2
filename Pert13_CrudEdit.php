<?php
//masukkan juga file database config nya
include_once("Pert13_CrudConfig.php");

//Cek jika form disubmit untuk user update, kemudian redirect ke homepage setelah data diupadte
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    //Update data
    $result = mysqli_query($mysqli, "UPDATE users SET 
        name = '$name',
        email = '$email',
        mobile = '$mobile' WHERE
        id = $id");

    //Redirect ke Homepage untuk melihat data user yang diupdate
    header("Location: Pert13_CrudIndex.php");
}
?>
<?php
//Menampilkan data berdasarkan ID
//mengambil id ddri URL
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

while ($user_data = mysqli_fetch_array($result)) {
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>

<body>
    <a href="Pert13_CrudIndex.php"></a>
    <br><br>

    <form method="POST" action="Pert13_CrudEdit.php" name="update_user">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?= $name; ?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?= $email; ?>></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="mobile" value=<?= $mobile; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?= $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>