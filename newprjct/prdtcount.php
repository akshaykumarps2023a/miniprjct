<?php
include "dbconnect.php";
$update=false;
$priceq=false;

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
$n=$_SESSION['uname'];
$q="select useremail from b where username='".$n."'";

$result = mysqli_query($conn,$q);
//echo $result;
$row = mysqli_fetch_array($result);
$count = $row['useremail'];
//echo "Your Email is  $count";
if(isset($_GET['product']))
{
    $product=$_GET['product'];
   

}


?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  

  <title>Shop and Bid</title>
  <link rel="icon" type="image/x-icon" href="images/01.jpg">

  <!-- slider stylesheet -->
  <!-- JavaScript Bundle with Popper -->
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <style>
  .header_section{
    background-color: 	#393D47;
    color:#fff;

  }
  .nav-link {
    color:white;
  }
  #shop{
    color:#E2DFD2;
  }
  #shop:hover{
    color:#fff;
  }
</style>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style2.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<script>
         function showerr()
            {
                document.getElementById("time").style.visibility="visible";
    
            }
            setTimeout("showerr()",0);
    
            function hideerr()
            {
                document.getElementById("time").style.visibility="hidden";
    
            }
            setTimeout("hideerr()",3000);
          </script>
<body>
  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="#">
            <span id="shop">
              Shop And Bid
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active ">
                  <a class="nav-link position-relative" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update Credentials</a>
                </li>
                <li class="nav-item active ">
                  <a class="nav-link position-relative" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">View Profile</a>
                </li>
            
          
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
            <form method='post' action="">
        
        <button type="submit"  class="btn btn-warning" name="but_logout">Logout</button>
        </form>
            </div>
          </div>


        </nav>
      </div>
      
    </header>
    
  

<div> 

<!-- update profile -->
<!-- update profile -->
<!-- update profile -->
<!-- update profile -->
<!-- update profile -->
<div class="displayproducts">
<section class="fruit_section">
<div class="container">
  <h2 class="custom_heading">Shop</h2>
  <p class="custom_heading-text">
    Shop now
  </p>


<?php
$sql="select * from product where pname='$product'";
$run=mysqli_query($conn,$sql);
$ru=mysqli_fetch_array($run);
  $pid=$ru['id'];
  $productname=$ru['pname'];
  $price=$ru['price'];
  $stock=$ru['stock'];
  $catagory=$ru['catagory'];
  $description=$ru['description'];
  $image=$ru['image'];
  $image2=$ru['image2'];
  $image3=$ru['image3'];
  $discount=$ru['discount'];
  $a=($discount/100)*$price;
  $actualprice=$price-$a;
  $_SESSION['pricetotal']=$actualprice;

//$nos='<script>item'
$itemc=2;
// $va=$_COOKIE['item'];
// $prices=$_SESSION['f'];

?>
<script>var total=<?php echo "$actualprice";?></script>
<script>var stock=<?php echo "$stock";?></script>



  <div class="row layout_padding2">
<div class="col-md-8">
      <div class="fruit_detail-box">
        <h3 id="heroname">
          <?php echo"$productname";?>
        </h3>
        <p class="mt-4 mb-5">
        
           <h2>Price: <b><?php echo "$actualprice";?></b>/-<br></h2>Discount:<h3 style="color:red"><?php echo"$discount";?>%</h3>   
         
          <h2> Mrp:<h3 style="text-decoration:line-through;text-decoration-color: red;"><?php echo"$price";?></h3></h2>
        </p>
        <span id="stock" style="color:red"></span><br>
        quantity:<nav aria-label="Page navigation example" style="color:black" id="counter">
        <ul class="pagination">
          <li class="page-item"><button class="page-link" onclick="decrease()">-</button></li>
         <li class="page-item"><a class="page-link" ><span id="count">1</span></a></li>
       
        
          <li class="page-item"><button class="page-link"  onclick="increase()">+</button></li>
        </ul>

      </nav>
      Total:<h3 style="color:red"><span id="total"><script>document.write(total);</script></span></h3>
        <div>
        
        <?php
        //       echo'<script>document.write(x);</script>';
        // ?>
      <a href="addtocart.php?product=<?php $c  ?>" class="custom_dark-btn" id="viewbtn">
        Add to Cart
      </a>
    </div>
  </div>
</div>
<div class="container" style="width: 300px">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="products/<?php echo"$image";?>" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="products/<?php echo"$image2";?>" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="products/<?php echo"$image3";?>" class="d-block w-100" alt="...">
     
    </div>
  </div>
 
</div>
</div>
</div>
</div>

  
  </div>
   </div>


<!-- Modal -->




  <!-- view profile -->
                      </form>
  <!-- Modal -->
  <script>
   
    total=parseInt(total);
  var tot=total;
    var item=1;
    if(stock==0){
      document.getElementById("counter").style.display="none"
      document.getElementById("stock").innerHTML="Out of Stock";
      document.getElementById("viewbtn").innerHTML="check later";
      //document.getElementById("viewbtn").style.pointer-events="none";
    }
    else{
      document.getElementById("count").innerHTML=item;
      document.getElementById("stock").innerHTML="";
    }
 
    
    function decrease() 
{
  
  // if(item!=stock)
  //   {
      
  //     document.getElementById("stock").innerHTML=" ";
  //   }
    
   if(item<=1)
   {
    item=1;
    // document.cookie='item='+item;
    document.getElementById("count").innerHTML=item;
    document.getElementById("stock").innerHTML="";
   
   // document.cookie='itemcount'=+item;
   }
   else{
    item=item-1;
    document.cookie='item='+item;
 
    total=parseInt(total);
    total=total-tot;
    price=total.toLocaleString('en-IN'); 
    document.getElementById("count").innerHTML=item;
    document.getElementById("total").innerHTML=price;
    document.getElementById("stock").innerHTML="";
  
    // document.write(item);
    
   }
 // document.cookie='itemcount'=+item;
 
}
function increase()

{
  
  if(item>=stock)
  {
    item=stock;
    document.cookie='item='+item;
    document.getElementById("count").innerHTML=item;
    document.getElementById("stock").innerHTML="This is the maximum stock u can buy";
    //
  }
 else{
  document.getElementById("stock").innerHTML=" ";
  item=item+1;
  document.cookie='item='+item;

  total=parseInt(total);
  //var tot=total;
  total=tot*item;

  price=total.toLocaleString('en-IN'); 
  document.getElementById("count").innerHTML=item;
  document.getElementById("total").innerHTML=price;
  // <?php
$c=1;
  ?>
  for(let i=0;i<item;i++)
  {
     
       $c=$c+1;
     
  }
  
 }
 
// document.cookie="itemcount=123";
}

 
</script>
<!-- <?php
// $ses=$_COOKIE['item'];
// $prices=$actualprice*$ses;
// $_SESSION['f']=$prices;
?> -->





<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  </body>
<!-- Button trigger modal -->

</html> 