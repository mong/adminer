<?php
include_once "plugins/login-otp.php";
    
return new AdminerLoginOtp(base64_decode($_ENV['ADMINER_OTP_SECRET']));

