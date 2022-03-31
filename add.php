<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
  </head>
  <body>
    <a href="index.php">kembali ke Beranda</a>
    <br>
    <form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
      <tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
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
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>


    </form>
    <?php
    //form
    if (isset($_POST['Submit'])) {
      // code...
      $name = $_POST['name'];
      $nim = $_POST['nim'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];

      include_once("config.php");
      //
      $result = mysqli_query($mysqli,"INSERT INTO users (nim,name,email,mobile) VALUE ('$nim','$name','$email','$mobile')");
      //
      echo "User sukses ditambah. <a href='index.php'> View Users</a>";
    }
     ?>
  </body>
</html>
