<?php
/**
 * This example script shows how to access a list of Group Sessions
 * which members of the segment are scheduled for.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

$segment_label = "test_label";

/**
 * Get Group Sessions for Segment
 */
echo "\n\n\nGets group_sessions for members of a segment\n";
make_request("/partners/segments/{$segment_label}/users/group_sessions/", "GET");

?>
