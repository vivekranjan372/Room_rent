<?php 

if(isset($_POST['search']))
{     
 
  include('landlord_profile/config.php');
  $location=$_GET['location'];


}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> room/flat/pg/shops areas in patna</title>
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
 * {
    box-sizing: border-box;
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

/*section1 start */
.section1 {
    text-align: center;
    padding: 10px 0;
    color:black;
    line-height: 20px;
     background: linear-gradient(to top right, #eecda3 0%, #ef629f 100%);
    margin: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

.column{
  float:left;
  padding:10px;
}

.column.slide1{
  width:33.33%;
}

@media screen and (max-width: 600px) {
  .column.slide1 {
    width: 100%;
    display:block;
  }
}

#bookwithus{
    font-size: 1.875rem;
    max-width: 250px;
    margin: 0 auto 32px;
    line-height: 1.22;
    padding: 0;
    border: 0;
      font: inherit;
    vertical-align: baseline;
 }

.section2{
    padding: 0 20px;
    display:block;
    margin: 50px;
    border: 0;
    font-size: 100%;
      font: inherit;
    vertical-align: baseline; 
}

.realhomes{
  font-size: 1.375rem;
    margin: 0 auto 24px;
    padding: 0;
    border: 0;
      font: inherit;
    vertical-align: baseline;
}

.whybookwithus{
  margin-bottom: 48px;
  font-size: 1.125rem;
    line-height: 1.22;
    color: black;
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
}

 /* section1 end */

/* section2 start */
 .booking_steps {
    padding: 50px 0;
    text-align: center;
    display: block;
    margin: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
       background: linear-gradient(to top, #ddd6f3 0%, #faaca8 73%);
   }

 .booking_steps_heading {
    font-size: 2rem;
    color: blue;
    margin-bottom: 16px;
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
  }

 .booking_steps_intro{
    margin: 0 auto 50px;
    font-size: 1.125rem;
    line-height: 1.22;
    width: 80%;
    color:black;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
}

 .booking_steps_item {
    margin-bottom: 40px;
    display: block;
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

 .booking_steps_subheading {
       color: #224251;
    font-size: 1.375rem;
    line-height: 35px;
    margin: 0 auto 20px auto;
    width: 90%;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
}

.column{
  float:left;
  padding:10px;
}

.column.slide2{
  width:33.33%;
}

@media screen and (max-width: 600px) {
  .column.slide2 {
    width: 100%;
    display:block;
  }
}

/* section2 end */

/* section3 start */
  
  .student-cities-heading {
         line-height: 1.22;
         color: #224251;
         text-align: center;
         margin: 0;
         padding-bottom: 50px;
         padding-top:2px;
         border: 0;
         font: inherit;
         vertical-align: baseline;
         text-decoration:underline;   
}

.student-cities {
    padding: 50px 0px;
    text-align: center;
    display: block;
    margin:0;
    border:0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
   background: linear-gradient(to top left, #ff99ff 0%, #ffffff 100%);
   }

.student-cities-show-more {
    display: inline-flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    height: 56px;
    border: 2px solid #00adef;
    border-radius: 20px;
    text-decoration: none;
    color: white;
    background-color:green;
    padding: 20px 22px;
    margin-top: 50px;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}


.column{
  float:left;
  padding:10px;
 
}
.column.slide3{
  width:33.33%;
}

@media screen and (max-width: 600px) {
  .column.slide3 {
    width: 100%;
  }
}

/* section3 end */

/* section4 start */

.landlord_area{
    padding: 40px 0 100px;
    text-align: center;
    display:block;
    margin:0;
    border:0;
    font-size:100%;
    font:inherit;
    vertical-align:baseline;
     background: linear-gradient(to bottom left , #ffffcc 0%, #ff0066 100%);
}

 .landlord_area_heading{
  font-size:1.775rem;
  line-height:2.22;
  color:blue;
  margin-bottom:20px;
  padding:5px 20px;
  margin:0;
  border:0;
  font:inherit;
  vertical-align:baseline;
 }

 .landlord_area_intro{
   font-size:1rem;
   line-height:1.38;
   color:black;
   margin:0 auto 40px;
   padding:0 200px;
   border:0;
   font:inherit;
   vertical-align:baseline;
   width: 80%;
    padding: 0;
 }

 .landlord_area_button{
  display:inline-flex;
  -webkit-box-align:center;
  align-items:center;
  padding:0 22px;
  border-radius:25px;
  height:56px;
  color:white;
  background:green;
  text-decoration:none;
  font-size:1.125rem;
  font:inherit;
  vertical-align:baseline;
 }

/* section4 end */

/* testimonial start */

.card {
  margin: 0 auto;
  background: linear-gradient(to bottom, #ffffff 0%, #ffccff 100%);
}

#cardcolor{
  background: linear-gradient(to top, #ffffff 0%, #ffccff 100%);
  margin:0 0;
}

.card .carousel-item {
  height: 200px;
}

.card .carousel-caption {
  padding: 0;
  right: 0;
  left: 0;
  color: black;
}

.card .carousel-caption h3 {
  color: #3d3d3d;
}

.card .carousel-caption p {
  line-height: 30px;
}

.card .carousel-caption .col-sm-3 {
  display: flex;
  align-items: center;
}

.card .carousel-caption .col-sm-9 {
  text-align: left;
}

.navi a {
    text-decoration:none;
}

a > .ico {
    background-color: grey;
    padding: 10px;   
}

a:hover > .ico {
    background-color: #666;
}

/* testimonial end */


/* about instant_room START */

.about_instant_room {
    font-size: 2rem;
    margin: 22px auto 20px;
    color: #224251;
    text-align:center;
    text-decoration:underline;
}

.top_cities_description{
   
     font-size: 1rem;
    line-height: 1.38;
    margin: 0px auto;
    font: inherit;
    vertical-align: baseline;
    border:0;
    color: black;
    width: 80%;
    padding: 0;
}

/* about instant_room end */

.slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 600px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }

   </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- nav end !-->
<div class="jumbotron text-center" id="intro" >  
  <h3 style="color:blue;">LETS MAKE THE WHOLE WORLD A HOME</h3>  
  <div class="banner_search">
         <h5 style="color:red;">SEARCH NEARBY YOUR LOCATION(rooms/flat/pg/hostel)</h5> 
          <div class="flex-container">
            <div class="search_form radius5">
            <!-- search -->
             <form class="search" action="room_result.php" method="get">
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
              <input type="text" id="search_by_place" name="location" placeholder="Search by Locality" class="radius3">
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

<!-- section4 start !-->
  <section class="landlord_area">
    <h2 class="landlord_area_heading"><strong style="text-decoration: underline;">Are you a landlord looking for students?</strong></h2>
    <p class="landlord_area_intro slide">Every year <strong style="color:red;">thousands of students</strong> are looking for a new home across <strong style="color:red;">PATNA</strong>. They are looking for mid to long-term stays and great landlords like you. Do you have a place to rent? Our students are looking.</p>
    <a href="login_page/register.php" target="_blank" rel="noopener noreferrer" title="Create your free listing now!" class="landlord_area_button">Create your free listing now!</a>
  </section>

<!-- section4 end !-->

<!--section1 start !-->

<section class="section1">
       <h2 id="bookwithus"><strong>WHY BOOK WITH US</strong></h2>
 <div class="row">
  <div class="column slide1">
    <div class="section2">
      <svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53">
        <g fill="none" fill-rule="evenodd">
          <path fill="#FFF" fill-opacity=".01" fill-rule="nonzero" d="M.469 0h50.776v53H.469z"></path>
          <path fill="#B3E6FA" fill-rule="nonzero" stroke="#B3E6FA" stroke-linecap="round" stroke-linejoin="round" d="M28.953 16.426l12.611 12.047v15.554H16.343V28.385z"></path>
          <path d="M13.442 27v17.217h16.686m-21.237-18L26.336 9.783 43.78 26.217M32.403 11.348h5.31v5.478" stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
          <path fill="#FFF" stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M24.06 22.304h4.551V17.61h-4.55z"></path>
          <path fill="#FFF" d="M36.954 43.881s6.826-3.913 6.826-10.183c0-4.686-5.31-4.686-6.826.01-1.517-4.696-6.826-4.696-6.826.372 0 5.888 6.826 9.801 6.826 9.801z"></path>
          <path fill="#4DC6F4" d="M36.92 43.577c.456 0 4.087-1.368 6.784-7.097 1.236-2.624-3.62-3.354-4.794 1.294-1.517-4.696-6.826-4.696-6.826.372 0 4.5 4.38 5.431 4.836 5.431z"></path>
          <path stroke="#0083E4" stroke-linejoin="round" stroke-width="1.5" d="M36.954 43.881s6.826-3.913 6.826-10.183c0-4.686-5.31-4.686-6.826.01-1.517-4.696-6.826-4.696-6.826.372 0 5.888 6.826 9.801 6.826 9.801z"></path>
        </g>
      </svg>
    
      <h3 class="realhomes">REAL HOMES</h3> 
      <P class="whybookwithus">Our listings include authentic photos and videos of real homes. This way, you don’t need to visit them! You can rent a place months in advance, knowing exactly what you’ll find when you arrive.</P>
    </div>
  </div>
  <div class="column slide1">
    <div class="section2">
      <svg xmlns="http://www.w3.org/2000/svg" width="51" height="53" viewBox="0 0 51 53">
        <defs>
          <path id="a" d="M7.381 0c4.077 0 7.38 3.278 7.38 7.321 0 4.044-3.303 7.322-7.38 7.322C3.305 14.643 0 11.365 0 7.32 0 3.278 3.305 0 7.381 0z"></path>
          <path id="c" d="M7.381 0c4.077 0 7.38 3.278 7.38 7.321 0 4.044-3.303 7.322-7.38 7.322C3.305 14.643 0 11.365 0 7.32 0 3.278 3.305 0 7.381 0z"></path>
        </defs>
        <g fill="none" fill-rule="evenodd">
          <path fill="#FFF" fill-opacity=".01" fill-rule="nonzero" d="M0 0h51v52.019H0z"></path>
          <g stroke-linejoin="round">
            <path fill="#B3E6FA" stroke="#B3E6FA" stroke-linecap="round" stroke-width="1.545" d="M16.028 45.023V26.354h23.174v18.669z"></path>
            <path stroke="#0083E4" stroke-linecap="round" stroke-width="1.545" d="M32.8 45.146H10.86V21.229h29.28v16.374"></path>
            <path stroke="#0083E4" stroke-width="1.701" d="M16.028 15.25c0-5.19 4.24-9.396 9.472-9.396 5.232 0 9.472 4.206 9.472 9.396v5.98H16.028v-5.98z"></path>
          </g>
          <g transform="translate(18.267 26.525)">
            <mask id="b" fill="#fff">
              <use xlink:href="#a"></use>
            </mask>
            <use fill="#FFF" xlink:href="#a"></use>
            <path d="M7.381 0c4.077 0 7.38 3.278 7.38 7.321 0 4.044-3.303 7.322-7.38 7.322C3.305 14.643 0 11.365 0 7.32 0 3.278 3.305 0 7.381 0z" mask="url(#b)"></path>
            <path fill="#4DC6F4" d="M10.481 3.075c4.077 0 7.38 3.278 7.38 7.321 0 4.044-3.303 7.322-7.38 7.322-4.076 0-7.381-3.278-7.381-7.322 0-4.043 3.305-7.321 7.381-7.321z" mask="url(#b)"></path>
            <use stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.545" xlink:href="#c"></use>
          </g>
          <path stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.236" d="M23.895 35.796c0 .998.834 1.807 1.863 1.807s1.863-.809 1.863-1.807c0-.998-.834-1.807-1.863-1.807-1.03 0-1.863-.81-1.863-1.807 0-.997.834-1.807 1.863-1.807s1.863.81 1.863 1.807m-1.863-2.892v9.397"></path>
        </g>
      </svg>
      <h3 class="realhomes">SECURE PAYMENT</h3> 
      <P class="whybookwithus">To protect you from fraud, we never ask you to pay outside the Uniplaces website. Your first payment is safe with us, and we only transfer it to the landlord after you move in.</P>  
    </div>
 </div>
 <div class="column slide1">
    <div class="section2">
      <svg width="51" height="52" viewBox="0 0 51 52">
        <g fill="none" fill-rule="evenodd">
          <path fill="#FFF" fill-opacity=".01" fill-rule="nonzero" d="M0 0h51v52H0z"></path>
          <path fill="#FFF" fill-opacity=".01" fill-rule="nonzero" d="M2.887 2.943h45.226v46.113H2.887z"></path>
          <path fill="#B1E6FB" d="M15.984 39.278H18.7c2.804 0 4.832 1.05 5.687 1.575h3.232c.65 0 1.22.137 1.64.398.243.152.419.336.522.535l4.117-.905c.805-.152 1.553-.178 2.316-.014.746.161 1.422.486 2.105.938.2.132.292.322.248.51-.044.188-.22.35-.47.432-2.418.8-4.29 1.46-5.818 1.998-.725.256-1.373.484-1.965.687-1.806.62-3.123 1.017-4.422 1.156-1.333.143-2.57.005-4.204-.317a78.285 78.285 0 0 1-2.099-.454c-.399-.09-.824-.188-1.277-.292a494.64 494.64 0 0 0-2.328-.531v-5.716z"></path>
          <path fill="#4DC6F4" d="M14.615 45.662h-3.651v-8.348h3.651z"></path>
          <path stroke="#0083E4" stroke-linejoin="round" stroke-width="1.5" d="M16.193 46.03h-5.001V35.35h5z"></path>
          <path stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.193 43.981c13.127 4.648 8.752 4.648 23.754-3.32-1.329-1.411-2.378-1.743-3.75-1.327l-5.544 1.953"></path>
          <path stroke="#0083E4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.193 36.677h3.75c2.941 0 5.002 1.992 5.627 2.656h3.75c1.993 0 1.993 2.656 0 2.656h-6.876"></path>
          <g fill="#0083E4">
            <path fill-rule="nonzero" d="M40.631 32.399l-3.412.496c2.775-3.026 4.327-6.99 4.327-11.218 0-9.085-7.262-16.477-16.189-16.477S9.168 12.592 9.168 21.677c0 3.646 1.146 7.1 3.314 9.991 2.099 2.797 5.074 4.872 8.38 5.843a.808.808 0 0 0 1.002-.602.825.825 0 0 0-.559-.966c-6.202-1.821-10.534-7.688-10.534-14.266 0-8.186 6.543-14.846 14.586-14.846s14.586 6.66 14.586 14.846c0 4.047-1.578 7.828-4.381 10.61v-4.301a.809.809 0 0 0-.802-.816.809.809 0 0 0-.801.816v6.09c0 .488.44.877.915.808l5.984-.87a.821.821 0 0 0 .68-.923.813.813 0 0 0-.907-.692z"></path>
            <text font-family="ArialRoundedMTBold, Arial Rounded MT Bold" font-size="11.933" transform="translate(9.168 4.865)"><tspan x="5.631" y="20.036">24h</tspan></text>
          </g>
        </g>
      </svg>
      <h3 class="realhomes">SAFE STAYS</h3> 
      <P class="whybookwithus">In the unlikely case that your new place doesn't match the information in the listing, report an issue within the 24 hours of your move-in. We’ll temporarily freeze your payment, and find a way to help you.</P>  
    </div>
  </div>
</div>
</section>

<!--section1 end !-->


<!--section2 start !-->

<section class="booking_steps">
  <h1 class="booking_steps_heading"><STRONG>HOW INSTANT_ROOM WORKS</STRONG></h1>
 <p class="booking_steps_intro"><span style="color:red;"><STRONG>INSTANT_ROOM</STRONG></span> is an innovative service for students like you that takes a fresh approach to booking student accommodation online. It’s fast to book, safe to pay, and lets you browse through thousands of trusted properties in <span style="color:red;"><STRONG>PATNA</STRONG></span>, best student cities.</p>

<div class="row">
  <div class="column slide2">
   <div class="booking_steps_item ">
     <picture>
      <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/booking_steps_01.webp">
      <source type="image/png" srcset="https://static-spa-homepage.uniplaces.com/assets/images/9e7a93d8593100b9ac67e6406e6cbc92.png">
        <img src="https://static-spa-homepage.uniplaces.com/assets/images/9e7a93d8593100b9ac67e6406e6cbc92.png" width="200" height="200" alt="Booking Steps">
   </picture>
   <h2 class="booking_steps_subheading">Find your place and book it</h2>
 </div>
</div>


<div class="column slide2">
   <div class="booking_steps_item">
   <picture><source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/booking_steps_02.webp"><source type="image/png" srcset="https://static-spa-homepage.uniplaces.com/assets/images/2c2a4f09e878f6784aea9f50bcfb1952.png"><img src="https://static-spa-homepage.uniplaces.com/assets/images/2c2a4f09e878f6784aea9f50bcfb1952.png" width="200" height="200" alt="Booking Steps">
     </picture>
        <h2 class="booking_steps_subheading">Wait less than 24 hours for landlord confirmation</h2>
   </div>
</div>

<div class="column slide2">
 <div class="booking_steps_item"><picture>
  <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/booking_steps_03.webp">
    <source type="image/png" srcset="https://static-spa-homepage.uniplaces.com/assets/images/2e9cf3b2ba96b397fc62fc6538c8d5f5.png">
      <img src="https://static-spa-homepage.uniplaces.com/assets/images/2e9cf3b2ba96b397fc62fc6538c8d5f5.png" width="200" height="200" alt="Booking Steps">
    </picture>
    <h2 class="booking_steps_subheading">Move in and live it!</h2>
   </div>
  </div>
 </div>
</section>

<!--section2 end !-->


<!--section3 start !-->
  
  <section class="student-cities">
  <h1 class="student-cities-heading" style="  font-size: 1.5rem;">Student accommodation in <strong style="color:red;">PATNA</strong>, best student areas</h1>

  <div class="row">
    <div class="column slide3">
      
        <picture>
          <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/barcelona-small.webp">
            <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/2ba53c91e3587d7f7cccbc4b5d21a2a7.jpg">
              <img src="https://static-spa-homepage.uniplaces.com/assets/images/2ba53c91e3587d7f7cccbc4b5d21a2a7.jpg" alt="Barcelona">
              <a href="/accommodation/barcelona" title="Barcelona">
        <h2>BORING ROAD</h2>
        </picture>
      </a>
    </div>
    
    <div class="column slide3">
      
        <picture>
          <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/milan-small.webp">
            <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/da69eec194d0951a48ead34b6afee04d.jpg">
              <img src="https://static-spa-homepage.uniplaces.com/assets/images/da69eec194d0951a48ead34b6afee04d.jpg" alt="Milan">
          <a href="/accommodation/milan" title="Milan">
        <h2>KANKAR BAGH</h2>
        </picture>
      </a>
    </div>
    <div class="column slide3">
     
        <picture>
          <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/porto-small.webp">
            <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/ab47799cea43122654ccc15dafb3ae7b.jpg">
              <img src="https://static-spa-homepage.uniplaces.com/assets/images/ab47799cea43122654ccc15dafb3ae7b.jpg" alt="Porto">
           <a href="/accommodation/porto" title="Porto">
        <h2>Porto</h2>

        </picture>
      </a>
     </div>
   
    
     <div class="column slide3">
      
        <picture>
          <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/lisbon-small.webp">
            <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/d91513ed014956746bc2050b0cf0925e.jpg">
              <img src="https://static-spa-homepage.uniplaces.com/assets/images/d91513ed014956746bc2050b0cf0925e.jpg" alt="Lisbon">
            <a href="/accommodation/lisbon" title="Lisbon">
        <h2>Lisbon</h2>  
        </picture>
        </a>
      </div>

      <div class="column slide3">
          
            <picture>
              <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/berlin-small.webp">
                <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/b67be7269035803973963346ab2d4470.jpg">
                  <img src="https://static-spa-homepage.uniplaces.com/assets/images/b67be7269035803973963346ab2d4470.jpg" alt="Berlin">
               <a href="/accommodation/berlin" title="Berlin">
            <h2>Berlin</h2>   
            </picture>
          </a>
      </div>

       <div class="column slide3">
           
                <picture>
                    <source type="image/webp" srcset="https://static-spa-homepage.uniplaces.com/assets/images/madrid-small.webp">
                      <source type="image/jpeg" srcset="https://static-spa-homepage.uniplaces.com/assets/images/4ed4d34652ff6725c53bfc31e0bb4b48.jpg">
                        <img src="https://static-spa-homepage.uniplaces.com/assets/images/4ed4d34652ff6725c53bfc31e0bb4b48.jpg" alt="Madrid">
                      <a href="/accommodation/madrid" title="Madrid">
              <h2>Madrid</h2>   
                 </picture>
             </a>
        </div>
    </div>
                <a href="en/accommodation" title="Show more cities" class="student-cities-show-more">Show more cities
                </a>
 </section>

<!--section3 end !-->


<!-- testimonial page start !-->
<section id="cardcolor">
<div class="card col-md-7 mt-5 mb-5">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="images/suman3.jpg" alt="" class="rounded-circle img-fluid"/>
            </div>
            <div class="col-sm-9">
              <h3>Gives me hope</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <p><b class="smallest mute">-- Yayo Dudemous</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>You will love it.</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <p><b class="smallest mute">-- Yayo Dudemous</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>Velvet pouch!</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <p><b class="smallest mute">-- Yayo Dudemous</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="float-right navi">
    <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
</section>

<!-- testimonial end !-->

<!-- about instantroom start !-->
<div class="fluid-container" style=" background: linear-gradient(to bottom, #9966ff 0%, #ff99cc 100%);">
<h3 class="about_instant_room">About INSTANT_ROOM</h3>

 <p class="top_cities_description"><STRONG>INSTANT_ROOM</STRONG> is creating a trusted, brand for student accommodation. Since launching in 2020, INSTANT_ROOM became the fastest-growing website for booking student accommodation. We are the solution to your first problem: student housing. It has been making the process of finding a room easier for students. Because no two students are the same, we use our expert knowledge to recommend the place to stay that best fits your taste and budget.</p>
</div>



<!-- about instantroom end !-->

<!-- footer start !-->

<?php include 'footer.php'; ?>
  




   
</body>
</html>