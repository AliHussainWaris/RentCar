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
      <?php include './Components/Sidebar/Sidebar.php' ?>
      <div style="width:80%;">
        <h1 class="text-center">DASHBOARD</h1>
        <div class="mx-auto" style="width:80%;">
        <?php include './Connection/conn.php'?>
        <?php
          $sqlse = "SELECT * from users";
          $result2 = mysqli_query($con , $sqlse);
          echo"
          <table class='table table-dark text-center'>
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
            <tr>";
              foreach($result2 as $resulted){
              echo "<td>".$resulted['userid']."</td>";
              echo "<td>".$resulted['name']."</td>";
              echo "<td>".$resulted['email']."</td>";
              echo "<td>".$resulted['userpassword']."</td>";
              echo "<td>".$resulted['address']."</td>";
              echo "<td>".$resulted['userole']."</td>";
              echo"<td>
                <button class='btn btn-warning text-white'>
                  <i class='bi bi-pencil-square'></i>
                </button>
              </td>
              <td>
                <a href='./DeleteUser.php' onClick='cardatas(".$resulted['userid'].")' class='btn btn-danger text-white'>
                  <i class='bi bi-trash'></i>
                </a>
              </td>";};
            echo"</tr>
          </table>";
          ?>
        </div>
      </div>
    </div>
    <script>
      function cardatas(userid){
        document.cookie = "userid=" + userid;
      }
    </script>
</body>
</html>