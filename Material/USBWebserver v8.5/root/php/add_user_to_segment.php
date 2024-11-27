<?php
/**
 * This example script shows how to add a user to an existing segment.
 * If the segment does not exist, it will be created on the fly.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';



// Change this to the ID of a user in organization
// defined in lib/request.php (via the API key and secret)
// and the segment_label of a segment in the same organization :
$external_user_id = "1425569955";
$segment_label = "test_label";


/**
 * Add user to segment
 *
 */
echo "\n\n\nAdds user to segment\n";
$params = array();
make_request("/partners/segments/{$segment_label}/users/{$external_user_id}", "POST", $params);
make_request("/partners/segments/{$segment_label}", "GET");

?>