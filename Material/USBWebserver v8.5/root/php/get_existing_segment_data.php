<?php
/**
 * This example script shows how to get the Unit progress and performance
 * data for a list of users that belong to a given segment.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

// Change this to the segment_label of a label in organization defined in lib/request.php (via the API key and secret):
$segment_label = "test_label";

/**
 * Get User Units
 */
echo "\n\nGet Segment Data\n";
make_request("/partners/segments/{$segment_label}/", "GET");

echo "\n\nGet Units for Users in Segment\n";
make_request("/partners/segments/{$segment_label}/users/units", "GET");
?>
