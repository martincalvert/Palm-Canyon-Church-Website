<!doctype html>
<html>
 <? include 'head.php' ?>
<body class='kids'>
 <? include 'navbar.php' ?>
    <div class="container marketing space">
    <div class="col-xs-12 text-center"><h1>How To Follow Christ</h1></div>
      <!-- Three columns of text below the carousel -->
      <div class="row">
       <div class="col-sm-6 col-xs-12">
        <h3>Following Christ</h3>
        <a class="btn btn-large btn-info" href="#followModal" role="button" data-toggle="modal">Video <i class="fa fa-play"></i></a>
       </div>
       <div class="col-sm-6 col-xs-12">
        <h3>Baptism</h3>
        <a class="btn btn-large btn-info" href="#baptismModal" role="button" data-toggle="modal">Video <i class="fa fa-play"></i></a>
       </div>
      </div><!-- /.row -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
       <? include 'features.php' ?>
      <hr class="featurette-divider">

      <div class="modal" id="followModal">
       <div class="modal-dialog modal-lg">
	 <div class="modal-content">
	   <div class="modal-body text-center">
	     <iframe width="853" height="480" src="//www.youtube.com/embed/Q51yi_HxNkY" frameborder="0" allowfullscreen></iframe>
	   </div>
	 </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->
      <div class="modal" id="baptismModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
       <div class="modal-dialog modal-lg">
	 <div class="modal-content">
	   <div class="modal-body text-center" id="videoModal">
	     <iframe width="853" height="480" src="//www.youtube.com/embed/Q51yi_HxNkY" frameborder="0" allowfullscreen></iframe>
	   </div>

	 </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->

    <? include 'footer.php' ?>
<script>
 document.title+=" How To Following Christ"
</script>
</body>
</html>
