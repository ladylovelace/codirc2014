  <?php
  require_once('recaptchalib.php');
  $privatekey = "6LdNuOwSAAAAAGW8o_uWJ8k_xK34WuEHyTijl4RN";
  $resp = recaptcha_check_answer($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
 
 if ($resp->is_valid) {
    echo "1";
  }
  else
  {
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
  }
  ?>