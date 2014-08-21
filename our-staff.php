<!doctype html>
<html>
 <? include 'head.php' ?>
<body>
 <? include 'navbar.php' ?>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row space">
        <div class="col-xs-12 col-sm-4">
          <img class="img-circle"  src="assets/img/bill.jpg">
          <h2>Bill Martin</h2>
          <p>Head Pastor of Palm Canyon Communtiy Church</p>
          <p><a class="btn" data-target="#billModal" role="button" data-toggle="modal">More About Bill &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="col-xs-12 col-sm-4">
          <img class="img-circle" src="assets/img/cindy.jpg">
          <h2>Cindy Martin</h2>
          <p>Children Ministries Leader at Palm Canyon Community Church</p>
          <p><a class="btn" data-target="#cindyModal" role="button" data-toggle="modal">More About Cindy &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="col-xs-12 col-sm-4">
          <img class="img-circle" src="assets/img/carrie.jpg">
          <h2>Carrie Jacobs</h2>
          <p>Worship Leader at Palm Canyon Community Church</p>
          <p><a class="btn" data-target="#carrieModal" role="button" data-toggle="modal">More About Carrie &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

<div class="row">
        <div class="col-xs-12 col-sm-6">
          <img class="img-circle" src="assets/img/jacob.jpg">
          <h2>Jacob Malana</h2>
          <p>Youth Pastor at Palm Canyon Community Church</p>
          <p><a class="btn" data-target="#jacobModal" role="button" data-toggle="modal">More About Jacob &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="col-xs-12 col-sm-6">
          <img class="img-circle" src="assets/img/leslie.jpg">
          <h2>Leslie Hitchcock</h2>
          <p>Bookkeeper at Palm Canyon Community Church</p>
          <p><a class="btn" data-target="#leslieModal" role="button" data-toggle="modal">More About Leslie &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <div class="modal" id="billModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
       <div class="modal-dialog modal-lg">
	 <div class="modal-content">
	  <div class="modal-header">
	   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	   <h1>Bill Martin<span class="text-muted"> Head Paster</span></h1>

	  </div>
	   <div class="modal-body text-center" id="videoModal">
	     <h2>I LOVE THE MICHIGAN WOLVERINES!</h2>
	   </div>

	 </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->


      <hr class="featurette-divider">
       <? include 'features.php' ?>
      <hr class="featurette-divider">
       <? include 'footer.php' ?>




<script>
 document.title+=" Our Staff"
</script>
</body>
</html>
