<?php
/**
 * This example script shows how to access a list of users belonging
 * to an existing segment in your organization.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

$segment_label = "test_label";

/**
 * Get One Organization Segment
 */
echo "\n\n\nGets one organization segment\n";
make_request("/partners/segments/{$segment_label}", "GET");

?>
