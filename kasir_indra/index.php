<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Kasir Sederhana</title>
</head>
<body>
  <h1> <center>Aplikasi Kasir Sederhana</center></h1>
  <form method="post" action="proses.php">
    <table border="1" align="center">
      <tr> 
        <td><center> Item </center></td>
        <td><center> Harga </center></td>
        <td><center> Jumlah </center></td>
      </tr>
      <tr>
        <td>Komputer</td>
        <td>Rp10.000.000</td>
        <td><input type="number" name="jumlah_item1" min="0"></td>
      </tr>
      <tr>
        <td>Laptop</td>
        <td>Rp2.500.000</td>
        <td><input type="number" name="jumlah_item2" min="0"></td>
      </tr>
      <tr>
        <td>Hardisk</td>
        <td>Rp200.000</td>
        <td><input type="number" name="jumlah_item3" min="0"></td>
      </tr>
      <tr>
        <td>Ram DDR3 4GB</td>
        <td>Rp220.000</td>
        <td><input type="number" name="jumlah_item4" min="0"></td>
      </tr>
      <tr>
        <td colspan="5"><input type="submit" value="Hitung Total"></td>
      </tr>
    </table>
  </form>
</body>
</html>
