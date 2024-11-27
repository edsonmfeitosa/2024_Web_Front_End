<?php
/**
 * Set up API key and secret in lib/request.php
 * It uses a default example organization.
 * Edit this file with your credentials.
 */
require 'lib/request.php';


$segment_label = "SEGTYPE1_UN28CLSABLV03CR000046";
$start_date = '2015-10-01';
$end_date = '2015-10-31';

/**
 * Get all units for a segment between two dates
 */
echo "\n\nGet all units for a segment between two dates\n";
$params = array(
    'start_date' => $start_date,
    'end_date' => $end_date,
);
make_request("/partners/segments/{$segment_label}/users/units", "GET", $params);



?>
