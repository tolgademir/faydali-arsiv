// cPanel license check
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://myip.cpanel.net/v1.0/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$addr = curl_exec($curl);
curl_close($curl);
header('Location: https://verify.cpanel.net/app/verify?ip='.$addr, true, 303);
exit;