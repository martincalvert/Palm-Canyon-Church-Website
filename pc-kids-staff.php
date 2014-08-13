<!doctype html>
<html>
<? include 'head.php' ?>
<body>
<? include 'pc-kids-navbar.php' ?>

    <div class="container marketing space">
    <div class="col-xs-12 text-center"><h1>Awana</h1></div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
        <h3>What Is Awana?</h3>
        <a class="btn btn-large btn-info" data-target="#awanaModal" data-toggle="modal">Video</a>
        </div>
        <div class="col-xs-12 col-sm-6">
        <h3>Impact Of Awana</h3>
        <a class="btn btn-large btn-info" data-target="#impactModal" data-toggle="modal">Video</a>
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
	<? include 'features.php' ?>
      <hr class="featurette-divider">
      <div id="awanaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal dialog">
	  <div class="modal-content">
  		<div class="modal-body text-center">
		  <iframe width="640" height="360" src="http://www.youtube.com/embed/yvEWk3b7Clc" frameborder="0" allowfullscreen></iframe>
  		</div>
	    </div>
	  </div>
	</div>
    <div id="impactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal dialog">
	  <div class="modal-content">
  		<div class="modal-body text-center">
        <iframe width="640" height="360" src="http://www.youtube.com/embed/R43bVlpLHJY" frameborder="0" allowfullscreen></iframe>
  		</div>
	  </div>
      </div>
	</div>
<? include 'footer.php' ?>
<script>
document.title+=" PC Kids Awana"
</script>
</body></html>
