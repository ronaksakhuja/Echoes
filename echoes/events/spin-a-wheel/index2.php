<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_waffle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--Google analytics-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97612974-1', 'auto');
  ga('send', 'pageview');

</script>


	
    </head>

    <body>
    <?php
    	if(isset($_GET['tag'])){
    	$alert=1;
    	}
    	else{
    	$alert=0;
    	}
    	?>
    	<script>if(<?php echo $alert?>==1){
    		alert("Sorry you are already registered");
    			}
    			</script>

<div class="v-wrap">
    <article class="v-box">
        <h1>Spin A Wheel</h1>

        <p>Register below with your phone number and email id</p>
<form class="form-inline" action="log.php" method="post">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="InputName" placeholder="Jane Doe" name="name" data-validation="length alphanumeric" data-validation-length="min2">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail2">Phone Number</label>
    <input type="number" class="form-control" id="InputPhone" placeholder="9999999999" name="number" size="10" data-validation="number length" data-validation-length="10">
  </div>
  <div class="checkbox">
  <label><input type="checkbox" value="" class="checkbox" id="agree" name="agree" required></label>
  <label for="agree" class="error block">Agree to our Terms!</label>

</div>
  
  <button type="submit" class="btn btn-default">Send Coupon</button>
</form>
    </article>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });
</script>

    </body>
</html>