<?php
/**
 * This example script shows how to update the access expiration date on an existing user.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

// Change this to the ID of a user in organization defined in lib/request.php (via the API key and secret):
$external_user_id = "manuel+wsego@voxy.com_1421413256";

/**
 * SET USER PREMIUM EXPIRATION DATE
 */
echo "\n\n\nSets user premium expiration date\n";
$params = array(
    'expiration_date' => "2016-01-01"
);
make_request("/partners/users/{$external_user_id}", "PUT", $params);

?>
