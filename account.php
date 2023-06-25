<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMN</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php include './Connection/conn.php'?>
    <?php
        session_start();

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE email = '$email' AND userpassword = '$password'";
            $result = mysqli_query($con, $sql);
            $login = mysqli_num_rows($result);

            if ($login > 0) {
                $row = mysqli_fetch_assoc($result);
                $userRole = $row['userole'];
                $userID = $row['userid'];
                setcookie("userLoginId" , $userID);
                if ($userRole == "False") {
                    header("Location: index.php");
                    exit();
                } else {
                    header("Location: Dashboard.php");
                    exit();
                }
            } else {
                echo "Invalid email or password";
            }
        }
    ?>


    <?php $page="Account"; include './Components/Navbar/Navbar.php'?>
    <div class="w-100 d-flex justify-content-center item-content-center p-4 text-white"
    style="background-image:url('./Images/Logo.png'); background-color:black; background-position:center; background-size:contain; background-repeat:no-repeat;" class="w-100 text-white">
        <div class="border border-white rounded p-3" style="width:35%">
            <div class="text-center">
                <img src="./Images/Logo.png" class="bg-white rounded-circle p-2 mx-auto" width="15%" alt="Logo"/>
            </div>
            <h3 class="text-center">Login</h3>
            <form class="d-flex flex-column gap-2" method="POST" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check text-center">
                    <label class="form-check-label" for="exampleCheck1">Don't have an account ? <a href="./Signup.php" class="text-white">Sign Up</a></label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php include './Components/Footer/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>