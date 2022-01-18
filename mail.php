<?php
$to = "taiga.20020110@gmail.com";
$subject = "TEST";
$message = "あいうえお";
$headers = "FROM: s.okada70101@gmail.com";
mail($to, $subject, $message, $headers);
