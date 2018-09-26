
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>view-page</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    </head>
    <a class="nav-link" href="index.html" style=" float:right; background-color: rgb(51, 51, 51); font-size: 1rem; display: inline !important;">log out</a>
   
    <div class="jumbotron">
          <h1 class="display-4">Hello, welcome back! </h1>
          <p class="lead">take your time and please make your appointement.</p>
          <hr class="my-4">
          <div class="form-group row">
        <div class="col-sm-10">
</div>
     <h3>select your faculty</h3>
         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
          </div>
           <?php 
require("connection.php");
if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $faculty=$_POST['faculty'];
        $date=$_POST['date'];
        $sql="INSERT INTO 'appointments' ('id', 'username', 'faculty', 'date')
                  VALUES( '','".$username."','".$faculty."', '".$date."')";
$results=mysqli_query($conn,$sql);
if(!empty($result))
            {
                header("location:confirmation.php");
            }

        
      }
    
?><form method="post" action="">
          <select class="custom-select" id="inputGroupSelect01" required="required" name="faculty" >
            <option selected>Choose..</option>
            <option  value="office of chancellor">office of chancellor </option>
            <option  value="office of vice-chancellor">office of vice-chancellor</option>
            <option  value="dean of school of science">dean of school of science</option>
            <option  value="dean of school of education">dean of school of education</option>
            <option  value="dean of school of SANRES">dean of school of SANRES</option>
            <option  value="dean of school of business">dean of school of business</option>
            <option  value="dean of school of ARTS">dean of school of ARTS</option>
            <option  value="dean of school of infocoms">dean of school of infocoms</option>

          </select>
           </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="username"value="<?=$username?>">
            <input type="date" name="date" class="form-control" placeholder="appointement date"value="<?=$date?>">
            <input type="submit"  class="btn btn-lg btn-secondary"name="submit" value="send your appointement">
       </form>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
