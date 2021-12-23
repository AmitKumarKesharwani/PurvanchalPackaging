<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Purvanchal Packaging Machine || Contact</title>
   <?php include'CssLinks.php';?>
 </head>
 <body style="background-color: rgba(0, 0, 0, 0.1);">
   <?php include'Header.php';?>
   <div class="container">
     <div class="row-index" id="row-index" style="background-image: url('images/01.jpg')";>
       <span class="span-nAME ml-2">Contact</span>
     </div>
     <div class="row-pack-cont">
       <div class="cont-details">
         <div class="cont-1 bg-white">
           <h2>Contact details</h2>
           <h4><i class="fa fa-user"></i> &nbsp; Contact Person:</h4>
           <h6>Noor Alam ( Director )</h6>
           <h4><i class="fa fa-map-marker"></i> &nbsp; Address:</h4>
           <h6>Purvanchal Packaging <br>
             Jhillia pul, Gopiganj, Gyanpur, Bhadhohi (221401) <br>
             Uttar Pradesh, India</h6>
           <h4><i class="fa fa-phone"></i> &nbsp; Contact Us:</h4>
           <h6> +91 9140283932</h6>
         </div>
         <div class="cont-2 bg-white">
           <iframe src="https://goo.gl/maps/uj2oT6zmmV15sYJT6" ></iframe>
         </div>
       </div>

     </div>
     <!-- Form on home page start -->
     <div class="home-form" style="background-image:url('images/Header.png'); background-size:100% 100%;">
       <form class="form" action="database_contact.php" method="post">
         <h2>Tell Us What are you looking for ?</h2><br>
         <input type="text" name="Name"   placeholder="Enter your name" required><br>
         <input type="number" name="Number"  placeholder="Enter your number" required><br>
         <textarea name="Messege" rows="8" cols="22" placeholder="Derscribe here requirement in details : " required></textarea><br>
         &nbsp;&nbsp;&nbsp;<button type="submit" name="button">Send Enquirey</button>
       </form>
     </div>

       <!-- Form on home page end -->

   </div>

         <!-- footer -->

     <?php include'Footer.php';?>

     <?php include'JSLinks.php';?>

  </body>
</html>
