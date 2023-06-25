<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HAMN</title>
      <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style="background-color:black" class="text-white">
    <div class="w-100 p-2 d-flex flex-row gap-2">
      <div class="d-flex flex-column gap-2" style="width:20%">
        <div>
          <ul class="nav justify-content-around">
            <li>
              <img src="./Images/Logo.png" width="40px" alt="Logo"/>
            </li>
            <li>
              <h4>Dashboard</h4>
            </li>
          </ul>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item text-white bg-secondary">
            <a href="#" class="text-white text-decoration-none">
              <i class="bi bi-house"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="list-group-item text-white bg-secondary">
            <a href="#" class="text-white text-decoration-none">
              <i class="bi bi-person"></i>
              <span>User</span>
            </a>
          </li>
        </ul>
      </div>
      <?php include './Connection/conn.php'?>
      <?php 
        if (isset($_POST['submit'])) {
          $car = $_POST["car"];
          $model = $_POST["model"];
          $price = $_POST["price"];
          $location = $_POST["location"];
          $mainiamge = $_FILES["mainimage"]["name"];
          $tempname1 = $_FILES["mainimage"]["tmp_name"];
          $folder1 = "./UploadImages/" . $mainiamge;
          move_uploaded_file($tempname1, $folder1);

          $sqs = "INSERT INTO cars(name , model , price , location , mainimage) VALUES ($car , $model , $price , $location , $mainiamge)";
          try {
              $check = mysqli_query($con, "SELECT 1 FROM cars LIMIT 1");
              mysqli_query($con , $sqs);
              if (!$check) {
                  echo "<div class='align-items-center text-bg-danger border-0 p-3 mt-2 rounded w-50 mx-auto mb-2' id='alert' onClick='clicked()'>
                          <div class='d-flex'>
                              <div class='toast-body'>
                                  Error in Sending Data!
                              </div>
                              <button type='button' class='btn-close btn-close-white me-2 m-auto' data-bs-dismiss='toast' aria-label='Close'></button>
                          </div>
                      </div>";
              }
          } catch (mysqli_sql_exception $e) {
              $sqled = "CREATE TABLE cars(carid integer PRIMARY KEY AUTO_INCREMENT,name varchar(255) , model varchar(225) , price integer , location varchar(50),
              mainimage varchar(255));";
              $result = mysqli_query($con, $sqled);
              if ($result) {
                  $sqs = "INSERT INTO cars(name , model , price , location , mainimage) VALUES ($cars , $model , $price , $location , $mainiamge)";
                  $result = mysqli_query($con, $sqs);
                  exit();
              }
          }
        }
      ?>
      <div style="width:80%;">
        <h1 class="text-center">DASHBOARD</h1>
        <div class="mx-auto" style="width:80%;">
          <div class="mb-5 mt-5">
            <form class="w-50 mx-auto" method="POST" action="">
              <div class="d-flex gap-2">
                <div class="form-group">
                  <label>Car</label>
                  <input type="text" name="car" class="form-control" placeholder="Enter Car">
                </div>
                <div class="form-group w-50">
                  <label >Model</label>
                  <input type="text" name="model" class="form-control" placeholder="Enter Model">
                </div>
              </div>
              <div class="d-flex gap-2">
                <div class="form-group">
                  <label >Price</label>
                  <input type="number" name="price" class="form-control" placeholder="Enter Car">
                </div>
                <div class="form-group w-50">
                  <label for="exampleInputPassword1">Location</label>
                  <select class="form-control" name="location">
                    <option selected disabled>Select Location</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Peshawar">Peshawar</option>
                  </select>
                </div>
              </div>
              <div class="d-flex flex-column gap-2">
                <div class="form-group">
                  <label for="exampleInputImage">Main Image</label>
                  <input type="file" name="mainimage" class="form-control" id="exampleInputImage">
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </form>
          </div>
          <Table class="table table-dark text-center">
            <tr>
              <th>#</th>
              <th>Car Name</th>
              <th>Price</th>
              <th>Location</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <button class="btn btn-warning text-white">
                  <i class="bi bi-pencil-square"></i>
                </button>
              </td>
              <td>
                <button class="btn btn-danger text-white">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
          </Table>
        </div>
        <div>
          <table class="table table-dark text-center">
            <tr>
              <th>UserID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Location</th>
              <td>Admin</td>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            <tr>
              <td>UserID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Password</td>
              <td>Admin</td>
              <td>Location</td>
              <td>
                <button class="btn btn-warning text-white">
                  <i class="bi bi-pencil-square"></i>
                </button>
              </td>
              <td>
                <button class="btn btn-danger text-white">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>