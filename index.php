<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMN</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color:black" class="text-white">
    <?php $page='index'; include './Components/Navbar/Navbar.php'?>

    <div class="d-flex justify-content-center align-items-center" 
    style="background-image : url('./Images/Backgroundtwo.jpg'); background-repeat:no-repeat; background-position:center;background-size:cover; height:350px;" class="w-100">
      <form action="" class="w-75 d-flex flex-row gap-2">
        <input type="text" placeholder="Enter the Car" class="p-2 rounded w-50"/>
        <select class="p-2 rounded w-25">
          <option selected disabled value="all">Select Location</option>
          <option value="Lahore">Lahore</option>
          <option value="Karachi">Karachi</option>
          <option value="Peshawar">Peshawar</option>
          <option value="Islamabad">Islamabad</option>
        </select>
        <input type="submit" class="btn btn-primary w-25"/>
      </form>
    </div>

    <div class="mx-auto p-2 my-2" style="width:90%">
      <div>
        <h3>Cars Types</h3>
        <div>
          <div class="row row-cols-1 row-cols-md-4 g-4 text-uppercase">
              <div class="col">
                <div class="card bg-light text-center border-0 text-center">
                  <img src="./Images/sedan.png" style="width:35%" class="card-img-top mx-auto" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SEDAN</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center border-0">
                  <img src="./Images/sports.png" style="width:35%" class="card-img-top mx-auto" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sports</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center border-0">
                  <img src="./Images/suv.png" style="width:35%" class="card-img-top mx-auto" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SUV</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center border-0">
                  <img src="./Images/ev.png" style="width:35%" class="card-img-top mx-auto" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">EV</h5>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div>
        <h3 class="mt-3">Popular Cars</h3>
        <div>
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card">
                <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/pnr/porsche_newsroom/Produkte/918-Spyder/918-Spyder5/jcr:content/918%20Spyder%20mittig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/pnr/porsche_newsroom/Produkte/918-Spyder/918-Spyder5/jcr:content/918%20Spyder%20mittig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/pnr/porsche_newsroom/Produkte/918-Spyder/918-Spyder5/jcr:content/918%20Spyder%20mittig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1290x726/dam/pnr/porsche_newsroom/Produkte/918-Spyder/918-Spyder5/jcr:content/918%20Spyder%20mittig.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include './Components/Footer/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>