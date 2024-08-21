<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Electro Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- OWN LINK    -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="resposive.css">
  <link rel="stylesheet" href="register.html">



  <!-- FONT AWESOME LINK  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <!-- JQUERY LINK  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script>

$(document).ready(function(){

  $("next").click(function(){

    $("cards-ul").animate({scrollLeft: "+=100"},1000);
  });

  $("prev").click(function(){

    $("cards-ul").animate({scrollLeft: "-=100"},1000);
  });

});

  </script> -->

  <script>
      $(document).ready(function () {
        $("#prev").click(function () {
          $("#cards-ul").animate({ scrollLeft: "-=100" }, 1000);
        });

        $("#next").click(function () {
          $("#cards-ul").animate({ scrollLeft: "+=100" }, 1000);
        });
      });
    </script>
</head>

<body>
  <div class="container-fluid" style="background-color: #1e1f29">
    <div class="container">
      <div class="row pt-2 pb-2" style="background-color: #1e1f29">
        <div class="col-md-5 p-0">
          <i class="fa-solid fa-phone" style="font-size: small; color: #d10024"></i>
          &nbsp;
          <a id="header-text-1" style="font-size: small; text-decoration: none" href="">
            <b>+021-95-51-84</b></a>
          &nbsp;
          <i class="fa-solid fa-envelope" style="font-size: small; color: #d10024"></i>
          &nbsp;
          <a id="header-text-1" style="font-size: small; text-decoration: none" href="">
            email@email.com</a>
          &nbsp;
          <i class="fa-solid fa-location-dot" style="font-size: small; color: #d10024"></i>&nbsp;
          <a id="header-text-1" style="font-size: small; text-decoration: none" href="">1734 Stonecal Road</a>
        </div>

        <div class="col-md-5"></div>

        <div class="col-md-2">
          <span style="color: #d10024; font-size: small">$</span>&nbsp;
          <a id="header-text-1" style="font-size: small; text-decoration: none" href="">USD</a>
          &nbsp;

          <i class="fa-solid fa-user" style="font-size: small; color: #d10024"></i>&nbsp;
          <a id="header-text-1" style="font-size: small; text-decoration: none" href="register.php">REGISTER</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ======================================= -->

  <div class="container-fluid" style="background-color: #15161d">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="photos/logo.png" alt="" />
        </div>

        <div class="col-md-6 mt-3">
          <div class="input-group mb-3">
            <button class="btn btn-outline-secondary dropdown-toggle" style="
                  background-color: white;
                  border-radius: 0px;
                  border-top-left-radius: 20px;
                  border-bottom-left-radius: 20px;
                " type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span style="color: black">All Categories</span> &nbsp;&nbsp;
            </button>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Category 01</a></li>
              <li><a class="dropdown-item" href="#">Category 02</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->
              <!-- <li><a class="dropdown-item" href="#">Separated link</a></li> -->
            </ul>

            <input style="border-radius: 0px" placeholder="Search Here" type="text" class="form-control"
              aria-label="Text input with dropdown button" />
            <button class="btn btn-outline-secondary" type="button" id="button-addon1" style="
                  background-color: #d10024;
                  border: none;
                  border-radius: 0px;
                  width: 100px;
                  border-bottom-right-radius: 20px;
                  border-top-right-radius: 20px;
                ">
              <b style="color: white">Search</b>
            </button>
          </div>
        </div>

        <div class="col-1"></div>
        <div class="col-md-2 mt-3">
          <div class="row">
            <div class="col ms-3">
              <i style="font-size: larger; color: white" class="fa-regular fa-heart"></i>
            </div>
            <div class="col">
              <i style="font-size: larger; color: white" class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
          <div class="row">
            <div class="col p-0">
              <span style="color: white; font-size: small">Your Wishlist</span>
            </div>
            <div class="col">
              <span style="color: white; font-size: small">Your Cart</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="single-line" style="background-color: #d10024; width: 100%; height: 3px"></div>
      </div>
    </div>
  </div>

  <!-- ============================================== -->

  <div class="container-fluid">
    <div class="container">
      <div class="row p-0">
        <div class="col-md-12 p-0">
          <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbarhead">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                      style="color: #d10024; border-bottom: 2px solid #d10024" href="#">Home</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Hot Deals</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Categories</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Laptops</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Smartphones</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Cameras</a>
                  </li>
                  &nbsp; &nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="hot-deals">Accessories</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <br />

      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col overflow-hidden">
              <img src="photos/shop01.png" style="border-radius: 0px; background-color: #e4e7ed" id="shop01"
                class="img-thumbnail" alt="..." />
            </div>
            <div class="col overflow-hidden">
              <img src="photos/shop03.png" style="border-radius: 0px; background-color: #e4e7ed" id="shop01"
                class="img-thumbnail" alt="..." />
            </div>
            <div class="col overflow-hidden">
              <img src="photos/shop02.png" style="border-radius: 0px; background-color: #e4e7ed" id="shop01"
                class="img-thumbnail" alt="..." />
            </div>
          </div>
        </div>
      </div>
      <br /><br /><br />

      <style>

        @media only screen and (max-width:400px) 
     {
    #new-product
    {
        
      width:60%;

        
    }
    .a11
    {
      font-size: xx-small;
       display: flex;
       width: 100%;
     
    }

    .a12{
      display: flex;
      width: 100%;
      font-size: xx-small;
    }
    .a13
    {
      font-size: xx-small;
      display: flex;
      width: 100%;
    }
    .a14
    {
      font-size: xx-small;
      display: flex;
      width: 100%;
    }

    
    

    
}
      </style>


      <div class="row">
        <div class="col-sm-3" id="new-product">
          <h3 style="font-weight: 700">NEW PRODUCTS</h3>
        </div>
        <div class="col-sm-4"></div>

        <div class="col-sm-5 ps-0" id="new-product-2" >
          <ul id="ul-laptop" class="ps-3">
            <li id="list-1-a" class="a11" >Laptops &nbsp; &nbsp;</li>
            <li id="list-1" class="a12" >Smartphones &nbsp; &nbsp;</li>
            <li id="list-1" class="a13" >Cameras &nbsp; &nbsp;</li>
            <li id="list-1" class="a14" >Accessories &nbsp; &nbsp;</li>
          </ul>
        </div>
      </div>



      <br>
      <br>
      <div class="row p-0">
        <div class="col p-0">

          <ul id="cards-ul">



            <li id="list-li">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product01.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                      <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>

              </div>


            </li>
            <!-- </div> -->


            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product02.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>

              </div>

            </li>
            <!-- </div> -->


            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product03.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">

                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>

            </li>
            <!-- </div> -->



            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product04.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>


            </li>
            <!-- </div> -->


            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product05.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>


            </li>
            <!-- </div> -->


            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product01.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>


            </li>
            <!-- </div> -->


            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product02.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>


            </li>
            <!-- </div> -->



            <!-- <div class="col-md-3 ps-2 pe-0 "> -->

            <li id="list-li" class="headphones">

              <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                <img src="photos/product03.png" class="card-img-top" alt="...">

                <div class="card-body">
                  <center>
                    <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                    <p id="product-name-goes-here">product name goes here</p>

                    <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                        style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                    <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                  </center>
                </div>

                <div class="row m-0 " id="row-add">
                  <div class="col-md-12 p-0  pt-3 pb-3">
                    <center>
                    <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                    </center>
                  </div>
                </div><br><br><br>


              </div>


            </li>
            <!-- </div> -->



            <!-- </div> -->
          </ul>
        </div>
      </div>
<br>






      <div class="row" >
        <div class="col" >

          <div id="prev"><i class="fa-solid fa-less-than"></i></div>
          &nbsp;&nbsp;&nbsp;
          <div id="next"><i  class="fa-solid fa-greater-than"></i></div>
        </div>
      </div>


    </div>
  </div>

  <br>
  <br>
  <br>
  <div class="container-fluid" id="background-image-main" >
    <div class="row">
      <div class="col-md-12 p-0">
        <div id="box-1">


          <center>

            <ul style="list-style: none;"  >

              <div id="red-circle">
                <li>
                  <h3 style="font-weight: 700; font-size: 24px; color: white; position: relative; top: 25px; ">02</h3>
                  <span style="font-size: 10px; color: white; position: relative; top: 10px;">DAYS</span>
                </li>
              </div>
              <div id="red-circle">
                <li>
                  <h3 style="font-weight: 700; font-size: 24px; color: white; position: relative; top: 25px; ">10</h3>
                  <span style="font-size: 10px; color: white; position: relative; top: 10px;">HOURS</span>
                </li>
              </div>
              <div id="red-circle">
                <li>
                  <h3 style="font-weight: 700; font-size: 24px; color: white; position: relative; top: 25px; ">34</h3>
                  <span style="font-size: 10px; color: white; position: relative; top: 10px;">MINUTES</span>
                </li>
              </div>
              <div id="red-circle">
                <li>
                  <h3 style="font-weight: 700; font-size: 24px; color: white; position: relative; top: 25px; ">60</h3>
                  <span style="font-size: 10px; color: white; position: relative; top: 10px;">SECONDS</span>
                </li>
              </div>
            </ul>
          </center>

          <h1 id="HOT-DEAL-THIS-WEEK"> HOT DEAL THIS WEEK </h1>
          <p style="font-size: 24px; color: #333; font-weight: 400; position: relative; top: 220px; left: -40px; ">NEW
            COLLECTION
            UP TO 50% OFF</p>

          <a href="shop-now.html">
            <button type="button" class="btn btn-primary btn-lg" id="button-add"
              style="position: relative; top: 220px; left: 70px; "><span id="span-add" style="font-size: large;">SHOP
                NOW</span></button>
          </a>


        </div>



      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container-fluid">
    <div class="container">


      <div class="row">
        <div class="col-md-3">
          <h3 style="font-weight: 700">TOP SELLING</h3>
        </div>
        <div class="col-md-4"></div>

        <div class="col-md-5 ps-0">
          <ul id="ul-laptop" class="ps-3">
            <li id="list-1-a" class="a11" >Laptops &nbsp; &nbsp;</li>
            <li id="list-1" class="a12" >Smartphones &nbsp; &nbsp;</li>
            <li id="list-1" class="a13" >Cameras &nbsp; &nbsp;</li>
            <li id="list-1" class="a14" >Accessories &nbsp; &nbsp;</li>
          </ul>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row p-0 ">
        <div class="col p-0">

          <ul style="list-style: none; padding: 0px; margin: 0px;" id="cards-ul">

            <div class="row m-0 p-0 ">

              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product06.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                        <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>
                  </div>


                </li>
              </div>


              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product07.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                        <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>

                  </div>

                </li>
              </div>


              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product08.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">

                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                        <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>

                </li>
              </div>



              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product09.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                        <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>


                </li>
              </div>


              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product04.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                         <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>


                </li>
              </div>


              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product03.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                         <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>


                </li>
              </div>


              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product02.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                         <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>


                </li>
              </div>



              <div class="col-md-3 ps-2 pe-0 ">

                <li id="list-li">

                  <div id="card-main" class="card" style="width: 17rem; border-radius: 0;  ">

                    <img src="photos/product09.png" class="card-img-top" alt="...">

                    <div class="card-body">
                      <center>
                        <p style="text-transform: uppercase; font-size: 12px; color: #8D99AE; ">Category</p>

                        <p id="product-name-goes-here">product name goes here</p>

                        <h4 style="font-size: 18px; font-weight: 700; color: #d10024; ">$980.00 <del
                            style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                        <i style="font-size: small; color: #d10024; " class="fa-solid fa-star"></i>
                      </center>
                    </div>

                    <div class="row m-0 " id="row-add">
                      <div class="col-md-12 p-0  pt-3 pb-3">
                        <center>
                         <a href="shop-now.html">
                      <button type="button" class="btn btn-primary btn-lg" id="button-add"><span id="span-add">ADD
                          TO CART</span></button></a>
                        </center>
                      </div>
                    </div><br><br><br>


                  </div>


                </li>
              </div>



            </div>
          </ul>
        </div>
      </div>
      <br><br>




      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col-md-4">
              <h4 style="font-weight: 700; font-size: 18px; ">TOP SELLING-1</h4>
              <br>

              <div class="row">
                <div class="col-md-12">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product01.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product02.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product03.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>



            </div>

            <div class="col-md-4">
              <h4 style="font-weight: 700;  font-size: 18px;">TOP SELLING-2</h4>
              <br>


              <div class="row">
                <div class="col-md-12">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product04.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product05.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product06.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>


            </div>
            <div class="col-md-4">
              <h4 style="font-weight: 700; font-size: 18px; ">TOP SELLING-3</h4>
              <br>

              <div class="row">
                <div class="col-md-12">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product07.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product08.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-3  ">
                          <img src="photos/product09.png" style="border: none;" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-9">
                          <p style="font-size: 10px; color: #8D99AE; text-transform: uppercase;  ">Category</p>
                          <p id="product-name-goes-here" style="font-size: 14px; font-weight: 700; line-height: 1px; ">
                            product name goes here</p>
                          <h4 style="font-size: 16px; font-weight: 700; color: #d10024;  ">$980.00 <del
                              style="font-size: small; color: #8D99AE; ">$990.00</del> </h4>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </div>
  </div>

  <div class="container-fluid  ">
    <div class="row ">
      <div class="col-md-12 p-0 ">

        <div class="single-line" style="background-color: #E4E7ED; width: 100%; height: 3px">

        </div>

      </div>
    </div>
  </div>

  <br>
  <br>


  <div class="container-fluid">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <p style="font-size: 24px; font-weight: 400; ">Sign Up for the <strong>NEWSLETTER</strong> </p>
        </div>
      </div>


      <br>

      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

          <div class="input-group mb-3">
            <input type="text" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;"
              class="form-control" placeholder="    Enter Your Email" aria-label="Enter Your Email"
              aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary"
              style="border-top-right-radius: 20px; border-bottom-right-radius: 20px; width: 150px; background-color: #d10024; "
              type="button" id="button-addon2 "><b style="color: white;">SUBSCRIBE</b></button>
          </div>

        </div>

        <div class="col-md-3">

        </div>
      </div>
      <br>
      <br>



    </div>
  </div>


  <div class="container-fluid  ">
    <div class="row ">
      <div class="col-md-12 p-0 ">

        <div class="single-line" style="background-color: #d10024; width: 100%; height: 3px">

        </div>

      </div>
    </div>
  </div>


  <div class="container-fluid" style="background-color: #15161D;">

    <div class="container">
      <br>
      <br>
      <br>
      <div class="row">

        <div class="col-md-12">

          <div class="row">

            <div class="col-md-3">

              <h3 style="font-size: 18px; color: white; font-weight: 700; ">ABOUT US</h3>
              <br>

              <ul style="list-style: none; padding: 0px; ">
                <li> <span style="color: #B9BABC; font-size: 14px; line-height: 2;">Lorem ipsum dolor sit amet, <br>
                    consectetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut.</span></li>
                <li> <span id="list-footer"><b>1734 Stonecoal Road</b></span></li>
                <li> <span id="list-footer"><b>+021-95-51-84</b></span> </li>
                <li> <span id="list-footer"><b>email@email.com</b></span> </li>
              </ul>






            </div>
            <div class="col-md-3">

              <h3 style="font-size: 18px; color: white; font-weight: 700; ">CATEGORIES</h3>
              <br>

              <ul style="list-style: none; padding: 0px; ">
                <li> <span id="list-footer"><b>Hot deals</b></span></li>
                <li> <span id="list-footer"><b>Laptops</b></span></li>
                <li> <span id="list-footer"><b>Smartphones</b></span></li>
                <li> <span id="list-footer"><b>Cameras</b></span> </li>
                <li> <span id="list-footer"><b>Accessories</b></span> </li>
              </ul>

            </div>
            <div class="col-md-3">

              <h3 style="font-size: 18px; color: white; font-weight: 700; ">INFORMATION</h3>
              <br>

              <ul style="list-style: none; padding: 0px; ">
                <li> <span id="list-footer"><b>About Us </b></span></li>
                <li> <span id="list-footer"><b>Contact Us</b></span></li>
                <li> <span id="list-footer"><b>Privacy Policy</b></span></li>
                <li> <span id="list-footer"><b>Orders and Returns</b></span> </li>
                <li> <span id="list-footer"><b>Terms & Conditions</b></span> </li>
              </ul>

            </div>
            <div class="col-md-3">
              <h3 style="font-size: 18px; color: white; font-weight: 700; ">SERVICE</h3>
              <br>

              <ul style="list-style: none; padding: 0px; ">
                <li> <span id="list-footer"><b>My Account</b></span></li>
                <li> <span id="list-footer"><b>View Cart</b></span></li>
                <li> <span id="list-footer"><b>Wishlist</b></span></li>
                <li> <span id="list-footer"><b>Track My Order</b></span> </li>
                <li> <span id="list-footer"><b>Help</b></span> </li>
              </ul>
            </div>


          </div>
          <br><br><br><br>

        </div>
      </div>




    </div>


  </div>







  </div>
  </div>


















  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>












