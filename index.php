<?php
  require_once('include/connect.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('include/static.php');?>
</head>
<body>
  <!-- Start your project here-->
  <!--Navbar-->
  <header>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <!-- Navbar brand -->
  <div class="container">
    <a class="navbar-brand" href="#" style="color:black;">Chrono360.</a>
      <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">CATEGORY</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Jewellery</a>
          <a class="dropdown-item" href="#">Watch</a>
      </div>
      </li>
      <!-- Gender Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">GENDER</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Male</a>
          <a class="dropdown-item" href="#">Female</a>
      </div>
      </li>
      <li class='nav-item'>
        <a class="nav-link" href="store/new">OPEN STORE</a>
      </li>
    </ul>
    <!-- Links -->
    <form class="form-inline">
      <div class="md-form my-0">
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link" href="#">POLICY</a>
          </li>
    <!-- <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
        <i class="fas fa-hand-holding-usd"></i>
      </a>
    </li> -->

      </div>
    </form>
  </div>
  <!-- Collapsible content -->
</div>
</nav>
<!--/.Navbar-->
<!-- Full Page Intro -->
     <div class="view" style="background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
       <!-- Mask & flexbox options-->
       <div class="mask rgba-black-light align-items-center">
         <!-- Content -->
         <div class="container">
           <!--Grid row-->
           <div class="row">
             <!--Grid column-->
             <div class="col-md-12 mb-4 white-text text-center">
               <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-2 wow fadeInDown" data-wow-delay="0.3s"><strong>Web Up your business</strong></h1>
               <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
               <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Chronographs & Jewelleries</strong></h5>
               <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s" href="store/new">Open Your store</a>


               <!-- Implementing the search functionality -->
               <div class="input-group col-md-4 offset-md-4  center-block">
                 <div class="input-group-prepend">
                   <span class="input-group-text" id="validationTooltipUsernamePrepend" name="search_btn"><i class="fas fa-search"></i></span>
                 </div>
                 <br><input type="text" name="search_field"class="form-control" id="validationTooltipUsername" placeholder="Search product" aria-describedby="validationTooltipUsernamePrepend" required>
               </div>
             </div>

               <!-- <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a> -->
             </div>
             <!--Grid column-->
           </div>
           <!--Grid row-->
         </div>
         <!-- Content -->
       </div>
       <!-- Mask & flexbox options-->
       </header>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4 d-md-none">
      <span class="badge ">Rolex</span>
      <span class="badge ">Quartz</span>
      <span class="badge ">Chrono</span>
      <span class="badge ">Chrono</span>
      <span class="badge ">Rolex</span>
      <span class="badge ">Quartz</span>
      <span class="badge ">Chrono</span>
      <span class="badge ">Chrono</span>
    </div>
  </div>
</div>
<div class="container">
<br>
<h4 class="font-weight-bold">New In Stock</h4>
</div>
<?php
      echo '<div class="container">';
       echo '<div class="row">';
       $exec = "SELECT * FROM products LIMIT 6";
       $result = mysqli_query($db,$exec);
       while ($row = mysqli_fetch_assoc($result)) {
          echo'<div class="col-sm-12 col-md-4">';
           // <!-- Card Narrower -->
           echo'<div class="card card-cascade wider">';
              // <!-- Card image -->
            // echo '<div class="view view-cascade overlay">';
            echo'<img class="card-img-top" src="'.$row['image'].'" >';
                  // <!-- Card content -->
            echo "<div class='card-body card-body-cascade'>";
            echo '<h5 class="pink-text pb-2 pt-1"></i>'.$row['title'].'</h5>';
            // echo'<h4 class="font-weight-bold card-title"><strike>Ksh. '.$row['list_price'].'</strike></h4>';
            echo'<h4 class="font-weight-bold card-title">Ksh. '.$row['price'].'</h4>';
            echo'<p class="card-text">'.$row['description'].'</p>';
            echo'<a class="btn btn-primary">Order Now</a>';
            echo'</div>';
            echo'<div class="card-footer text-muted text-center">
                    Added 2 days ago
                  </div>';
            echo'</div>';
            echo'</div>';

       }
    ?>


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">// Animations init
    new WOW().init();
</script>

</body>
</html>
