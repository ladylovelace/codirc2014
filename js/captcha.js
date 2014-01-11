function validateCaptcha()
{
    challengeField = $("input#recaptcha_challenge_field").val();
    responseField = $("input#recaptcha_response_field").val();
    var html = $.ajax({
        type: "POST",
        url: "verify_captcha.php",
        data: "recaptcha_challenge_field=" + challengeField + "&recaptcha_response_field=" + responseField,
        dataType: 'text',
        async: false
    }).responseText;
    var res = parseInt(html);
    if(res)
    {
        $("#captchaStatus").html("Success. Submitting form.");
        return submit_signup();
    }
    else
    {
        $("#captchaStatus").html("Captcha incorreto");
        Recaptcha.reload();
        return false;
    }
}