<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>contactus/roomrent</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>

body {
  margin:0;
  font-family: 'Open Sans', sans-serif;
  color:white;
  margin-bottom:5px ;
    background: linear-gradient(to top, #ffffff 0%, #ffccff 100%);
}

.contactus{
  color:black;
  text-align:center;
}
#contact{
  color:black;
}


.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


/* about team start */

.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
  display: block;
  padding-top: 60px;
  padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
   text-align:center; 
   margin-bottom:28px; 
   padding:40px 25px;
}
.our-team .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
  font-size:24px; 
  font-weight:500;
  font-family: 'Poppins', sans-serif;
  padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
  line-height:22px; 
  font-weight:400;
}
.practice-area .inner img{
  display:inline-block;
}


.our-team{
  background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;
  
}
.our-team .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-team .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-team .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-team .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.our-team .cnt-block h3 a{
  text-decoration:none;
  color:#2a2a2a;
}
.our-team .cnt-block h3 a:hover{
  color:#337ab7;
}
.our-team .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-team .cnt-block .follow-us{
  margin:20px 0 0;
}
.our-team .cnt-block .follow-us li{ 
    display:inline-block; 
  width:auto; 
  margin:0 5px;
}
.our-team .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
.our-team .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

/* about team end */



</style>

</head>

<body>
	
 <?php include 'header.php';?>
  <!-- navbar end !-->
     <h2 class="contactus">WE WOULD LOVE TO HEAR FROM YOU!!
     Contact us and we'll get back to you within 24 hours.</h2>

    <!-- Container (Contact Section) -->
<div id="contact" class="container">
  
  <div class="row">
    <div class="col-sm-5">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>PATNA,</p>
      <p><span class="glyphicon glyphicon-phone"></span>BIHAR,</p>
      <p><span class="glyphicon glyphicon-phone"></span>800001</p>
      <p><span class="glyphicon glyphicon-envelope"></span><i class="fa fa fa-envelope"></i> roomrent@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--about developer !-->

<section class="our-team padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Our Team</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="images/suman3.jpg" class="img-responsive"  alt="dsgffd"></figure>
            <h3>SHAILENDRA</h3>
            <p>DEVELOPER</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="images/vivek.png" class="img-responsive" alt=""></figure>
            <h3>VIVEK</h3>
            <p>DEVELOPER</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>



  <!-- footer start !-->


<?php include 'footer.php';?>

</body>
</html>