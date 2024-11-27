<?php
/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';


$external_user_id = "50d015f4e184804fbd2a9153a08e47d8";
$start_date = '2015-10-01';
$end_date = '2015-10-31';

/**
 * Get all units for a user between two dates
 */
echo "\n\nGet all units for an user between two dates\n";
$params = array(
    'start_date' => $start_date,
    'end_date' => $end_date,
);
make_request("/partners/users/{$external_user_id}/units", "GET", $params);



?>
