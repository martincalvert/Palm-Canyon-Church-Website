<!doctype html>
<html>
 <? include  'head.php' ?>
<body class="wood">

<? include 'navbar.php' ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/upcoming.jpg" alt="Current series image">
          <div class="container">
            <div class="carousel-caption">
              <h1>Current Series!</h1>
              <p class=""></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/school.jpg" alt="School Supply Drive">
          <div class="container">
            <div class="carousel-caption">
              <h1>School Supply Drive</h1>
              <p class="">We are collecting school supplies for Armada Elementary!</p>
              <a class="btn btn-large btn-danger" href="assets/School_Supplies_Drive.pdf">Supplies List </a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/cb.jpg" alt="Image Of Church">
          <div class="container">
            <div class="carousel-caption">
              <h1>Services & Location</h1>
              <p class="">We are located on Ironwood Ave., just east of Perris Blvd. (it’s the church with the blue roof). Follow the link for directions.!</p>
              <a class="btn btn-large btn-primary" href="contact.html">View</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


<div class="container marketing">

      <hr class="featurette-divider">
       <? include 'features.php' ?>

      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->
<? include 'footer.php' ?>
<script>
 document.title+=" Home"
</script>
</body>
</html>
