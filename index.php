 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Purvanchal Packaging Machine || Home</title>
    <?php include'CssLinks.php';?>
  </head>
  <body>
    <?php include'Header.php';?>

    <!--================================

    home detailes-->

    <div class="container">
      <div class="row-index">
        <div id="slider">
          <figure>
           <a href="index.php"><img class="slider" src="images/atta-packing.jpg" alt=""></a>
            <a href="index.php">  <img class="slider" src="images/automatic-packing.png" alt=""></a>
            <a href="index.php"><img class="slider" src="images/chilli-powder.jpg" alt=""></a>
            <a href="index.php"><img class="slider" src="images/chilli-powder.jpg" alt=""></a>
            <a href="index.php"><img class="slider" src="images/chips-packing.jpg" alt=""></a>
          </figure>
        </div>
      </div>

      <div class="row-ind-detailes">
        <h2>Food Processing & Packaging Machines</h2>
        <p>We are leading manufacturers, suppliers and exporters of Industrial Processing Machinery and
				Packaging Machinery.The machines are manufactured using optimum quality raw material.
				These are widely appreciated in the market due to their excellent product quality,
				dependable services and outstanding customer satisfaction. Our products are available
				at leading market prices for the clients.</p>
        <div class="row-ind-card">
            <div class="ind-card-one">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
            <div class="ind-card-two">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
            <div class="ind-card-three">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
        </div>
        <div class="row-ind-card">
            <div class="ind-card-one">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
            <div class="ind-card-two">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
            <div class="ind-card-three">
              <img src="images/hight-speed-packaging.jpg" alt="" style="height:inherit; width:100%;">
            </div>
        </div>
      </div>
      <div class="home-quote" style="background-image:url('images/Header.png'); background-size:100% 100%;">
        <h2>Get an Immediate Business Quote </h2>
        <button type="button">Contact Now </button>
      </div>
      <div class="home-video">
        <h2>Product Videos</h2>
        <div class="video-one">
          <iframe src="https://www.youtube.com/embed/xpHEJtDkC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-two">
          <iframe src="https://www.youtube.com/embed/xpHEJtDkC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-three">
          <iframe src="https://www.youtube.com/embed/xpHEJtDkC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-four">
          <iframe src="https://www.youtube.com/embed/xpHEJtDkC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <button type="button">Watch More Videos</button>
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

        <!-- Corporate video start-->
        <div class="home-cor-vid">
          <h2>Corporate Video</h2>
          <div class="cor-vid">
            <div class="cor-vid-lft">
              <h4>Corporate Information</h4>
              <hr><br>
              <a href="#">About Us</a><hr><br>
              <a href="#">Product We Offer</a><hr><br>
              <a href="#">Photo Gallery</a><hr><br>
              <a href="#">Contact Us</a><hr>
            </div>
            <div class="cor-vid-rgt">
              <iframe width="60%" height="80%" src="https://www.youtube.com/embed/xpHEJtDkC7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>

        </div>
        <br>
        <!-- Corporate video end-->
        <!-- footer -->
    </div>

    <?php include'Footer.php';?>

   <?php include'JSLinks.php';?>
  </body>
</html>
