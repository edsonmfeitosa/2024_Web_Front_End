<?php
/**
 * This example script walks through the creation of a new user, update user info 
 * and login using SSO
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

$external_user_id = time();
$first_name = "Bob";
$email_address = "bob+{$external_user_id}@teste.com.br";
$native_language = "pt";

/**
 * CREATE USER
 */
echo "\n\n\nCreates a valid user\n";
$params = array(
    'email_address' => $email_address,
    'first_name' => $first_name,
    'native_language' => $native_language,
    'expiration_date' => '2100-01-01',
    'phone_number' => '+19177151234'
);
make_request("/partners/users/{$external_user_id}", "POST", $params);


/**
 * Get User information
 */
echo "\n\n\nGets a valid user's information\n";
make_request("/partners/users/{$external_user_id}", "GET");


/**
 * SET USER PREMIUM EXPIRATION DATE
 */
echo "\n\n\nSets user premium expiration date\n";
$params = array(
    'expiration_date' => "2016-01-01"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);


/**
 * UPDATE USER NATIVE LANGUAGE
 */
echo "\n\n\nUpdates user's native language\n";
$params = array(
    'native_language' => "es"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);


/**
 * GET USER LOGIN URL/AUTH_TOKEN
 */
echo "\n\n\nGets user's login url\n";
make_request("/partners/users/{$external_user_id}/auth_token", "GET");


/**
 * Get User information
 */
echo "\n\n\nGets user information\n";
make_request("/partners/users/{$external_user_id}", "GET");


?>
