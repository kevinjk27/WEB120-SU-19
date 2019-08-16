<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "kevin15huge@gmail.com";  //place your/your client's email address here
$toName = "WEB 120"; //place your client's name here
$website = "BIG Final Project";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Thank you - Your request have been received</h2>
        <p>This confirms that we have received your request. </p>
        <p>We'll respond via email within 24 hours.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	
    <div class="question-form">
<form>
<div class="form-row">
    <div class= "col25"> 
<label for="name">Name :</label>
        </div>
    <div class= "col75"> 
    <input type="text" name="Name" placeholder="Full Name" tabindex="1" size="50" autofocus />
    </div>
    <br />
    </div>
    
<div class="form-row"> 
    <div class= "col25">
<label for="name">Email :</label>
        </div>
    <div class= "col75"> 
    <input type="email" name="Email" placeholder="alexei.smirnoff@company.com" tabindex="2" size="50" autofocus />
    </div>
    <br />
    </div>
    
    
  <div class="form-row"> 
      <div class= "col25">
  <label for="phone">Phone Number :</label>
          </div>
      <div class= "col75"> 
    <input type="tel" name="Phone Number" placeholder="2068881234" tabindex="3" size="50" autofocus />
      </div>
    <br />
      </div>
      
  <div class="form-row">  
      <div class= "col25">
  <label for="date">Appointment Date :</label>
          </div>
      <div class= "col75"> 
    <input type="date" name="Booking Date" placeholder="" tabindex="4" size="50" autofocus />
      </div>
    <br />
      </div>

<div class="form-row">
    <div class= "col25">
		<label>How Did You Hear About Us ?</label>
        </div>
        <div class= "col75"> 
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		
	</div>
    </div>
      
<div class="form-row">
    <div class= "col25">
  <label for="topic">What Services Are You Interested In?</label>
        </div>
    <div class= "col75"> 		
		<fieldset>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Mobile Application" /> Mobile Application <br />
			<input type="checkbox" name="Interested_In[]" value="Responsive Design" /> Responsive Design <br />
            <input type="checkbox" name="Interested_In[]" value="Shopping Cart" /> Shopping Cart <br />
			<input type="checkbox" name="Interested_In[]" value="Free Donuts" /> Complimentary Donuts<br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other<input type="text" name="Interested_In [other]" size="14" style="padding:1px;"> <br />
		</fieldset>
        </div>
    </div>
    
    <div class="form-row">
		<div class= "col25">	
        <label>Would you like to join our mailing list?</label>
        </div>
        <div class= "col75">
		<fieldset>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
</div>
    
 <div class="form-row">   
     <div class= "col25"> 
  <label for="message">Questions :</label>
     </div>
     <div class= "col75"> 
    <textarea name="Comments" cols="36" rows="4" placeholder="What would you like to ask ?" tabindex="60"></textarea>
     </div>
    <br />
     </div>
        
    <div>
        
    </div>
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="submit" value="Submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>
