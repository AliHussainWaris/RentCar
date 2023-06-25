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
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <img src="./Images/Logo.png" width="50px" alt="Logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLight" aria-controls="navbarLight" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarLight">
        <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='index'){echo"active border-bottom border-light";}?>" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='Car'){echo"active border-bottom border-light";}?>" onClick="data('All')" aria-current="page" href="./Cars.php">Cars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='About'){echo"active border-bottom border-light";}?>" aria-current="page" href="./About.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='Blog'){echo"active border-bottom border-light";}?>" aria-current="page" href="./Blog.php">Blog</a>
            </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item">    
                <a href="./Cart.php" class="nav-link <?php if($page=='cart'){echo"active border-bottom border-light";}?>">
                    <i class="bi bi-cart text-white p-2" style="font-size:20px"></i>
                </a>
            <li>
            <li class="nav-item">
                <a href="./Account.php" class="nav-link <?php if($page=='account'){echo"active border-bottom border-light";}?>">
                    <i class="bi bi-person text-white p-2" style="font-size:20px"></i>
                </a>
            <li>
        </ul>
    </div>
    </nav>
    <script>
        function data(name){
            document.cookie = "carbrand = "+name;
        }
    </script>
</body>
</html>