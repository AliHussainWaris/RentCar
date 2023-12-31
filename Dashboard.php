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
      <?php include './Components/Sidebar/Sidebar.php'?>
      <?php include './Connection/conn.php'?>
      <?php
        if (isset($_POST['submit'])) {
            $image=$_FILES['image']['name'];
            $car = $_POST["car"];
            $model = $_POST["model"];
            $price = $_POST["price"];
            $location = $_POST["location"];
            $target="UploadImages/".basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'] , $target);

            $sqs = "INSERT INTO cars(name, model, price, location, mainimage) VALUES ('$car', '$model', '$price', '$location', '$image')";
            try {
                $check = mysqli_query($con, "SELECT 1 FROM cars LIMIT 1");
                mysqli_query($con, $sqs);
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
                $sqled = "CREATE TABLE cars(carid integer PRIMARY KEY AUTO_INCREMENT, name varchar(255), model varchar(225), price integer, location varchar(50), mainimage text);";
                $result = mysqli_query($con, $sqled);
                if ($result) {
                    $sqs = "INSERT INTO cars(name, model, price, location, mainimage) VALUES ('$car', '$model', '$price', '$location', '$image')";
                    // $sqs = "INSERT INTO cars(name, model, price, location, mainimage) VALUES ('$car', '$model', '$price', '$location', '$mainimage')";
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
            <form class="w-50 mx-auto" method="POST" action="" enctype="multipart/form-data">
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
                  <input type="file" name="image" class="form-control" id="exampleInputImage">
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </form>
          </div>
          <?php
          $sql = "SELECT * from cars";
          $result = mysqli_query($con,$sql);

          echo "<table class='table table-dark text-center'>
            <tr>
              <th>#</th>
              <th>Car Name</th>
              <th>Price</th>
              <th>Location</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>";
            foreach($result as $results){
            echo "<tr>";
              echo"<td>".$results['carid']."</td>";
              echo"<td>".$results['name']."</td>";
              echo"<td>".$results['model']."</td>";
              echo"<td>".$results['location']."</td>";
              echo"<td>
                <button class='btn btn-warning text-white'>
                  <i class='bi bi-pencil-square'></i>
                </button>
              </td>
              <td>
                <a href='./DeleteCar.php' onClick='cardatas(".$results['carid'].")' class='btn btn-danger text-white'>
                  <i class='bi bi-trash'></i>
                </a>
              </td>
             </tr>";
            };
            echo"</table>";
          ?>
        </div>
      </div>
    </div>
    <script>
      function cardatas(carid){
        document.cookie = "carid=" + carid;
      }
    </script>
  </body>
</html>