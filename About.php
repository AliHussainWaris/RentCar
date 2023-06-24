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
    <?php $page="About"; include './Components/Navbar/Navbar.php'?>
    <div
      class="d-flex flex-column justify-content-center item-content-center gap-4 p-4" 
      style="background-image:url('./Images/Logo.png');background-color:black;background-position:center; background-size:contain; background-repeat:no-repeat;" class="w-100">
      <div class="text-white d-flex border border-white mx-auto rounded-pill p-2 gap-2" style="width:75%" >
        <img src="./Images/Ali.jpg" class="rounded-circle" width="15%" alt="Ali Hussain"/>
        <div class="d-flex flex-column justify-content-center w-75">
          <h3>Ali Hussain</h3>
          <h4>Founder - Verdiend</h4>
          <p>UI/UX Designer & Developer | Building Intuitive Interfaces for Web & Mobile Applications</p>
        </div>
      </div>
      <div class="text-white d-flex border border-white mx-auto rounded-pill p-2 gap-2" style="width:75%" >
        <img src="./Images/Momin.jpeg" class="rounded-circle" width="15%" alt="Ali Hussain"/>
        <div class="d-flex flex-column justify-content-center w-75">
          <h3>Syed Momin Hussnain</h3>
          <h4>CoFounder - Verdiend</h4>
          <p>Building Intuitive Interfaces for Web & Mobile Applications</p>
        </div>
      </div>
    </div>
    <?php include './Components/Footer/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>