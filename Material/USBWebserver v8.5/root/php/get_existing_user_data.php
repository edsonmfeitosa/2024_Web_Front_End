<?php
/**
 * This example script shows how to access data on an existing user.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';



// Change this to the ID of a user in organization defined in lib/request.php (via the API key and secret):
$external_user_id = "1425569955";


/**
 * Get User Units
 */
echo "\n\nGet User Units\n";
make_request("/partners/users/{$external_user_id}/units", "GET");
?>
