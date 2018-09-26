 <?php 
    include('connection.php');
    session_start();

    if(isset($_POST['submit'])){

        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=($_POST['password']);
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $run_query=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($run_query);

        if($count==1){
                $row=mysqli_fetch_array($run_query);
                $_SESSION['id']=$row['user_id'];
                $_SESSION['username']=$row['first_name'];
                echo "true";
                header("location:userview.php");
        }
            
    }

 ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>log in
        </title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>
    <body class="text-center">
       
        <form class="form-signin" action="" method="post" >
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputemail" class="form-control" placeholder="email" required name="email" >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" ="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy;2018 </p>
        </form>
    
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
