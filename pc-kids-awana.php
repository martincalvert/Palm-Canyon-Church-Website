<!doctype html>
<html>
<? include 'head.php' ?>
<body class='kids'>
<? include 'pc-kids-navbar.php' ?>

    <div class="container marketing space myelement">
    <div class="col-xs-12 text-center"><h1>Awana</h1></div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
        <h3>What Is Awana?</h3>
        <a class="btn btn-large btn-info" data-target="#awanaModal" data-toggle="modal">Video</a>
        </div>
        <div class="col-xs-12 col-sm-6">
        <h3>Impact Of Awana</h3>
        <a class="btn btn-large btn-info" data-target="#impactModal" data-toggle="modal">Video</a>
      </div>
	<div class="col-xs-12">
	  <p>September 4th - June 4th | Ages 3-11 | Thursdays 6:30pm-8:30pm</p>
	  <p>There is a charge for this program which covers uniform and activities. This fee is $49 for first timers or if you need a new uniform. $39 if you have your uniform for your club level. All of this for so little - it's worth it parents! Kids will experience a cance to see God's word come to life on their level. NO BORING CHURCH! Your child will love this time to interact with kids their age, with mentors who are concerned for your child, your family, and assisting in spiritual growth. They will play large group games, awesome music, book time to earn badges and awards. It is a hilariously fun bible time! KIDS LOVE IT!</p>
	  <a href="facebook" class="btn btn-lg btn-primary"><i class="fa fa-facebook"></i> PC Kids Awana On Facebook</a>
	</div>
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
	<? include 'features.php' ?>
      <hr class="featurette-divider">
      <div id="awanaModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="1Label" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
  		<div class="modal-body text-center" id="1Label">
        Hey
		  <iframe width="640" height="360" src="http://www.youtube.com/embed/yvEWk3b7Clc" frameborder="0" allowfullscreen></iframe>
  		</div>
	    </div>
	  </div>
	</div>
    <div id="impactModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
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
