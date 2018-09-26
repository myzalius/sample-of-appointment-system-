
<!DOCTYPE html> 
<html>
<head>
  <title></title>
</head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<body>
  <?php
  include("connection.php");
  $sql="SELECT* FROM APPOINTMENT ORDER BY DATE";
  $query=mysqli_query($conn,$sql)(;
    $results=mysqli_num_rows($query);
  $row=mysqli_fetch_array( results);
?>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</body>
</html>

