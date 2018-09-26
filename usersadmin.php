

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dashboard for users</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
</head>
<body>

<div class="box-content" class="col-md-3">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Email Address</th>
                  <th>Actions</th>
                </tr>
              </thead>
              
              <?php
                include('connection.php');

                $sql = "SELECT * FROM users ORDER BY id";
                $result=mysqli_query($conn,$sql); //rs.open sql,con
                $users=mysqli_fetch_assoc($result);
                
        while ($row = mysqli_fetch_assoc($result)) { 
               echo '<tr>
                  <td scope="row">' . $row["firstname"] .'</td>
                   <td>' . $row["lastname"] .'</td>
                  <td> '.$row["email"] .'</td>'
                  ?>
                <td class="center">
                  <a class="btn btn-info" href="confirm_appointment.php?uID=<?php echo $users['id']; ?>">
                    <i class="halflings-icon white edit"></i> confirm
                  </a>
                  <a class="btn btn-danger" onclick="return confirmDel()" href="delete_data.php?delID=<?php echo $users['id'];?>">
                    <i class="halflings-icon white trash"></i> delete
                  </a>
                </td>
              </tr><?php
            }//end of while
            ?>            
              </tbody>
            </table>            
          </div>
          <div>
            <a href="dashboard.php" style="float: center;">back</a>
          </div>
       </body>
</html>
