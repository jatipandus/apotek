<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>APOTEK</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Registrasi</h1>
    <form action="simpan_customer.php" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
