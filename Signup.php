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
    
    <?php $page="Account"; include './Components/Navbar/Navbar.php'?>
    <?php include './Connection/conn.php'?>
    <?php
    session_start();

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $homephone = $_POST['homephone'];

        $sql = "INSERT INTO users (name, email, `userpassword`, address, homephone, workphone, userole) VALUES ('$name', '$email', '$password', '$address', '$homephone', 'XXX-XXXXX', 'False')";
        
        try {
            mysqli_query($con , $sql);
            $check = mysqli_query($con, "SELECT 1 FROM users LIMIT 1");
            
            if (!$check) {
                echo "<div class='align-items-center text-bg-danger border-0 p-3 mt-2 rounded w-50 mx-auto mb-2' id='alert' onClick='clicked()'>
                        <div class='d-flex'>
                            <div class='toast-body'>
                                Error in Sending Data!
                            </div>
                            <button type='button' class='btn-close btn-close-white me-2 m-auto' data-bs-dismiss='toast' aria-label='Close'></button>
                        </div>
                    </div>";
            } else {
                header("Location: account.php");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            $sqled = "CREATE TABLE users(userid integer PRIMARY KEY AUTO_INCREMENT , name varchar(255) , email varchar(250) NOT NULL, userpassword varchar(255) NOT null , address text not null, homephone varchar(255) not null, workphone varchar(255) , userole varchar(10) not null)";
            $result = mysqli_query($con, $sqled);
            if ($result) {
                $sqs = "INSERT INTO users (name, email, `userpassword`, address, homephone, workphone, userole) VALUES ('$name', '$email', '$password', '$address', '$homephone', 'XXX-XXXXX', 'False')";
                $result = mysqli_query($con, $sqs);

                header("Location: account.php");
                exit();
            } else {
                echo "<div class='align-items-center text-bg-danger border-0 p-3 mt-2 rounded w-50 mx-auto mb-2' id='alert' onClick='clicked()'>
                        <div class='d-flex'>
                            <div class='toast-body'>
                                User already exists!
                            </div>
                            <button type='button' class='btn-close btn-close-white me-2 m-auto' data-bs-dismiss='toast' aria-label='Close'></button>
                        </div>
                    </div>";
            }
        }
    }
    ?>

    <div class="w-100 d-flex justify-content-center item-content-center p-4 text-white"
    style="background-image:url('./Images/Logo.png'); background-color:black; background-position:center; background-size:contain; background-repeat:no-repeat;" class="w-100 text-white">
        <div class="border border-white rounded p-3" style="width:35%">
            <div class="text-center">
                <img src="./Images/Logo.png" class="bg-white rounded-circle p-2 mx-auto" width="15%" alt="Logo"/>
            </div>
            <h3 class="text-center">Sign Up</h3>
            <form class="d-flex flex-column gap-2" method="POST" action="">
                <div class="d-flex gap-2">
                    <div class="form-group w-50">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="name" class="form-control" id="exampleInputusername" aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group w-50">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div class="form-group w-50">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputusername" aria-describedby="emailHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group w-50">
                        <label for="exampleInputEmail1">Phone No</label>
                        <input type="text" name="homephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="form-group form-check text-center">
                    <label class="form-check-label" for="exampleCheck1">Have an account! <a href="./Account.php" class="text-white">Login</a></label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php include './Components/Footer/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>