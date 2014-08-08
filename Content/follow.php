<!doctype html>
<html>
 <? include 'head.php' ?>
<body class="wood">
 <? include 'navbar.php' ?>
    <div class="container marketing space">
    <div class="col-xs-12 text-center"><h1>Awana</h1></div>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-6 col-xs-12">
        <h3>Following Christ</h3>
        <a class="btn btn-large btn-info" href="#followModal" role="button" data-toggle="modal">Video <i class="fa fa-play"></i></a>
        </div>
        <div class="col-sm-6 col-xs-12">
        <h3>Baptism</h3>
        <a class="btn btn-large btn-info" href="#baptismModal" role="button" data-toggle="modal">Video <i class="fa fa-play"></i></a>
      </div><!-- /.row -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
       <? include 'features.php' ?>
      <hr class="featurette-divider">
      <div id="followModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-body text-center">
		 <iframe width="640" height="360" src="http://youtu.be/jEprqbmDpuI" frameborder="0" allowfullscreen></iframe>
  		</div>
	</div>
    <div id="baptismModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-body text-center">
        <iframe width="640" height="360" src="http://youtu.be/Q51yi_HxNkY" frameborder="0" allowfullscreen></iframe>
  		</div>
	</div>
    <? include 'footer.php' ?>
<script>
 document.title+="Following Christ"
</script>
</body>
</html>
