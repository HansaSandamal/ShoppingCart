<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     * {box-sizing: border-box;}
     body{
        font-family:Lucida Sans Unicode;
        padding:0;
        margin:0;
    }



     .slideShow {
         margin-top:0px;
         padding-top:0px;
         clear:none;  
         position: relative;
         margin: auto;
         z-index: -1;
        
      }
      .imgRaw{
         display: flex;
         flex-direction: row;
         z-index: -1;
         
      }
      .imgRaw figure{
         margin-top:30px;
         margin-bottom:30px;
         margin-left:100px;
         width:25%;
      }
      .about{
         background-image: url('images/background.jpg');opacity: 0.8;
         z-index: -1;
         position:relative;
         display: flex;
         flex-direction: row;
      }
      .about>p{
         margin:40px;
         margin-left:25px;
         color:#ffffff ;         
      }
      
    </style>
 
</head>
<body>
   <?php
   include("header.php");
   ?>
   
  <div class="slideShow">
  <div class="mySlides fade" max-width=1050px >
  
      <img src="images/background1.jpg" style="width:100%" >
 
   </div>

   <div class="mySlides fade">
  
      <img src="images/background2.jpg" style="width:100%">

   </div>
   <div class="mySlides fade">
  
      <img src="images/background3.jpg" style="width:100%">

   </div>
    
   </div>
   <div class="imgRaw">
   <figure>
      <img src="images/sc1.png" alt="sc1">
      <figcaption><b>Fast Delivery</b> <br>
      Packaged with Care and Love</figcaption>
   </figure>
   <figure>
      <img src="images/sc2.png" alt="sc2">
      <figcaption><b>Satisfaction Guarantee</b> <br>
      30 Day Plant to Plant Guarantee</figcaption>
   </figure>
   <figure>
      <img src="images/sc3.png" alt="sc3">
      <figcaption><b>24/7 Help & Support</b> <br>
      Friendly & Quick</figcaption>
   </figure>
   <figure>
      <img src="images/sc4.png" alt="sc4">
      <figcaption><b>Secure Payment</b> <br>
      Shop with Confidence</figcaption>
   </figure>

   </div>
   <br>
   
<div class="about">
      <p>
      A little piece of nature is what everyone wants, we understand that! 
      At GREEN Shop we strive to make that private garden dream a reality. But buying plants 
      can be a hassle. Well, not anymore, a visit to your local nursery isn't required at all! 
      GREEN Shop is your online nursery, now, your plants are a click away.With so many offerings 
      and many new varieties added every week, you can take you pick.<br>
      You can Order these little greens for your loved ones online with us and GREEN Shop team 
      will do the needful.Plants and seeds delivery available to all areas.<br>

      We deliver our plants free of charge within Colombo and suburbs by our own fleet of vehicles.
      If you wish to purchase one of our plants and get it delivered far from Colombo, 
      we can facilitate it at a nominal fee which is negotiable depending on the plant and the distance from Colombo.
      
      </p>
      <img src="images/logo3.png" alt="logo" width="300px" height="90px" >


</div>
<?php
   include("footer.php");
   ?>
   <script>



var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>