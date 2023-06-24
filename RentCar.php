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
    <div class="w-100 d-flex my-2">
        <div id="carouselExampleControls" class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 border border-black carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://robbreport.com/wp-content/uploads/2021/07/1-15.jpg" class="d-block w-100" alt="..1">
                </div>
                <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROwB77CFgLzmAsX1M6O3tTFlUiP8ogvRO6MUQlcEn61MFTFD5Gz_HraLzE3zP9ZS-_rUg&usqp=CAU" class="d-block w-100" alt="..2">
                </div>
                <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXC7WDr2UFu81AZTE0ET4vsLEAbfdlIWgbP3yyQmAxCG_Pe6WKmxLzJu7H9v_06bv-w-8&usqp=CAU" class="d-block w-100" alt="..3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 p-2 ">
            <h3 class="text-center">CAR NAME</h3>
            <div class="p-2">
                <label>Car Type : </label>
                <span>SEDAN</span>
            </div>
            <div class="p-2">
                    <label>Location : </label>
                    <span>SWEDAN</span>
            </div>
            <div class="p-2">
                    <label>Rent Price : </label>
                    <span>SEDAN</span>
            </div>
            <form>
                <div class="p-2">
                    <label>Days : </label>
                    <input type="number" placeholder="Enter the Days" class="p-2 w-100" />
                </div>
                <div class="p-2">
                    <label>Total Price :</label>
                    <span>57000</span>
                </div>
                <div class="d-flex flex-row gap-2">
                    <input type="submit" value="Add to Cart" class="p-2 w-50 btn btn-secondary" />
                    <input type="submit" class="p-2 w-50 btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include './Components/Footer/Footer.php'?>
    </body>
</html>