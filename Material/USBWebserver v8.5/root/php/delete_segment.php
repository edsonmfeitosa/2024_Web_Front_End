<?php
/**
 * This example script shows how to get a list of existing segments associated with an organization.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';


/**
 * Get All Organization Segments
 */
echo "\n\n\nGets all organization segments\n";
make_request("/partners/segments/", "GET");

/**
 * DELETE existing segment
 */
$segment_label = "1425598123new";
make_request("/partners/segments/{$segment_label}", "DELETE");

/**
 * Get All Organization Segments
 */
echo "\n\n\nGets all organization segments\n";
make_request("/partners/segments/", "GET");

?>
