<?php
include "connection.php";
include "navigation.php";
include "topnav.php";

$sql="SELECT * FROM `approve`";

$res=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <div>
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
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-100">
                <div class="row g-100">
                   
                    <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4"> -->
                            <h6 class="mb-4">REG_User</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <!-- <th scope="col">Middle Name</th> -->
                                        <th scope="col">Last Name</th>
                                        <!-- <th scope="col">House Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th> -->
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Type</th>

                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php
                                $s=0;
                                    while($row=mysqli_fetch_array($res))
                                    {
                                    ?>
                                        <tr>
                                        <th scope="row"><?php echo $s+1//echo $row['approve_id']; ?></th>
                                        <td><?php echo $row['fname']; ?></td>
                                        <!-- <td><?php //echo $row['mname'] ?></td> -->
                                        <td><?php echo $row['lname']; ?></td>
                                        <!-- <td><?php //echo $row['hname'] ?></td> -->
                                        <!-- <td><?php //echo $row['city'] ?></td>
                                        <td><?php //echo $row['state'] ?></td> -->
                                        <td><?php echo $row['phone']; ?><input type="hidden" value="<?php echo $row['phone']; ?>" name="phone"></td>
                                        <td><?php echo $row['email']; ?></td>

                                        <?php
                                        $type=$row['type_id'];
                                        $s="SELECT * FROM `table_user` where type_id='$type'";
                                        $r=mysqli_query($con,$s);
                                        while($ro=mysqli_fetch_array($r))
                                        {
                                        ?>
                                        <form action="approve.php" method="POST">
                                        <td><?php echo $ro['type_name'];?></td>
                                        <input type="hidden" value="<?php echo $ro['type_name'];?>" name="type">
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                        <input type="hidden" value="<?php echo $row['fname']; ?>" name="fname">
                                        <input type="hidden" value="<?php echo $row['lname']; ?>" name="lname">
                                        <input type="hidden" value="<?php echo $row['email']; ?>" name="email">
                                        <input type="hidden" value="<?php echo $row['phone']; ?>" name="phone">
                                        <input type="hidden" value="<?php echo $row['pass']; ?>" name="pass">
                                        <td><input type="hidden" name="id" value="<?php echo $row['approve_id'];?>">
                                        <td><button type="submit" class="btn btn-outline-success m-2" value="approve" name="approve">Approve</button></td>
                                        <!-- <input type="submit" value="approve" name="approve"></td> -->
                                        </form>
                                        <!-- <form action="edit.php" method="post">
                                        <td><input type="hidden" name="id" value="<?php echo $row['approve_id'];?>">
                                        <input type="submit" value="edit" name="edit"></td>
                                        </form> -->
                                        <form action="deletesubmit.php" method="post">
                                        <td><input type="hidden" name="id" value="<?php echo $row['approve_id'];?>">
                                        <button type="submit" class="btn btn-outline-danger m-2" value="delete"name="delete" style="margin-left:150% ;">Delete</button></td>
                                        </form>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <!-- </div>
                    </div> -->
                    
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
                            <!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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