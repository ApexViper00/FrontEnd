<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TimeTable.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<!-- Vertical navbar -->
 <div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="../image.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0"><strong>Profile</strong></h4>
        <p class="font-weight-normal text-muted mb-0">Student</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="../home/home.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Time Table
            </a>
    </li>
    <li class="nav-item">
      <a href="../quiz/quiz.php" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Quiz
            </a>
    </li>
    <li class="nav-item">
      <a href="../result/result.html" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                One View
            </a>
    </li>
  </ul>

  

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                Feedback
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Dashboard
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Dashboard
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                Dashboard
            </a>
    </li>
  </ul>
</div> 

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="main-content">
<h1>Time Table</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name="erp";
$conn = mysqli_connect($servername,$username,$password,$db_name); 

$query = "SELECT * FROM time_table";
$runquery = mysqli_query($conn,$query);
echo "<table class=\"table\">";
echo "<tr>
<!-- col	Specifies that the cell is a header for a column -->
<th >Time</th>
<th>Monday</th>
<th >Tuesday</th>
<th >Wednesday</th>
<th >Thursday</th>
<th >Friday</th>
</tr> ";
while($result = mysqli_fetch_assoc($runquery)){
  echo "<tr> ";
  echo " <th> $result[Time] </th> ";
  echo " <td> $result[Monday] </td> ";
  echo " <td> $result[Tuesday] </td> ";
  echo " <td> $result[Wednesday] </td> ";
  echo " <td> $result[Thursday] </td> ";
  echo " <td> $result[Friday] </td> ";
   echo "</tr>";
}
echo "</table>";
$query = "SELECT * FROM faculty";
$runquery = mysqli_query($conn,$query);
echo "<h1>Faculty And Subjects</h1>";
echo "<table class=\"table\">";
echo " <tr >
       
<th>Subject Code</th>
<th>Subject Name</th>
<th>Faculty Name</th>
</tr> ";
while($result = mysqli_fetch_assoc($runquery)){
  echo "<tr> ";
  echo " <td> $result[subject_code] </td> ";
  echo " <td> $result[subject_name] </td> ";
  echo " <td> $result[faculty_name] </td> ";
  echo "</tr>";
}
echo "</table>";
?>
 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="Login-Page-master/main.js"></script>
<script src="/TimeTable.js"></script>

    
</body>
</html>