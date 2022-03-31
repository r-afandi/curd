<?php
include_once("config.php");
//
if (isset($_POST['update'])) {
  // code...
  $id= $_POST['id'];
  $nim = $_POST['nim'];
  $name = $_POST['name'];
    $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  //
  $result = mysqli_query($mysqli,"UPDATE users SET nim='$nim',name='$name',email='$email',mobile='$mobile' WHERE id=$id");
  //
  header("Location: index.php");
}
?>
<?php
//
$id = $_GET['id'];
//
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
  $nim = $user_data['nim'];
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User Data</title>
  </head>
  <body>
    <a href="index.php">Home</a>
    <br>
    <form action="edit.php" method="post" name="update_user">
    <table width="25%" border="0">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?= $name; ?>"></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" value="<?= $nim; ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email"value="<?= $email; ?>"></td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td><input type="text" name="mobile" value="<?= $mobile; ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" name="id" value="<?= $_GET['id']; ?>"></td>
        <td><input type="submit" name="update" value="Update"></td>
      </tr>
    </table>
  </form>


  </body>
</html>
