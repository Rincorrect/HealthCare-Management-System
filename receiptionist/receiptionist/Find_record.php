<?php
session_start();
if(isset($_SESSION['email'])){
 ?>
<html>
<head>
  <title>Records</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <div class="header"><!--header-->
  <div class="container">
  <table>
  <tr>
     <td ><p>Help-line 0761-2450957,4038078</p> </td>
     <td valign="middle" align="right" class="style36" ><img alt="" src="home1.png" width="30px" />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
     <td align="right" class="style37" style="color:white;" align="right" >Hall 4, IIITDM campus, Jabalpur(M.P.)</td>
   </tr>
  </table>
  </div>
  </div><!--end of header-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light"><!--navbar-->
    <a class="navbar-brand" href="#"><p>HEALTHCARE</p></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="home.php" >Home </a>
        <a class="nav-item nav-link active" href="home.php#Aboutus">About us</a>
        <a class="nav-item nav-link active" href="#">Doctors</a>
        <a class="nav-item nav-link active" href="dashboard.php">Dashboard</a>
        <a class="nav-item nav-link active" href="logout.php">Logout</a>
        <a class="nav-item nav-link active" href="home.php#contact">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admit_patient.php">
              <span data-feather="file"></span>
              Admit Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Add_bill.php">
              <span data-feather="shopping-cart"></span>
              Add Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay_bill.php">
              <span data-feather="users"></span>
              Pay Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discharge_patient.php">
              <span data-feather="bar-chart-2"></span>
              Discharge Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Find Record
            </a>
          </li>
        </ul>
      </div>
    </nav>
<center>
  <form method="POST" >
    <table>
      <tr><td><b> Patient Email: </b><input type="email" name="patient_email" placeholder="patient email" required autofocus></input></td></tr>
      <br>
      <tr><td><button class="btn btn-lg btn-primary btn-block text-uppercase"  name="submit" type="submit">Enter</button></td></tr>
    </table>
  </form>
<?php
if(isset($_POST['submit'])){
  ?>
  <table class="table" border="1">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Email</th>
        <th scope="col">Doctor Email</th>
        <th scope="col">Admit Date</th>
        <th scope="col">Discharge Date</th>
        <th scope="col">Medicines</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $conn=mysqli_connect("localhost","root","","hospital");
        $sql="SELECT * FROM `records` WHERE patient_email='$_POST[patient_email]'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
         ?>
         <tr>
           <th scope="row">1</th>
           <td><?php echo $row['patient_email'];?></td>
           <td><?php echo $row['doctor_email'];?></td>
           <td><?php echo $row['admit_date'];?></td>
           <td><?php echo $row['discharge_date'];?></td>
           <td><?php $sql1="SELECT * FROM `bill` WHERE patient_email='$_POST[patient_email]' AND Date  BETWEEN '$row[admit_date]' AND '$row[discharge_date]' ";
           $result1=mysqli_query($conn,$sql1);
           if(mysqli_num_rows($result1)>0){
             while($row=mysqli_fetch_assoc($result1)){
               echo $row['pharma_code']." ".",";
             }
           }?>
         </td>
         </tr>
         <?php
         }

        ?>
      </tbody>
    </table>
<?php
}
 ?>
</center>
</body>
</html>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>";
}
 ?>
