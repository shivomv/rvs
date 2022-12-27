<?php
   $login = false;
   $showError = false;
    // Database connection
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    include('partials/_dbconnect.php');

      	$username = $_POST["username"];
      	$password = $_POST["password"];

        $sql = "SELECT * From rvs_admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
      
        if ($num == 1){
          while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])) {
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['usename'] = $username;
              $login = true;
              ?>
   <?php
            }
            else{
              $showError = true;
            }  
        }
        }
      else{
        $showError = true;
      
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../img/राष्ट्रीय विद्यार्थी सभा🇮🇳 20210605_112159.jpg" rel="icon" type="image/jpg" />
<link rel="stylesheet" href="../css/popup-style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>RVS | login</title>
  </head>
  <body    style="background-color:antiquewhite">
    
      <div class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
          <h1 class="text-center">Admin login</h1>
      <form action="/new/admin/login.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="username">User_Name</label>
    <input type="text" class="form-control" id="username"  name="username" required>
   
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>

</form>

          </div>
          <div class="col-3"></div>
        </div>
      </div>
  
        <div class="row my-4">
          <div class="col">
  <?php
   if($login){?>
       
    <!-- popup success message -->
    <div class="popup popup--icon -success js_success-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
        <h3 class="popup__content__title">
          Success 
        </h1>
        <p>Login Successfully</p>
        <p>
        <?php echo "<script>setTimeout(\"location.href = 'dashboard.php';\",2000);</script>"; ?>
        </p>
      </div>
    </div>
    <?php
    }
    ?>
  <?php
   if($showError){
       
    echo  '<div class="popup popup--icon -error js_error-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
      <h3 class="popup__content__title">
        Error 
      </h1>
      <p>Incorrect username or password.</p>
      <p>
        <a href=""><button class="button button--error" data-for="js_error-popup">Close</button></a>
      </p>
    </div>
  </div>
       ' ;
    }
    ?>
    </div>
        </div> 
        
        <div class="container text-center">
        <button type="submit" class="btn btn-primary" onclick="document.location='../index.php'">👉 Go to main Site 👈</button>
        </div>
      
         
   
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
      
               
