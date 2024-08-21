<?php 

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"electro");

if(isset($_POST["click"]))
{

  $name=$_POST["name"];

  $email=$_POST["email"];

  $mobile=$_POST["mobile"];

  $password=$_POST["password"];

  $city=$_POST["city"];

  $qry="insert into table_register(name,email,mobile,password,city) values('".$name."','".$email."','".$mobile."','".$password."','".$city."')";

  mysqli_query($con,$qry);

  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- OWN LINK    -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="resposive.css" />
  <link rel="stylesheet" href="Electro.html" />

  <!-- FONT AWESOME LINK  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <!-- JQUERY LINK  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" />
</head>

<body>
  <div class="container-fluid" style="background-color: #19d3c0">
    <div class="container">
      <br />
      <br />

      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 p-0">
              <img src="photos/form-v8.jpg" style="
                    border: none;
                    background: none;
                    padding: 0px;
                    border-top-left-radius: 20px;
                    border-top-right-radius: 0px;
                    border-bottom-left-radius: 20px;
                    border-bottom-right-radius: 0px;
                  " class="img-thumbnail" alt="..." width="400px" height="400px" />
            </div>
            <div class="col-md-5 p-0 m-0" style="
                  background-color: #3d5983;
                  border-top-right-radius: 20px;
                  border-bottom-right-radius: 20px;
                ">
              <center>
                <h3 style="color: white">REGISTER PAGE</h3>
              </center>
              <center>
                <form method="post">
                  <table border="2px" cellpadding="10px">
                    <tr>
                      <td>
                        <h5><b style="color: orange">Enter Your Name</b></h5>
                      </td>
                      <td>
                        <input type="text" name="name" id="name" required />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <h5 style="color: orange"><b>Enter Your Email</b></h5>
                      </td>
                      <td>
                        <input type="email" name="email" id="email" required />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <h5 style="color: orange">
                          <b>Enter Your Number</b>
                        </h5>
                      </td>
                      <td>
                        <input type="text" name="mobile" id="mobile" required />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <h5 style="color: orange">
                          <b>Enter Your Password</b>
                        </h5>
                      </td>
                      <td>
                        <input type="password" name="password" id="password" required />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <h5 style="color: orange"><b>Retype Password</b></h5>
                      </td>
                      <td>
                        <input type="password" id="password" required />
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <h5 style="color: orange"><b>Enter Your City</b></h5>
                      </td>
                      <td>
                        <input type="text" name="city" id="city" required />
                      </td>
                    </tr>

                    <tr>
                      <td></td>
                      <td>
                        <button type="submit" name="click" class="btn btn-outline-warning">
                          <b>REGISTER</b>
                        </button>
                      </td>
                    </tr>
                  </table>

                </form>
                <a href="login.php">
                  <td><button type="submit" name="click" class="btn btn-outline-warning">
                      <b>Login</b>
                    </button></td>
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <br /><br />
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>