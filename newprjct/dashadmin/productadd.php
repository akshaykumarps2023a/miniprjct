<?php
include "connection.php";
include "navigation.php";

if (isset($_POST['submit'])) {
  $sid = $_POST['sid'];
  $pname = $_POST['pname'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $desp = $_POST['desp'];
  $check = $_POST['check'];
  $voltage = $_POST['voltage'];


  $a = $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], "uploaded_image/" . $a);
  $sqlInsert = "INSERT INTO `product`(`name`, `price`, `details`, `image`, `quantity`, `sub_cat_id`) VALUES('$pname','$price','$desp','$a','$quantity','$sid')";
  if ($check == 1) {
    $sql = "INSERT INTO `product_sub`(`voltage`, `prdt_id`) VALUES ('$voltage','$prdt_id')";
    $query = mysqli_query($con, $sql);
  }
  $queryInsert = mysqli_query($con, $sqlInsert);
  if ($queryInsert == TRUE || $query == TRUE) {
    echo "<script>alert('Data inserted Successfully!!');window.location='viewuser.php'</script>";
  }
}
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <title>Category</title>


<!-- Favicon -->
<!-- <link href="img/favicon.ico" rel="icon"> -->

<!-- Google Web Fonts -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> -->

<!-- Icon Font Stylesheet -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

<!-- Libraries Stylesheet -->
<!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->

<!-- Customized Bootstrap Stylesheet -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Template Stylesheet -->
<!-- <link href="css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head> -->

<!-- <body>

  <div class="main-panel" style="margin-left:25%;">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card"> -->



<!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Product</h4>
                  <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="sel1">Category</label>
                      <select class="form-control" id="category" required>
                        <option value="">Select Category</option>
                        <?php
                        // $sql = "SELECT * FROM `category`";
                        // $result = mysqli_query($con, $sql);
                        // while ($row = mysqli_fetch_array($result)) {
                        ?>

                          <option value="<?php //echo $row["cat_id"]; 
                                          ?>"><?php //echo $row["cat_name"]; 
                                              ?></option>

                        <?php
                        //}
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="sel1">Sub Category</label>
                      <select class="form-control" id="sub_category" name="sid" required>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" name="pname" id="name" required placeholder="Name" />
                    </div>

                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="price" placeholder="Enter the price">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="desp" requried></textarea>
                    </div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                     <label for="exampleTextarea1"></label> -->
<!-- <input type="checkbox" name="check" value="1">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1"> Voltage</label>
                      <input type="text" class="form-control" name="voltage" id="name" placeholder="Voltage" />
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlFile1">Choose Image</label>
                      <input type="file" id="imgfile" class="form-control-file" oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="file">
                      <img id="pic" height=70px width=90px />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div> -->
<!-- </div> -->


<!-- </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- <script>
    $(document).ready(function() {
      $('#category').on('change', function() {
        var category_id = this.value;
        $.ajax({
          url: "sql.php",
          type: "POST",
          data: {
            category_id: category_id
          },
          cache: false,
          success: function(dataResult) {
            $("#sub_category").html(dataResult);
          }
        });

      });
    });
  </script> -->
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DASHMIN - Bootstrap Admin Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- collapse start -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- collapse end -->


  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <!-- <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div> -->
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->


    <!-- <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div> -->



    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
          <input class="form-control border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-envelope me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                    <small>15 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                    <small>15 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                    <small>15 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">See all message</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-bell me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Notificatin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Profile updated</h6>
                <small>15 minutes ago</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">New user added</h6>
                <small>15 minutes ago</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Password changed</h6>
                <small>15 minutes ago</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">See all notifications</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">My Profile</a>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="#" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->


      <!-- Table Start -->
      <div class="container-fluid pt-4 px-100">
        <div class="row g-100">

          <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4"> -->
          <!-- <h6 class="mb-4">REG_User</h6> -->
          <!-- <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th> -->
          <!-- <th scope="col">Last Name</th> -->
          <!-- <th scope="col">House Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th> -->
          <!-- <th scope="col">Phone number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Type</th>

                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php
                                //while($row=mysqli_fetch_array($res))
                                {
                                ?>
                                        <tr>
                                        <th scope="row"><?php //echo $row['approve_id']; 
                                                        ?></th>
                                        <td><?php //echo $row['fname']; 
                                            ?></td> -->
          <!-- <td><?php //echo $row['mname'] 
                    ?></td> -->
          <!-- <td><?php //echo$row['lname']; 
                    ?></td> -->
          <!-- <td><?php //echo $row['hname'] 
                    ?></td> -->
          <!-- <td><?php //echo $row['city'] 
                    ?></td>
                                        <td><?php //echo $row['state'] 
                                            ?></td> -->
          <!-- <td><?php //echo $row['phone']; 
                    ?><input type="hidden" value="<?php echo $row['phone']; ?>" name="phone"></td>
                                        <td><?php //echo $row['email']; 
                                            ?></td> -->

          <?php
                                  // $type=$row['type_id'];
                                  // $s="SELECT * FROM `table_user` where type_id='$type'";
                                  // $r=mysqli_query($con,$s);
                                  // while($ro=mysqli_fetch_array($r))
                                  //{
          ?>
          <!-- <td><?php //echo $ro['type_name']; 
                    ?></td>
                                        <?php
                                      }
                                        ?>
                                        <form action="approve.php" method="POSt">
                                        <input type="hidden" value="<?php //echo $row['fname']; 
                                                                    ?>" name="fname">
                                        <input type="hidden" value="<?php // echo $row['lname']; 
                                                                    ?>" name="lname">
                                        <input type="hidden" value="<?php //echo $row['email']; 
                                                                    ?>" name="email">
                                        <input type="hidden" value="<?php // echo $row['phone']; 
                                                                    ?>" name="phone">
                                        <input type="hidden" value="<?php //echo $row['pass']; 
                                                                    ?>" name="pass">
                                        <td><input type="hidden" name="id" value="<?php //echo $row['approve_id'];
                                                                                  ?>">
                                        <input type="submit" value="approve" name="approve"></td>
                                        </form>
                                        <form action="edit.php" method="post">
                                        <td><input type="hidden" name="id" value="<?php // echo $row['approve_id'];
                                                                                  ?>">
                                        <input type="submit" value="edit" name="edit"></td>
                                        </form> -->
          <!-- <form action="deletesubmit.php" method="post">
                                        <td><input type="hidden" name="id" value="<?php echo $row['approve_id']; ?>">
                                        <input type="submit" value="delete"name="delete"></td>
                                        </form>
                                    </tr>
                                    <?php
                                    //}
                                    ?>
                                </tbody>
                           </table> -->
          <!-- </div>
                    </div> -->
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Product</h4>
                <form method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="sel1">Category</label>
                    <select class="form-control" id="category" required>
                      <option value="">Select Category</option>
                      <?php
                      $sql = "SELECT * FROM `category`";
                      $result = mysqli_query($con, $sql);
                      while ($row = mysqli_fetch_array($result)) {
                      ?>

                        <option value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"]; ?></option>

                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Sub Category</label>
                    <select class="form-control" id="sub_category" name="sid" required>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Product Name</label>
                    <input type="text" class="form-control" name="pname" id="name" required placeholder="Name" />
                  </div>

                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" id="exampleInputCity1" name="price" placeholder="Enter the price">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="desp" requried></textarea>
                  </div>
                  &nbsp;&nbsp;&nbsp;


                      <!-- html collapse -->


                   <!DOCTYPE html>
                  <html>

                  <head>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                  </head>

                  <body>

                    <div class="container">
                      <h2>ADDITIONAL DETAILS</h2>
                      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
                      <div id="demo" class="collapse">
                          <div class="form-group">
                            <input type="checkbox" name="check" value="1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1"> Voltage</label>
                            <input type="text" class="form-control" name="voltage" id="name" placeholder="Voltage" size="50"/>
                          </div>
                      </div>
                    </div>  

                  <div class="form-group">
                    <label for="exampleFormControlFile1">Choose Image</label>
                    <input type="file" id="imgfile" class="form-control-file" oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="file">
                    <img id="pic" height=70px width=90px />
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- Table End -->


      <!-- Footer Start -->
      <!-- <div class="container-fluid pt-4 px-4"> -->


      <!-- <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            /*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
      <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> -->
    </div>
  </div>
  <!-- </div> -->


  <!-- </div> -->
  <!-- Footer End -->
  </div>
  <!-- Content End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>
<script>
  $(document).ready(function() {
    $('#category').on('change', function() {
      var category_id = this.value;
      $.ajax({
        url: "sql.php",
        type: "POST",
        data: {
          category_id: category_id
        },
        cache: false,
        success: function(dataResult) {
          $("#sub_category").html(dataResult);
        }
      });

    });
  });
</script>