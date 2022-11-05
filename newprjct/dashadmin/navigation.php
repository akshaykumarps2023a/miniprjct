<?php
$sql="SELECT * FROM `category`";

$res=mysqli_query($con,$sql);
 
?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3" style="font-size:14px;">
                        <p class="mb-0"><?php
                            if (isset($_SESSION['email'])) 
                            {
                                echo $email = $_SESSION['email'];
                                // $sq="SELECT * FROM `login` WHERE email=$email";
                                // $re=mysqli_query($con,$sq);
                                // $row=mysqli_fetch_array($re);
                                // echo $row['fname'];
                            }
                            ?></p>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="viewuser.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <?php
                                    while($row=mysqli_fetch_array($res))
                                    {
                                    ?>
                                    <form action="subcat.php" method="post">
                                    <a class="dropdown-item"><input style="border:none;background-color:transparent;" type="submit" value="<?php echo $row['cat_name']; ?>"><input type="hidden" value="<?php echo $row['cat_id']; ?>" name="cat_id"></a>
                                    </form> 
                                    <?php
                                    }
                                     ?>
                            <!-- <a href="cement.html" class="dropdown-item">Other Elements</a> -->
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="../updateprdt.php" class="nav-item nav-link"><i class="fa fa-image me-2"></i>View Product</a>
                    <a href="viewuser.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="registreduser.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Reg_users</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>ADD</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <!-- <a href="signin.html" class="dropdown-item">Sign In</a> -->
                            <a href="addcat.php" class="dropdown-item">Category</a>
                            <!-- <a href="signup.html" class="dropdown-item">Category</a> -->
                            <!-- <a href="404.html" class="dropdown-item">Sub-category</a> -->
                            <a href="addsubcat.php" class="dropdown-item">Sub-category</a>
                            <a href="productadd.php" class="dropdown-item">Products</a>
                            <a href="addworkercat.php" class="dropdown-item">Worker-Category</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>