<?php
/**
 * This example script shows how to get tutoring sessions for a tutor.
 */

/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';



// Change this to the ID of a user in organization defined in lib/request.php 
// (via the API key and secret).  This should be a user that has also been 
// configured to be a tutor by the team at Voxy:
$external_user_id = "1426254154";
$start_date = '2015-03-10';
$end_date = '2015-04-02';


/**
 * Get Tutor group sessions
 */
echo "\n\nGet Tutor group sessions\n";
make_request("/partners/group_sessions/tutor/{$external_user_id}", "GET");


/**
 * Get Tutor group sessions after a certain date
 */
echo "\n\nGet Tutor group sessions after a certain date\n";
$params = array(
    'start_date' => $start_date,
);
make_request("/partners/group_sessions/tutor/{$external_user_id}", "GET", $params);

/**
 * Get Tutor group sessions before a certain date
 */
echo "\n\nGet Tutor group sessions after a certain date\n";
$params = array(
    'end_date' => $end_date,
);
make_request("/partners/group_sessions/tutor/{$external_user_id}", "GET", $params);

/**
 * Get Tutor group sessions between two dates
 */
echo "\n\nGet Tutor group sessions between two date\n";
$params = array(
    'start_date' => $start_date,
    'end_date' => $end_date,
);
make_request("/partners/group_sessions/tutor/{$external_user_id}", "GET", $params);



?>
