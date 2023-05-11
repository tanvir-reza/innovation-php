<?php require_once('../config/db.php') ?>
<?php if(!isset($_COOKIE['Current_User'])){
    if($_COOKIE['Current_User'] != '23722b97842c4d6e73ad56f05a7cba93'){
        header('location: ./auth.php');
    }
    header('location: ./auth.php');
} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://cse.bubt.edu.bd/static/images/icons/bubt.png"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>BUBT Ennovation 2022</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background-color: cadetblue;">
    <div id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-info text-center">
        <div class="container">
          <h1>Admin Panel - BUBT Innovation Feast 2022</h1>
          <a href="adminLogin.php?logout"><button class='btn btn-danger'> Logout</button></a>
        </div>
      </nav>
    </div>
    <div class="container mt-3">
      <div class="card" style="backgroud-color:#5f9ea0 !important">
      <div class="card-body">
    <h5 class="card-title text-center">Submitted Proposal</h5>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Team Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Department</th>
      <th scope="col">Project Video</th>
      <th scope="col">Project File</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM project_info";
    $data = mysqli_query($db, $sql);
    while($mydata = mysqli_fetch_array($data)){
      echo "<tr>";
      echo "<td>".$mydata['team_name']."</td>";
      echo "<td>".$mydata['project_title']."</td>";
      echo "<td>".$mydata['dept']."</td>";
      echo "<td><a href=".$mydata['video_link']." target='_blank'>Link</a></td>";
      echo "<td>".$mydata['project_file']."</td>";
      echo "<td class='text-warning'>"?> <?php if($mydata['p_status']=='0'){echo "Pending";}elseif($mydata['p_status']=='1'){echo "<span class='text-primary'>Accepted</span>";} ?> <?php "</td>";
      echo "<td><a href='./apr.php?accept=".$mydata['email']."'><button class='btn btn-success'>Accept</button></a> <a href='./apr.php?reject=".$mydata['email']."'><button class='btn btn-danger'>Reject</button></a>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
  </div>
    
    
    </div>
    </div>

    
  </body>
</html>
