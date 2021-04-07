<!DOCTYPE html>
<html lang="en-US">
<head>
  <title> room in patna,flat in patna</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/room.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <style>

   body{
       margin:0;
       font-family: 'Open Sans', sans-serif;
       color:white;
       margin-bottom:5px ;
       }

/* search bar and background */

#intro{

        background: url("images/house.jpg") no-repeat center center;
        background-size:cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    
        background-position: 100% 80%;
  
      }

/* search jumbo */
  .jumbotron{
            min-height: 400px;
            }
  .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 55px;
            background-color:rgba(0, 0, 255, 0.2);
            width:40%;
            margin:auto;
             }
  .flex-container>div {
           background-color: #f1f1f1;
           text-align:center;
              }

/* pagingnation start */
  .paging{
        text-align: center;
         }
   .pagination {
            display: inline-block;
             }
  .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
  
         }

.pagination a.active {
             background-color: red;
             color: white;
             border: 1px solid red;
            }

.pagination a:hover:not(.active) {
                background-color: #ddd;
                }






/* pagingnation end */


   </style>
</head>
<body>


<?php include 'header.php'; ?>

<!-- nav end !-->
<div class="jumbotron text-center" id="intro" >
  <div class="banner_search">
          <h2 style="color:red;">You are welcome at patna rooms/flat/pg/hostel</h2>
          <div class="flex-container">
            <div class="search_form radius5">
            <!-- search -->
             <form class="search" action="#" method="get">
                <select name="category_name" class="search-input radius3">
                     <option value="">-- select categories --</option>
                      <option value="pg-for-boys">Boys PG / Boys Hostel</option>
                      <option value="pg-for-girls">Girls PG / Girls Hostel</option>
                      <option value="one-bhk">One Room Set</option>
                      <option value="two-bhk">two Room Set</option>
                      <option value="three-bhk">three Room Set</option>
                      <option value="my-need">I NEED</option>                        
                      <option value="office-and-shops">Office And Shops</option>
                </select>
              <input type="text" id="search_by_place" name="search_by_place" placeholder="Search by Locality" class="radius3">
              <input type="submit" name="search" value="Search" class="radius3">
             </form>
           <!-- /search -->
            </div>
          </div>
        </div>
</div>

<!--database pagingnation !-->

<div class="paging">
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>
</div>


<!-- footer start !-->


<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/house.jpg" alt="First Slide">
            <div class="carousel-caption d-none d-md-block">
               <div class="banner_search">
          <h2 style="color:red;">You are welcome at patna rooms/flat/pg/hostel</h2>
          <div class="flex-container">
            <div class="search_form radius5">
            <!-- search -->
             <form class="search" action="#" method="get">
                <select name="category_name" class="search-input radius3">
                     <option value="">-- select categories --</option>
                      <option value="pg-for-boys">Boys PG / Boys Hostel</option>
                      <option value="pg-for-girls">Girls PG / Girls Hostel</option>
                      <option value="one-bhk">One Room Set</option>
                      <option value="two-bhk">two Room Set</option>
                      <option value="three-bhk">three Room Set</option>
                      <option value="my-need">I NEED</option>                        
                      <option value="office-and-shops">Office And Shops</option>
                </select>
              <input type="text" id="search_by_place" name="search_by_place" placeholder="Search by Locality" class="radius3">
              <input type="submit" name="search" value="Search" class="radius3">
             </form>
           <!-- /search -->
            </div>
          </div>
        </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/house2.png" alt="Second Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/house3.png" alt="Third Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>




<?php include 'footer.php'; ?>

<script src="js/room.js"></script>

   
</body>
</html>


