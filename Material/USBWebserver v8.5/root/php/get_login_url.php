<?php
/**
 * This example script shows how to get a login URL for existing user, i.e. for SSO.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

// Change this to the ID of a user in organization defined in lib/request.php (via the API key and secret):
$external_user_id = 1426278890;

/**
 * GET USER LOGIN URL
 */
echo "\n\n\nGets user's login url\n";
make_request("/partners/users/{$external_user_id}/auth_token", "GET");

?>
