<?php

require ("../lib/untappdPHP.php");

// add your client_id, client_secret, redirect_uri available at https://untappd.com/api
$client_id = "CLIENT_ID";
$client_secret = "CLIENT_SECRET";
$redirect_uri = "REDIRECT_URL";

// create your UT instance
$ut = new UntappdPHP($client_id, $client_secret, $redirect_uri);

// get the Authentication URL
$url = $ut->getAuthenticateURL();

// fly away!
header("Location: " . $url);


?>