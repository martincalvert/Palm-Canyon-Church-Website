     <? $r=rand(1,3) ?>
     
     <? if ($r==1): ?>
      <div class="row featurette">
        <div class="col-sm-5 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/fb.png" alt="Generic placeholder image">
        </div>
        <div class="col-sm-7 col-xs-12">
          <h2 class="featurette-heading">PC3 On Facebook<span class="muted"> Like us!</span></h2>
          <p class="lead">Like us on facebook to get secret hints about each sunday service! It also allows us to share photos from our events quickly so we can see our fellow christ followers in action! <a class="btn btn-primary" href="http://www.facebook.com/palmcanyonchurch"><i class="fa fa-facebook-square"></i> Facebook Page</a></p>
        </div>
      </div>
      <? elseif ($r==2): ?>
      <div class="row featurette">
        <div class="col-sm-5 col-sm-push-7 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/int_pray500.png" alt="Generic placeholder image">
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-xs-12">
          <h2 class="featurette-heading">Intercessory Prayer</h2>
          <p class="lead">An online prayer team interceding in prayer for people and their needs. If you are interested in serving in this ministry please email <a href="mailto:mail@palmcanyon.org">mail@palmcanyon.org</a></p>
        </div>
      </div>
      <? elseif ($r==3): ?>
      <div class="row featurette">
        <div class="col-sm-5 col-sm-push-7 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/cs6.png" alt="Generic placeholder image">
        </div>
        <div class="col-sm-7 col-sm-pull-5 col-xs-12">
          <h2 class="featurette-heading">Want to join us?<span class="text-muted"> Volunteer!</span></h2>
          <p class="lead">Check out the volunteer page for open posistions and ministries! <a class="btn" href="vol.html">Volunteering <i class="fa fa-angle-double-right"></i></a></p>
        </div>
      </div>
      <? endif ?>