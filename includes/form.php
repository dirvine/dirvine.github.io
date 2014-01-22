<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$pubkey = "6LfmouwSAAAAAIlIG9Z2JdxPFcSnNZSPr3n5jXI4"; // Public API Key
$privkey = "6LfmouwSAAAAADD7WtcHRHwhXUepgGTPYE2x2gh-"; // Private API Key

if ($_POST['doVerify']) {
  $verify = recaptcha_check_answer($privkey, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);
  if ($verify->is_valid) {
    # Enter Success Code
    echo "Your response was correct!";
  }
  else {
    # Enter Failure Code
    echo "You did not enter the correct words.  Please try again.";
  }
}
?>
<div>

<!--
<form method="post" action="form.php">
<?php //echo recaptcha_get_html($pubkey, $verify->error); ?>
<input type="submit" name="doVerify" value="Verify" />
</form>-->



<!--<form action="/includes/submit-partner-dev.php" method="post" id="partner" name="partner" >-->
<form action="form.php" method="post" id="partner" name="partner" >

<div class="row" data-required="true">
<label>Name:</label>
<input type="text" spellcheck="false" id="name" name="name" tabindex="11" placeholder="Your Name" class="required"/>
</div>

<div class="row" data-required="true" data-type="email">
<label>Email:</label>
<input type="text" spellcheck="false" id="email" name="email" tabindex="12" placeholder="name@email.com" class="required validate-email"/>
</div>

<div class="row" data-required="true">
<label>Company:</label>
<input type="text" spellcheck="false" id="company" name="company" tabindex="13" placeholder="Enter Company" class="required"/>
</div>

<div class="row" data-required="true">
<label>Work Address:</label>
<input type="text" spellcheck="false" id="address" name="address" tabindex="14" placeholder="Enter Address" class="required"/>
</div>

<div class="row" data-required="true">
<label>City:</label>
<input type="text" spellcheck="false" id="city" name="city" tabindex="15" placeholder="Enter City" class="required"/>
</div>

<div class="row" data-required="true">
<label>State:</label>
<input type="text" spellcheck="false" id="state" name="state" tabindex="16" placeholder="Enter State" class="required"/>
</div>

<div class="row" data-required="true">
<label>Postcode / Zip:</label>
<input type="text" spellcheck="false" id="postcode" name="postcode" tabindex="17" placeholder="Enter Postcode" class="required"/>
</div>

<div class="row" data-required="true">
<label>Country:</label>
<input type="text" spellcheck="false" id="country" name="country" tabindex="18" placeholder="Enter Country" class="required"/>
</div>



<div class="row" data-required="true">
<label>Message:</label>
<textarea id="message" name="message" tabindex="19" placeholder="Add a brief message..." class="required"></textarea>
</div>



<div class="row" data-required="true">
<?php echo recaptcha_get_html($pubkey, $verify->error); ?>

</div>

 <!--<input type="submit" value="Submit" class="submit-btn" name="submit" tabindex="20" />-->
 <input type="submit" value="Submit" class="submit-btn" name="doVerify" tabindex="20" />
<!--<input type="submit" name="doVerify" value="Verify" />-->
</form>
</div>


<!--
<script src="/js/form_validation/prototype.js"></script>
<script src="/js/form_validation/effects.js"></script>
<script src="/js/form_validation/validation.js"></script>


<script type="text/javascript">
	function formCallback(result, form) {
		window.status = "valiation callback for form '" + form.id + "': result = " + result;
	}
	
	var valid = new Validation('partner', {immediate : true, onFormValidate : formCallback});
	Validation.add('answer', 'Wrong answer!', {
     is :  '12', // value is equal to this string
    
});
	
	 new Validation('partner',{stopOnFirst:true});
</script>-->
</body>
</html>
