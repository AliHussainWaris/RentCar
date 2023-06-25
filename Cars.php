<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMN</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color:black;" class="text-white">
    <?php $page="Car"; include './Components/Navbar/Navbar.php'?>
    <?php include './Connection/conn.php'?>
    <div class="w-100 row my-2">
      <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mx-auto">
      <form>
        <h2 class="text-center">Filter the Cars</h2>
        <div class="w-75 mx-auto">
          <h4 class="text-left">Choose Car</h4>
          <div class="w-100 mx-auto d-flex flex-row p-2">
            <div class="d-flex flex-column w-25 text-center">
              <input type="checkbox"/>
              <label>Sedan</label>
            </div>
            <div class="d-flex flex-column w-25 text-center">
              <input type="checkbox"/>
              <label>SUV</label>
            </div>
            <div class="d-flex flex-column w-25 text-center">
              <input type="checkbox"/>
              <label>Sports</label>
            </div>
            <div class="d-flex flex-column w-25 text-center">
              <input type="checkbox"/>
              <label>EV</label>
            </div>
          </div>
          <h4 class="text-left">Rent Price</h4>
          <div class="text-center">
            <h5 id="rangevalue">0</h5>
          </div>
          <div class="w-100 mx-auto d-flex flex-row p-2">
            <input id="getValue" type="range" min="500" step="500" value="" max="50000" class="w-100"/>
          </div>
          <h4 class="text-left">Choose Car</h4>
          <div class="w-100 mx-auto p-2">
            <div class="d-flex flex-row w-100 text-left p-2">
              <input type="checkbox"/>
              <label>Porsche</label>
            </div>
            <div class="d-flex flex-row w-100 text-left p-2">
              <input type="checkbox"/>
              <label>Toyota</label>
            </div>
            <div class="d-flex flex-row w-100 text-left p-2">
              <input type="checkbox"/>
              <label>Nissan</label>
            </div>
            <div class="d-flex flex-row w-100 text-left p-2">
              <input type="checkbox"/>
              <label>Tesla</label>
            </div>
            <div class="d-flex flex-row w-100 text-left p-2">
              <input type="checkbox"/>
              <label>Honda</label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary rouneded-circle w-100"/>
        </div>
      </form>
      </div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 mx-auto">
        <div style="width:95%" class="mx-auto p-2">
          <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
            $name = $_COOKIE["carbrand"];
            $sql;
            if($name == "All" ){
              $sql = "SELECT * from cars";
            }else{
              $sql = "SELECT * FROM `cars` WHERE name = '$name'";
            }
            $result = mysqli_query($con , $sql);
            foreach($result as $results){
            echo "<div class='col'>
              <div class='card'>
                <img src='UploadImages/".$results['mainimage']."' class='card-img-top' alt='...'>
                <div class='card-body text-center'>";
                  echo"<h4 class='card-title'>".$results['name']."</h4>";
                  echo"<h5 class='card-title'>".$results['price']."</h5>";
                echo"</div>
              </div>
            </div>";};
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include './Components/Footer/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      var value = document.getElementById("rangevalue");
      var getValue = document.getElementById("getValue");
      value.innerHTML = getValue.value;

      getValue.addEventListener("input", function () {
        value.innerHTML = getValue.value;
      });
    </script>
  </body>
</html>