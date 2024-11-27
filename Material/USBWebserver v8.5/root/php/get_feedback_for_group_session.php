<?php
/**
 * This example script shows how to access a list of feedback for a Group Sessions
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';

$group_session_id = "70";

/**
 * Get Feedback for a Group Session
 */
echo "\n\n\nGets feedback for a group_session \n";
make_request("/partners/group_sessions/{$group_session_id}/feedback", "GET");

?>
