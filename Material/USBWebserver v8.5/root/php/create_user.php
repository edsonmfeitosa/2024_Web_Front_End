<?php


/**
 * This example script shows how to create a new user for your organization.
 * If the user already exists in Voxy, this will associate the organization
 * external id with the existing user so the user may be referenced in the API
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

/**
 * SET USER ATTRIBUTES FOR NEW USER
 */
$external_user_id = time();
$first_name = "Xavi";
$email_address = "bob+{$external_user_id}@example.com";
$native_language = "en";
$invalid_native_language = "yy";
$level = 2;


/**
 * CREATE USER
 */
echo "\n\n\nCreates a valid user\n";
$params = array(
    'email_address' => $email_address,
    'first_name' => $first_name,
    'native_language' => $native_language,
    'expiration_date' => '2100-01-01',
    'phone_number' => '+19177151234',
    'level' => $level
);
make_request("/partners/users/{$external_user_id}", "POST", $params);


/**
 * Get User information after creation
 */
echo "\n\n\nGets a valid user's information\n";
make_request("/partners/users/{$external_user_id}", "GET");

?>