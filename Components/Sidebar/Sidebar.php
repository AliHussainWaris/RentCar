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
            <a href="Dashboard.php" class="text-white text-decoration-none">
              <i class="bi bi-house"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="list-group-item text-white bg-secondary">
            <a href="DashboardUser.php" class="text-white text-decoration-none">
              <i class="bi bi-person"></i>
              <span>User</span>
            </a>
          </li>
          <li class="list-group-item text-white bg-secondary">
            <a href="DashboardUser.php" class="text-white text-decoration-none">
              <i class="bi bi-person-vcard"></i>
              <span>Rented Person</span>
            </a>
          </li>
        </ul>
      </div>
</body>
</html>