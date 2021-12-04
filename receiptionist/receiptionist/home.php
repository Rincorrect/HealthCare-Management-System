<?php
 session_start();
 if(isset($_SESSION['email'])){
 ?>
<html>
<head>
  <title>HealthCare</title>
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
      <a class="nav-item nav-link active" href="#" >Home </a>
      <a class="nav-item nav-link active" href="#Aboutus">About us</a>
      <a class="nav-item nav-link active" href="#">Doctors</a>
      <a class="nav-item nav-link active" href="records.php">Records</a>
      <a class="nav-item nav-link active" href="#contact">Contact us</a>
      <a class="nav-item nav-link active" href="logout.php">Logout</a>
    </div>
  </div>
</nav><!--end of navbar-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" width="100%" height="60%" src="doctor4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" width="100%" height="60%" src="doctor4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" width="100%" height="60%" src="doctor4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="Aboutus">
<div class="container">
<div class="row">
<div class="col-sm-6"><h3>Good Health</h3><p>Good health is a state of complete physical,
   mental and social well- being. It is not just about the absence of disease or
    infirmity. It is about finding a meaning and purpose for life. It is about
    achieving goals and enhancing the quality of life. At Heathcare, we strive to
    create healthy tomorrows by partnering with healthcare seekers not only to
    alleviate their pain but also to help them lead a life that is worth living.</p>
</div>
<div class="col-sm-6"><h3>Our Vision</h3><p> At Healthcare Hospital we believe it
  is our primary responsibility to keep up with these changes and make the benefits
  of healthcare evolution accessible to every single healthcare seeker, without any
  delay. With the same intentions, we have commissioned a signature model
  multidisciplinary 200 bedded    tertiary care hospital at the heartland of India,
  Nagpur to provide end-to-end comprehensive medical care across various medical
  facilties.</p>
</div><br>
</div>
</div>
</div>
<div id="contact">
  <br><br>
  <center>
    <h3>Contact Us</h3>
    <p>Address- Hall 4 IIITDMJ,Jabalpur (M.P.)<br><i class="fas fa-phone"></i> &nbsp; (+91)123456978<br><i class="fas fa-envelope-square"></i> xyz@gmail.com</p>
  </center>
</div>
        <!--footer-->
<div id="footer">
    <p>Website design by Dinesh Hardasani, Harsh Chourasiya,Rahul Barahpatre  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.facebook.com/profile.php?id=100007816428197" ><img src="Facebook.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="download.jpg">&nbsp;&nbsp;&nbsp;<img src="twitter.png"><br>2019 </p>
</div>
        <!--end of footer-->
</body>
</html>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>";
}
