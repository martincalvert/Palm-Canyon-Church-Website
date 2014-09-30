<!doctype html>
<html>
 <? include  'head.php' ?>
<body>

<? include 'navbar.php' ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="assets/img/current.jpg" alt="Current series image">
          <div class="container">
            <div class="carousel-caption">
              <h1>Current Sunday Morning Series!</h1>
              <p class=""></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="assets/img/cb.jpg" alt="Image Of Church">
          <div class="container">
            <div class="carousel-caption">
              <h1>Services & Location</h1>
              <p class="">We are located on Ironwood Ave., just east of Perris Blvd. (it’s the church with the blue roof). Follow the link for directions.!</p>
              <a class="btn btn-large btn-primary" href="contact.html">View</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


<div class="container marketing">

      <!-- /END THE FEATURETTES -->
<? include 'footer.php' ?>
<script>
 document.title+=" Home"
</script>
</body>
</html>
