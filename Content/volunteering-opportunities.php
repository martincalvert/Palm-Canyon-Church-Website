<!doctype html>
<html>
 <? include 'head.php' ?>
<body class="wood">
 <? include 'navbar.php' ?>

    <div class="container marketing space color">
    <div class="col-xs-12 text-center"><h1>Want to serve?</h1></div>
      <div class="row">
        <div class="col-xs-12 col-sm-5">
        <h4>Volunteering</h4>
        <p>Fill out the form completely and make sure to include in the 'subject' line what ministry you would be interested in joining, leading or starting and any other comments you may have about ministry.
        </div>
        <div class="col-xs-12 col-sm-7">
        <form method="post" action="http://www.palmcanyon.org/formmail.php" name="PC3 Form">

    <input type="hidden" name="recipients" value="mail@palmcanyon.org" />

    <!-- STEP 3: Specify required fields in the 'required' value - or leave unchanged.
            NOTE: DO NOT put your email address and name here.
            "Your email address" and "Your name" are error messages for your users to see,
            not placeholders for you to replace.
    -->
    <input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />

    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="PC3 Volunteer Form" />
     <input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName" />

    <!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
    <input type="hidden" name="mail_options" value="Exclude=email;realname" />
        <div class="control-group">
        <input type="hidden" name="good_url" value="http://palmcanyon.org/public/goodsub.html"/>
		<input type="hidden" name="bad_url" value="http://palmcanyon.org/public/badsub.html" />
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
      <input class="col-xs-12 col-sm-4" name="FullName" type="text" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input class="col-xs-12 col-sm-4" name="EmailAddr" type="email" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputSubject" >Subject</label>
    <div class="controls">
      <input class="col-xs-12 col-sm-4" type="text" id="inputSubject" placeholder="Subject" name="Subject">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputSubject">Message</label>
    <div class="controls">
      <textarea rows="3" class="col-xs-12 col-sm-4" placeholder="Message" name="Message"></textarea>
    </div>
    
    <input class="btn btn-primary" type="submit" value="Submit" />
  </div>
</form>
        </div>
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
       <? include 'features.php' ?>
      <hr class="featurette-divider">
  <? include 'footer.php' ?>
  
</body>
</html>
